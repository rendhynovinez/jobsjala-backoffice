<div id="app"></div>
  
  <script src="{{ asset('js/app.js') }}"></script> 
  <script src="{{ asset('/laravel-echo/dist/echo.js') }}"></script>
  <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


  <script>
          Pusher.logToConsole = true;
          window.Echo = new Echo({
            broadcaster: 'pusher',
            key: '8dccd075538e49c24305',
             cluster: 'ap1',
             encrypted: true,
             logToConsole: true
           });
                
            Echo.channel('user.<?php echo Auth::user()->id ? Auth::user()->id : 0; ?>')
            .listen('NewMessageNotification', (Data) => {
              OpenModal(Data);
            });


            //Open Modal Trigger Function
            function OpenModal(data){          
                  Swal.fire({
                    title: data.name,
                    imageUrl: 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcThsyVVdxkz5zyuE-yRKpdwtre_R234HkS2gQ&usqp=CAU',
                    imageWidth: 200,
                    imageHeight: 200,
                    showCloseButton: true,
                    showCancelButton: false,
                    showConfirmButton: false,
                    focusConfirm: false,
                    text: data.CustomerOrderToMitra.address,
                    footer: '<div style="padding:3px"><button class="btn" data-dismiss="modal" aria-hidden="true" onclick="UpdateOrderMitra(1,'+data.CustomerOrderToMitra.uid_customer+')">Terima</button></div><div style="padding:3px"><button class="btn" data-dismiss="modal"  onclick="UpdateOrderMitra(2,'+data.CustomerOrderToMitra.uid_customer+')" aria-hidden="true">Tolak</button></div>'
                })
           }
          

           // Submit Order
           function UpdateOrderMitra(statusOrder, statusReady, customerId){
            /*
             jika statusOrder = 1 (diterima) dan jika statusOrder = 2 (ditolak);
            */
            $('#overlay').fadeIn();

                $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                });
                $.ajax({
                        type:'POST',
                        url:'/api-updatemitra-statusorder-maps',
                        data:{uid_mitra:<?php echo Auth::user()->id ? Auth::user()->id : 0; ?>, status_order:statusOrder, status_ready:statusReady, customer_id : customerId},
                          success:function(data){
                            if(data.response=="Status Berhasil"){
                              location.reload();
                            }
                            $('#overlay').fadeOut();
                          }
                        });
                swal.close()
           }

           function ShowOrderDetai(){
            window.location = 'orderan-detail';
           }
           
</script>