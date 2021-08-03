
<div id="app"></div>
  
  <script src="{{ asset('js/app.js') }}"></script> 
  <script src="{{ asset('/laravel-echo/dist/echo.js') }}"></script>
  <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<script>

function sadulursend(){
  var idorder = document.getElementById("id_order").value;
            var duration = document.getElementById("duration").value;
            var payment_method = document.getElementById("payment_method").value;
            var alamat = document.getElementById("adress").value;
            var lat = document.getElementById("latitude").value;
            var lng = document.getElementById("longitude").value;
            var gender = document.getElementById("gender").value;
            var detail_alamat = document.getElementById("detail_alamat").value;
            var nomor_hp  = document.getElementById("nomor_hp").value;
            window.location="/home/countdown/"+idorder+"/"+duration+"/"+payment_method+"/"+alamat+"/"+lat+"/"+lng+"/"+gender+"/"+detail_alamat+"/"+nomor_hp;
}
        window.onload = function() {
            var countdownElement = document.getElementById('countdown'),
                downloadButton = document.getElementById('download'),
                ulangi = document.getElementById('ulangi'),
                mohontunggu = document.getElementById('mohontunggu'),
                pesan = document.getElementById('pesan'),
                
                
                seconds = 60,
                second = 0,
                interval;

            downloadButton.style.display = 'none';
            pesan.style.display = 'none';

            interval = setInterval(function() {
                countdownElement.firstChild.data = (seconds - second) + ' Detik';
                if (second >= seconds) {
                    downloadButton.style.display = 'block';
                    countdownElement.style.display = 'none';
                    mohontunggu.style.display = 'none';
                    ulangi.style.display = 'block';
                    pesan.style.display = 'block';
                    clearInterval(interval);
                }

                second++;
            }, 1000);
        }
  
          Pusher.logToConsole = true;
          window.Echo = new Echo({
            broadcaster: 'pusher',
            key: '8dccd075538e49c24305',
             cluster: 'ap1',
             encrypted: true,
             logToConsole: true
           });
                
            Echo.channel('order-ready.<?php echo Auth::user()->id ? Auth::user()->id : 0; ?>')
            .listen('EventReadyMitra', (Data) => {
                location.reload();
            });
</script>