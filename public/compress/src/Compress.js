// https://stackoverflow.com/questions/20600800/js-client-side-exif-orientation-rotate-and-mirror-jpeg-images/31273162#31273162

class Rotate{ orientation }{
	const orientation = (file) => {
  return new Promise((resolve, reject) => {
    const reader = new window.FileReader()

    reader.onload = function (event) {
      var view = new DataView(event.target.result)

      if (view.getUint16(0, false) !== 0xFFD8) {
        resolve(-2)
      }
      const length = view.byteLength
      let offset = 2

      while (offset < length) {
        const marker = view.getUint16(offset, false)
        offset += 2

        if (marker === 0xFFE1) {
          if (view.getUint32(offset += 2, false) !== 0x45786966) {
            resolve(-1)
          }
          const little = view.getUint16(offset += 6, false) === 0x4949
          offset += view.getUint32(offset + 4, little)
          const tags = view.getUint16(offset, little)
          offset += 2

          for (let i = 0; i < tags; i++) {
            if (view.getUint16(offset + (i * 12), little) === 0x0112) {
              resolve(view.getUint16(offset + (i * 12) + 8, little))
            }
          }
        } else if ((marker & 0xFF00) !== 0xFF00) break
        else offset += view.getUint16(offset, false)
      }
      resolve(-1)
    }
    reader.readAsArrayBuffer(file.slice(0, 64 * 1024))
  })
}

}

class Photo {
  constructor ({ quality = 0.75, size = 2, maxWidth = 1920, maxHeight = 1920, resize = true }) {
    this.start = window.performance.now()
    this.end = null

    this.alt = null
    this.ext = null
    this.startSize = null
    this.startWidth = null
    this.startHeight = null
    // How much will the quality decrease by each compression
    // this.stepQuality = stepQuality

    // size in MB
    this.size = size * 1000 * 1000
    this.endSize = null
    this.endWidth = null
    this.endHeight = null
    this.iterations = 0
    this.base64prefix = null
    // Carry out image resizing
    this.quality = quality
    this.resize = resize
    this.maxWidth = maxWidth
    this.maxHeight = maxHeight
    this.orientation = 1
  }
}

class Compress {
  attach (el, options) {
    return new Promise((resolve, reject) => {
      const input = document.querySelector(el)
      input.setAttribute('accept', 'image/*')
      input.addEventListener('change', (evt) => {
        const output = this.compress([...evt.target.files], options)
        resolve(output)
      }, false)
    })
  }

  compress (files, options) {
    function compressFile (file, options) {
      // Create a new photo object
      const photo = new Photo(options)
      photo.start = window.performance.now()
      photo.alt = file.name
      photo.ext = file.type
      photo.startSize = file.size

      return Rotate.orientation(file)
      .then((orientation) => {
        photo.orientation = orientation
        return File.load(file)
      })
      .then(compressImage(photo))
    }
    function compressImage (photo) {
      return (src) => {
        return Image.load(src).then((img) => {
          // Store the initial dimensions
          photo.startWidth = img.naturalWidth
          photo.startHeight = img.naturalHeight
          // Resize the image
          if (photo.resize) {
            const { width, height } = Image.resize(photo.maxWidth, photo.maxHeight)(img.naturalWidth, img.naturalHeight)
            photo.endWidth = width
            photo.endHeight = height
          } else {
            photo.endWidth = img.naturalWidth
            photo.endHeight = img.naturalHeight
          }
          return Converter.imageToCanvas(photo.endWidth, photo.endHeight, photo.orientation)(img)
        })
        .then((canvas) => {
          photo.iterations = 1
          // Base64.mime(Converter.canvasToBase64(canvas))
          photo.base64prefix = Base64.prefix(photo.ext)
          return loopCompression(canvas, photo.startSize, photo.quality, photo.size, photo.minQuality, photo.iterations)
        })
        .then((base64) => {
          photo.finalSize = Base64.size(base64)
          return Base64.data(base64)
        })
        .then((data) => {
          photo.end = window.performance.now()
          const difference = photo.end - photo.start // in ms

          return {
            data: data,
            prefix: photo.base64prefix,
            elapsedTimeInSeconds: difference / 1000, // in seconds
            alt: photo.alt,
            initialSizeInMb: Converter.size(photo.startSize).MB,
            endSizeInMb: Converter.size(photo.finalSize).MB,
            ext: photo.ext,
            quality: photo.quality,
            endWidthInPx: photo.endWidth,
            endHeightInPx: photo.endHeight,
            initialWidthInPx: photo.startWidth,
            initialHeightInPx: photo.startHeight,
            sizeReducedInPercent: (photo.startSize - photo.finalSize) / photo.startSize * 100,
            iterations: photo.iterations
          }
        })
      }
    }
    function loopCompression (canvas, size, quality = 1, targetSize, targetQuality = 1, iterations) {
      const base64str = Converter.canvasToBase64(canvas, quality)
      const newSize = Base64.size(base64str)
      // const base64str = convertCanvasToBase64(src)
      // const size = getFileSize(base64str);
      iterations += 1
      // add in iteration count
      if (newSize > targetSize) {
        return loopCompression(canvas, newSize, quality - 0.1, targetSize, targetQuality, iterations)
      }

      if (quality > targetQuality) {
        return loopCompression(canvas, newSize, quality - 0.1, targetSize, targetQuality, iterations)
      }

      if (quality < 0.5) {
        return base64str
      }
      return base64str
    }
    return Promise.all(files.map((file) => {
      return compressFile(file, options)
    }))
  }
  static convertBase64ToFile (base64, mime) {
    return Converter.base64ToFile(base64, mime)
  }
}


// Supported input formats
// image/png, image/jpeg, image/jpg, image/gif, image/bmp, image/tiff, image/x-icon,  image/svg+xml, image/webp, image/xxx
// image/png, image/jpeg, image/webp

