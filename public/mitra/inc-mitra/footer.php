<!--  Scripts ------------> 
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script> 
<script type="text/javascript" src="js/materialize.js"></script> 
<!--<script type="text/javascript" src="js/materialize-old.js"></script>-->
<script type="text/javascript" src="js/init.js"></script>



<!-- Preloader ------------>
<script>
	$(window).load(function() {
        $(".loader").fadeOut("normal");
});
</script>


<!-- Go Back ------------>

<script>	
	document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, options);
  });

  // Or with jQuery

  $('.dropdown-trigger').dropdown();
	
	</script>


<!-- Go Back ------------>	

<script>
	
function goBack() {
  window.history.back()
}
	
</script>


<!-- Form Select ------------>	

<script> 
		 
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
		 
  
</script>

<!-- datepicker ------------> 
<script>
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.datepicker').datepicker();
  });

</script> 
	  
<!---------- Modal ------------>	

<script>
	document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.modal').modal();
  });

</script>	

<!-- slider ------------>	 

<script>
	
  var instance = M.Carousel.init({
    fullWidth: false,
    indicators: true
  });

  // Or with jQuery

  $('.carousel.carousel-slider').carousel({
    fullWidth: false,
    indicators: true
  });
   </script>	



	
</body>
</html>