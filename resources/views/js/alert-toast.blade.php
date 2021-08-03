<script>
    @if(Session::has('message'))
      var type = "{{ Session::get('alert-type', 'info') }}";
      switch(type){
          case 'info':
              toastr.info("{{ Session::get('message') }}");
              break;

          case 'warning':
              toastr.warning("{{ Session::get('message') }}");
              break;

          case 'success':
              toastr.success("{{ Session::get('message') }}");
              break;

          case 'error':
              toastr.error("{{ Session::get('message') }}");
              break;
      }
    @endif


    function handleAjaxError( xhr, textStatus, error ) {
        if ( textStatus === 'timeout' ) {
            Swal.fire(
                'Request Timeout',
                'The server took too long to send the data.',
                'warning'
            )
        }
        else {
            Swal.fire(
                'No Internet Connection',
                'An error occurred on the server. Please try again in a minute.',
                'warning'
            )
        }
        // dTable.fnProcessingIndicator( false );
        dTable.draw()
    }

    // jQuery.fn.dataTableExt.oApi.fnProcessingIndicator = function ( oSettings, onoff ) {
    //     if ( typeof( onoff ) == 'undefined' ) {
    //         onoff = true;
    //     }
    //     this.oApi._fnProcessingDisplay( oSettings, onoff );
    // };
</script>
