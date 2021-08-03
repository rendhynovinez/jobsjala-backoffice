<!-- Disabled No Copy Select-->
<script language=JavaScript>
    document.addEventListener("load", function(){
      // TARGET THIS SECTION ONLY
      var target = document.getElementById("Identity-check");

      // PREVENT CONTEXT MENU FROM OPENING
      target.addEventListener("contextmenu", function(evt){
        evt.preventDefault();
      }, false);

      // PREVENT CLIPBOARD COPYING
      target.addEventListener("copy", function(evt){
        // Change the copied text if you want
        evt.clipboardData.setData("text/plain", "Copying is not allowed on this webpage");
        // Prevent the default copy action
        evt.preventDefault();
      }, false);
    });


    // Test

    function clickIE4(){

        if (event.button==2){

        return false;

        }

        }

        function clickNS4(e){

        if (document.layers||document.getElementById&&!document.all){

        if (e.which==2||e.which==3){

        return false;

        }

        }

        }

        if (document.layers){

        document.captureEvents(Event.MOUSEDOWN);

        document.onmousedown=clickNS4;

        }

        else if (document.all&&!document.getElementById){

        document.onmousedown=clickIE4;

        }

        document.oncontextmenu=new Function("return false")
        // –>
</script>

<style>
    /* NO SELECT + HIGHLIGHT COLOR */
    #Identity-check {
      user-select: none;
    }
    #Identity-check::selection {
      background: none;
    }
    #Identity-check::-moz-selection {
      background: none;
    }
</style>
