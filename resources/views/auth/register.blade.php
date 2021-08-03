@include('inc-mitra.header')
        <style>
        /****** CSS SADULUR UPLOAD FILE ******/
        /****** KTP ******/
        .file-upload-ktp{display:block;text-align:center;font-family: Helvetica, Arial, sans-serif;font-size: 12px;}
        .file-upload-ktp .file-select{display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
        .file-upload-ktp .file-select .file-select-button{background:#dce4ec;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
        .file-upload-ktp .file-select .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}
        .file-upload-ktp .file-select:hover{border-color:#34495e;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
        .file-upload-ktp .file-select:hover .file-select-button{background:#34495e;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
        .file-upload-ktp.active .file-select{border-color:#3fa46a;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
        .file-upload-ktp.active .file-select .file-select-button{background:#3fa46a;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
        .file-upload-ktp .file-select input[type=file]{z-index:100;cursor:pointer;position:absolute;height:100%;width:100%;top:0;left:0;opacity:0;filter:alpha(opacity=0);}
        .file-upload-ktp .file-select.file-select-disabled{opacity:0.65;}
        .file-upload-ktp .file-select.file-select-disabled:hover{cursor:default;display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;margin-top:5px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
        .file-upload-ktp .file-select.file-select-disabled:hover .file-select-button{background:#dce4ec;color:#666666;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
        .file-upload-ktp .file-select.file-select-disabled:hover .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}

         /****** SERTIFIKAT ******/
        .file-upload-sertifikat{display:block;text-align:center;font-family: Helvetica, Arial, sans-serif;font-size: 12px;}
        .file-upload-sertifikat .file-select{display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
        .file-upload-sertifikat .file-select .file-select-button{background:#dce4ec;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
        .file-upload-sertifikat .file-select .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}
        .file-upload-sertifikat .file-select:hover{border-color:#34495e;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
        .file-upload-sertifikat .file-select:hover .file-select-button{background:#34495e;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
        .file-upload-sertifikat.active .file-select{border-color:#3fa46a;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
        .file-upload-sertifikat.active .file-select .file-select-button{background:#3fa46a;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
        .file-upload-sertifikat .file-select input[type=file]{z-index:100;cursor:pointer;position:absolute;height:100%;width:100%;top:0;left:0;opacity:0;filter:alpha(opacity=0);}
        .file-upload-sertifikat .file-select.file-select-disabled{opacity:0.65;}
        .file-upload-sertifikat .file-select.file-select-disabled:hover{cursor:default;display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;margin-top:5px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
        .file-upload-sertifikat .file-select.file-select-disabled:hover .file-select-button{background:#dce4ec;color:#666666;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
        .file-upload-sertifikat .file-select.file-select-disabled:hover .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}

        /****** SELFIE ******/
        .file-upload-selfie{display:block;text-align:center;font-family: Helvetica, Arial, sans-serif;font-size: 12px;}
        .file-upload-selfie .file-select{display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
        .file-upload-selfie .file-select .file-select-button{background:#dce4ec;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
        .file-upload-selfie .file-select .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}
        .file-upload-selfie .file-select:hover{border-color:#34495e;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
        .file-upload-selfie .file-select:hover .file-select-button{background:#34495e;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
        .file-upload-selfie.active .file-select{border-color:#3fa46a;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
        .file-upload-selfie.active .file-select .file-select-button{background:#3fa46a;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
        .file-upload-selfie .file-select input[type=file]{z-index:100;cursor:pointer;position:absolute;height:100%;width:100%;top:0;left:0;opacity:0;filter:alpha(opacity=0);}
        .file-upload-selfie .file-select.file-select-disabled{opacity:0.65;}
        .file-upload-selfie .file-select.file-select-disabled:hover{cursor:default;display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;margin-top:5px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
        .file-upload-selfie .file-select.file-select-disabled:hover .file-select-button{background:#dce4ec;color:#666666;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
        .file-upload-selfie .file-select.file-select-disabled:hover .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}

       </style>

        <nav class="navbar navbar-expand-md navbar-light bg-blue shadow-sm">
                <div class="container">
                <a href="#" class="navbar-brand">
                    PENDAFTARAN APLIKASI SADULUR
                </a> 
        </nav>
        <div class="container">
            <div class="section"> 
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Mendaftar Sebagai :</label>
                            <div class="col-md-6">
                                <select id="permission" name="permission" onchange="permissionChange('permission')" required autocomplete="permission">
                                    <option value="" disabled selected>--Pilih--</option>
                                    <option value="1">Pelanggan</option>
                                    <option value="2">Mitra / Bisnis</option>
                                </select>  
                                @error('permission')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      
                        <div id="div1" style="display:none;">
                        <!-- Mitra Detail Form -->

                        <div class="form-group row">
                            <label for="tipe_layanan" class="col-md-4 col-form-label text-md-right">Tipe Layanan</label>
                            <div class="col-md-6">
                                <select id="tipe_layanan" name="tipe_layanan" autocomplete="tipe_layanan" autofocus>
                                    <option value="" disabled selected>--Pilih--</option>
                                    <option value="1">Message</option>
                                    <option value="2">Cleaning</option>
                                    <option value="3">Education</option>
                                </select>  
                            </div>
                        </div>
                     
                        <div class="form-group row">
                            <label for="jenis_kelamin" class="col-md-4 col-form-label text-md-right">Jenis Kelamin</label>
                            <div class="col-md-6">
                                <select id="jenis_kelamin" name="jenis_kelamin" autocomplete="jenis_kelamin" autofocus>
                                    <option value="" disabled selected>--Pilih--</option>
                                    <option value="1">Pria</option>
                                    <option value="2">Wanita</option>
                                </select>  
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kota" class="col-md-4 col-form-label text-md-right">Kota</label>
                            <div class="col-md-6">
                                <input id="kota" type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" value="{{ old('kota') }}"  autocomplete="kota" autofocus>
                                @error('kota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat_lengkap" class="col-md-4 col-form-label text-md-right">Alamat Lengkap Tempat Tinggal saat ini</label>
                            <div class="col-md-6">
                                <input id="alamat_lengkap" type="text" class="form-control @error('alamat_lengkap') is-invalid @enderror" name="alamat_lengkap" value="{{ old('alamat_lengkap') }}"  autocomplete="alamat_lengkap" autofocus>

                                @error('alamat_lengkap')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kecamatan" class="col-md-4 col-form-label text-md-right">Kecamatan Tempat Tinggal saat ini</label>
                            <div class="col-md-6">
                                <input id="kecamatan" type="text" class="form-control @error('kecamatan') is-invalid @enderror" name="kecamatan" value="{{ old('kecamatan') }}" autocomplete="kecamatan" autofocus>
                                @error('kecamatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_hp" class="col-md-4 col-form-label text-md-right">Nomor Whatsapp / Telegram</label>
                            <div class="col-md-6">
                                <input id="no_hp" type="text" onkeypress="return hanyaAngka(event)" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" autocomplete="no_hp" autofocus>
                                @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nik" class="col-md-4 col-form-label text-md-right">No NIK KTP</label>
                            <div class="col-md-6">
                                <input id="nik" type="text" onkeypress="return hanyaAngka(event)" class="form-control @error('nik') is-invalid @enderror" name="nik" maxlength="16" value="{{ old('nik') }}"  autocomplete="nik" autofocus>
                                @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tgl_lahir" class="col-md-4 col-form-label text-md-right">Tanggal Lahir (Tgl/Bln/Thn)</label>
                            <div class="col-md-6">
                                <div class="input-group date" data-provide="datepicker">
                                        <input class="datepicker" id="tgl_lahir" name="tgl_lahir" data-date-format="mm/dd/yyyy" autofocus>
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question_profesi" class="col-md-4 col-form-label text-md-right">Sebelumnya pernah bergabung di aplikasi profesi yang serupa? (Pilih salah satu)</label>
                            <div class="col-md-6">
                                <select id="question_profesi" name="question_profesi" autofocus>
                                    <option value="" disabled selected>--Pilih--</option>
                                    <option value="1">Ya</option>
                                    <option value="2">Tidak</option>
                                </select>  
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question_institusi" class="col-md-4 col-form-label text-md-right">Jika menjawab iya pada pertanyaan diatas, sebutkan nama institusi/aplikasinya</label>
                            <div class="col-md-6">
                                <input id="question_institusi" type="text" class="form-control @error('question_institusi') is-invalid @enderror" name="question_institusi" value="{{ old('question_institusi') }}" autocomplete="question_institusi" autofocus>
                                @error('institusi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status_kerabat" class="col-md-4 col-form-label text-md-right">Mengetahui informasi aplikasi SADULUR HOMECARE darimana?</label>
                            <div class="col-md-6">
                                <select id="status_kerabat" name="status_kerabat" autocomplete="status_kerabat" autofocus>
                                    <option value="" disabled selected>--Pilih--</option>
                                    <option value="1">Teman</option>
                                    <option value="2">Saudara</option>
                                    <option value="3">Social Media</option>
                                    <option value="4">Lainnya</option>
                                </select>  
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="question_kerabat" class="col-md-4 col-form-label text-md-right">Jika dikenalkan oleh Teman, siapa nama Teman yang dimaksud?</label>
                            <div class="col-md-6">
                                <input id="question_kerabat" type="text" class="form-control @error('question_kerabat') is-invalid @enderror" name="question_kerabat" value="{{ old('question_kerabat') }}" autocomplete="question_kerabat" autofocus>
                                @error('kerabat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question_lainnya" class="col-md-4 col-form-label text-md-right">Jika mengisi Lainnya, dijelaskan dari mana atau dari siapa?</label>
                            <div class="col-md-6">
                                <input id="question_lainnya" type="text" class="form-control @error('question_lainnya') is-invalid @enderror" name="question_lainnya" value="{{ old('question_lainnya') }}" autocomplete="question_lainnya" autofocus>
                                @error('lainnya')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question_aplikasi_lain" class="col-md-4 col-form-label text-md-right">Apa saat ini bergabung di Aplikasi Homecare lain atau institusi lain ? Jika menjawab YA, ditulis juga nama Aplikasinya atau institusinya </label>
                            <div class="col-md-6">
                                <input id="question_aplikasi_lain" type="text" class="form-control @error('question_aplikasi_lain') is-invalid @enderror" name="question_aplikasi_lain" value="{{ old('question_aplikasi_lain') }}"  autocomplete="question_aplikasi_lain" autofocus>
                                @error('question_aplikasi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- Management File -->

                        <!-- Upload Sertifikat -->
                        <!-- <div class="form-group row">
                            <label for="upload_sertifikat" class="col-md-4 col-form-label text-md-right">Upload bukti sertifikat sesuai keahlian (bagi calon mitra layanan massage dan cleaning)/ Ijazah terakhir bagi calon mitra layanan edukasi</label>
                            <div class="col-md-6">
                                <div class="file-upload-sertifikat">
                                    <div class="file-select">
                                        <div class="file-select-button" id="fileName">Pilih File</div>
                                        <div class="file-select-name" id="noFileSertifikat">File belum dipilih...</div> 
                                        <input type="file" name="chooseFileSertifikat" id="chooseFileSertifikat" onchange="previewFile('sertifikat')">
                                    </div>
                                </div>                  
                            </div>
                        </div> -->
                         <!-- View Sertifikat -->
                        <!-- <div class="form-group row">
                            <label for="hasil_sertifikat" class="col-md-4 col-form-label text-md-right">Hasil Upload Sertifikat</label>
                            <div class="col-md-6">
                                <div style="display:none;">
                                    <img id="source_image_sertifikat" />
                                    <input type="text" id="base64Sertifikat" name="base64Sertifikat">
                                    <input id="jpeg_encode_quality" size='3' readonly='true' type="text" value="30" />
                                </div>
                                    <img id="result_compress_sertifikat" class='img_container' width="130" height="140"/>
                            </div>
                        </div> -->
                        <input type="hidden" id="base64Sertifikat" name="base64Sertifikat">

                        <!-- Upload KTP -->
                        <!-- <div class="form-group row">
                            <label for="upload_ktp" class="col-md-4 col-form-label text-md-right">Upload foto KTP terbaru (wajib)</label>
                            <div class="col-md-6">
                                <div class="file-upload-ktp">
                                    <div class="file-select">
                                        <div class="file-select-button" id="fileName">Pilih File</div>
                                        <div class="file-select-name" id="noFileKtp">File belum dipilih...</div> 
                                        <input type="file" name="chooseFileKtp" id="chooseFileKtp" onchange="previewFile('ktp')">
                                    </div>
                                </div>                  
                            </div>
                        </div> -->
    
                                        
                        <!-- View Ktp -->
                        <!-- <div class="form-group row">
                            <label for="hasil_ktp" class="col-md-4 col-form-label text-md-right">Hasil Upload KTP</label>
                            <div class="col-md-6">
                                    <div style="display:none;">
                                        <img id="source_image_ktp" />
                                        <input type="text" id="base64Ktp" name="base64Ktp">
                                    </div>
                                         <img id="result_compress_ktp" class='img_container' width="130" height="140"/>
                            </div>
                        </div> -->
                        <input type="hidden" id="base64Ktp" name="base64Ktp">
                        <!-- Upload SELFIE -->
                        <!-- <div class="form-group row">
                            <label for="upload_selfie" class="col-md-4 col-form-label text-md-right">Upload Foto Selfie Sambil Memegang KTP</label>
                            <div class="col-md-6">
                                <div class="file-upload-selfie">
                                    <div class="file-select">
                                        <div class="file-select-button" id="fileName">Pilih File</div>
                                        <div class="file-select-name" id="noFileSelfie">File belum dipilih...</div> 
                                        <input type="file" name="chooseFileSelfie" id="chooseFileSelfie" onchange="previewFile('selfie')">
                                    </div>
                                </div>                  
                             </div>
                        </div> -->
                        
                        <!-- View Selfie -->
                        <!-- <div class="form-group row">
                            <label for="hasil_selfie" class="col-md-4 col-form-label text-md-right">Hasil Upload Selfie</label>
                            <div class="col-md-6">
                                    <div style="display:none;">
                                        <img id="source_image_selfie" />
                                        <input type="text" id="base64Selfie" name="base64Selfie">
                                    </div>
                                    <img id="result_compress_selfie" class='img_container' width="130" height="140"/>
                            </div>
                        </div> -->
                        <input type="hidden" id="base64Selfie" name="base64Selfie">
                        <div class="form-group row">
                            <label for="question_peraturan" class="col-md-4 col-form-label text-md-right">Apakah anda siap untuk mentaati segala kebijakan SADULUR HOMECARE ?</label>
                            <div class="col-md-6">
                                <select id="question_peraturan" name="question_peraturan">
                                    <option value="" disabled selected>--Pilih--</option>
                                    <option value="1">Ya</option>
                                    <option value="2">Tidak</option>
                                </select>  
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question_promosi" class="col-md-4 col-form-label text-md-right">Apakah anda siap mempromosikan Aplikasi SADULUR HOMECARE kepada siapapun dan dimanapun ?</label>
                                <div class="col-md-6">
                                    <select id="question_promosi" name="question_promosi">
                                        <option value="" disabled selected>--Pilih--</option>
                                        <option value="1">Ya</option>
                                        <option value="2">Tidak</option>
                                    </select>  
                                </div>
                        </div>
                        
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn w-100 bg-blue">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
         </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

  <script>   

        // Compress To Base 64
            if (!window.console)
                console = {};

                // var console_out = document.getElementById('console_out');
                var output_format = "jpg";

                var encodeButton = document.getElementById('jpeg_encode_button');
                var encodeQuality = document.getElementById('jpeg_encode_quality');

                function previewFile(condition) { 
                if(condition=="sertifikat"){
                    var preview = document.getElementById('source_image_sertifikat');
                    var previewCompress =  document.getElementById('result_compress_sertifikat');
                    var file   = document.querySelector('input[name=chooseFileSertifikat]').files[0];
                }
                else if(condition=="ktp"){
                    var preview = document.getElementById('source_image_ktp');
                    var previewCompress =  document.getElementById('result_compress_ktp');
                    var file   = document.querySelector('input[name=chooseFileKtp]').files[0];
                }
                else if(condition == "selfie"){
                    var preview = document.getElementById('source_image_selfie');
                    var previewCompress =  document.getElementById('result_compress_selfie');
                    var file   = document.querySelector('input[name=chooseFileSelfie]').files[0];
                   
                }
                
               
                
                var reader  = new FileReader();
                reader.addEventListener("load", function(e) {
                    preview.src = e.target.result; 
                    preview.onload = function() {
                    compressFile(this, previewCompress,condition)
                    };
                }, false);

                if (file) {  
                    reader.readAsDataURL(file);
                }
                }


                function compressFile(loadedData, preview,condition) { 
                if(condition=="sertifikat"){
                    var result_image = document.getElementById('result_compress_sertifikat');
                }else if(condition=="ktp"){
                    var result_image = document.getElementById('result_compress_ktp');
                }else if(condition=="selfie"){
                    var result_image = document.getElementById('result_compress_selfie');
                }
                

                var quality = parseInt(encodeQuality.value);
                var time_start = new Date().getTime();

                var mime_type = "image/jpeg";
                if (typeof output_format !== "undefined" && output_format == "png") {
                    mime_type = "image/png";
                }

                var cvs = document.createElement('canvas');
                cvs.width = loadedData.width;
                cvs.height = loadedData.height;
                var ctx = cvs.getContext("2d").drawImage(loadedData, 0, 0);
                var newImageData = cvs.toDataURL(mime_type, quality / 100);
                var result_image_obj = new Image();
                result_image_obj.src = newImageData;
                result_image.src = result_image_obj.src;
                if(condition=="sertifikat"){
                    document.getElementById('base64Sertifikat').value = result_image.src;
                }else if(condition=="ktp"){
                    document.getElementById('base64Ktp').value = result_image.src;
                }
                else if(condition=="selfie"){
                    document.getElementById('base64Selfie').value = result_image.src;
                }
               
                result_image.onload = function() {}
                var duration = new Date().getTime() - time_start;

            }

                // FILE UPLOAD
                $('#chooseFileSertifikat').bind('change', function () {
                var filename = $("#chooseFileSertifikat").val();
                if (/^\s*$/.test(filename)) {
                    $(".file-upload-sertifikat").removeClass('active');
                    $("#noFileSertifikat").text("No file chosen..."); 
                }else {
                    $(".file-upload-sertifikat").addClass('active');
                    $("#noFileSertifikat").text(filename.replace("C:\\fakepath\\", "")); 
                }
                });

                $('#chooseFileKtp').bind('change', function () {
                var filename = $("#chooseFileKtp").val();
                if (/^\s*$/.test(filename)) {
                    $(".file-upload-ktp").removeClass('active');
                    $("#noFileKtp").text("No file chosen..."); 
                }else {
                    $(".file-upload-ktp").addClass('active');
                    $("#noFileKtp").text(filename.replace("C:\\fakepath\\", "")); 
                }
                });

                $('#chooseFileSelfie').bind('change', function () {
                var filename = $("#chooseFileSelfie").val();
                if (/^\s*$/.test(filename)) {
                    $(".file-upload-selfie").removeClass('active');
                    $("#noFileSelfie").text("No file chosen..."); 
                }else {
                    $(".file-upload-selfie").addClass('active');
                    $("#noFileSelfie").text(filename.replace("C:\\fakepath\\", "")); 
                }
                });

                // ONLY NUMBER KTP
                function hanyaAngka(evt) {
                var charCode = (evt.which) ? evt.which : event.keyCode
                if (charCode > 31 && (charCode < 48 || charCode > 57))
        
                    return false;
                return true;
                }

                // Open Detail Jika Mitra
                function permissionChange(permission){
                    if(document.getElementById("permission").value == '2'){
                        $("#div1").fadeIn();
                        document.getElementById("jenis_kelamin").required = true;
                        document.getElementById("tipe_layanan").required = true;
                        document.getElementById("kota").required = true;
                        document.getElementById("alamat_lengkap").required = true;
                        document.getElementById("kecamatan").required = true;
                        document.getElementById("no_hp").required = true;
                        document.getElementById("nik").required = true;
                        document.getElementById("tgl_lahir").required = true;
                        document.getElementById("question_profesi").required = true;
                        document.getElementById("question_institusi").required = true;
                        document.getElementById("status_kerabat").required = true;
                        document.getElementById("question_kerabat").required = true;
                        document.getElementById("question_lainnya").required = true;
                        document.getElementById("question_aplikasi_lain").required = true;
                        document.getElementById("chooseFileSertifikat").required = true;
                        document.getElementById("chooseFileKtp").required = true;
                        document.getElementById("chooseFileSelfie").required = true;
                        document.getElementById("question_peraturan").required = true;
                        document.getElementById("question_promosi").required = true;
                    }else{
                        $("#div1").fadeOut();
                        document.getElementById("jenis_kelamin").required = false;
                        document.getElementById("tipe_layanan").required = false;
                        document.getElementById("kota").required = false;
                        document.getElementById("alamat_lengkap").required = false;
                        document.getElementById("kecamatan").required = false;
                        document.getElementById("no_hp").required = false;
                        document.getElementById("nik").required = false;
                        document.getElementById("tgl_lahir").required = false;
                        document.getElementById("question_profesi").required = false;
                        document.getElementById("question_institusi").required = false;
                        document.getElementById("status_kerabat").required = false;
                        document.getElementById("question_kerabat").required = false;
                        document.getElementById("question_lainnya").required = false;
                        document.getElementById("question_aplikasi_lain").required = false;
                        document.getElementById("chooseFileSertifikat").required = false;
                        document.getElementById("chooseFileKtp").required = false;
                        document.getElementById("chooseFileSelfie").required = false;
                        document.getElementById("question_peraturan").required = false;
                        document.getElementById("question_promosi").required = false;
                    }
                }

                $(document).ready(function() {
                $('.datepicker').datepicker({ format: "dd/mm/yyyy" });
}); 
    </script>


@include('inc.footer')

