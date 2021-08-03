<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Expanding Grid Item Animation | Codrops</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/base.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{asset('pater/pater.css')}}" />
		<link rel="stylesheet" href="{{asset('AdminLTE-3.0.5/plugins/fontawesome-free/css/all.min.css')}}">
		<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</head>
    
	<body class="loading">
		<svg class="hidden">
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
			</symbol>
			<symbol id="icon-drop" viewBox="0 0 24 24">
				<title>drop</title>
				<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
			</symbol>
			<symbol id="icon-cross" viewBox="0 0 24 24">
				<title>cross</title>
				<path d="M 5.5,2.5 C 5.372,2.5 5.244,2.549 5.146,2.646 L 2.646,5.146 C 2.451,5.341 2.451,5.659 2.646,5.854 L 8.793,12 2.646,18.15 C 2.451,18.34 2.451,18.66 2.646,18.85 L 5.146,21.35 C 5.341,21.55 5.659,21.55 5.854,21.35 L 12,15.21 18.15,21.35 C 18.24,21.45 18.37,21.5 18.5,21.5 18.63,21.5 18.76,21.45 18.85,21.35 L 21.35,18.85 C 21.55,18.66 21.55,18.34 21.35,18.15 L 15.21,12 21.35,5.854 C 21.55,5.658 21.55,5.342 21.35,5.146 L 18.85,2.646 C 18.66,2.451 18.34,2.451 18.15,2.646 L 12,8.793 5.854,2.646 C 5.756,2.549 5.628,2.5 5.5,2.5 Z"/>
			</symbol>
			<!-- Magnifier by Gregor Cresnar https://www.flaticon.com/authors/gregor-cresnar -->
			<symbol id="icon-magnifier" viewBox="0 0 490.8 490.8">
				<title>magnifier</title>
				<path d="M364.8,299.55c46.3-75.8,36.9-176.3-28.6-241.9c-76.8-76.8-201.8-76.8-278.6,0s-76.8,201.8,0,278.5c65.5,65.5,166,74.9,241.9,28.6L412,477.25c18,18,47.3,18,65.3,0s18-47.3,0-65.3L364.8,299.55z M295.5,295.55c-54.4,54.4-142.8,54.4-197.1,0c-54.4-54.4-54.4-142.8,0-197.1c54.4-54.4,142.8-54.4,197.1,0C349.8,152.75,349.8,241.15,295.5,295.55z M220,171.95h59.4v45.3H220v59.4h-45.3v-59.4h-59.3v-45.3h59.4v-59.4h45.3v59.4H220z"/>
			</symbol>
		<main>
			<div class="content">
				<header class="codrops-header">
					<form id="form" class="listproduct" action="{{ url()->current() }}">
						<input
						class="input-search"
						type="text"
						id="search"
						name="keyword"
						placeholder="Search Product"
						/>
						<button class="btn-search"><li class="fa fa-search"></li></button>
						@if(isset($user))

							<!-- <a class="btn-signup" data-toggle="modal" data-target="#exampleModal""><li class="fa fa-user"></li>   {{$user->username}}</a> -->
							<a class="btn-logout" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>       
						@endif 
					</form>


					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

          				{{ csrf_field() }}
     				 </form>
				</header>
			</div>
			<button class="dummy-menu"><svg class="icon icon--menu"><use xlink:href="#icon-menu"></use></svg></button>
			<div class="content">
				<div class="grid">
				<div class="infinite-scroll">
				<div class="row">
					@foreach($Product as $P)
								<div class="grid__item">
									<div class="product">
										<div class="product__bg">{{$P->bg}}</div>
										<img class="product__img" src="{{ url('app/public/storage/'.$P->img) }}" alt="img 01"/>
										<h2 class="product__title">{{$P->title}}</h2>
										<h3 class="product__subtitle">{{$P->subtitle}}</h3>
										<p class="product__description">{{$P->description}}</p>
										<div class="product__price">{{$P->price}}</div>
									</div>
								</div>
					@endforeach
					{{ $Product->links() }} 
				</div>
					
				  </div>
				</div>
			</div>
			<section class="content content--related">
				<p>Find this project on <a href="https://github.com/codrops/ExpandingGridItemAnimation/">GitHub</a>.</p>
				<p>If you enjoyed this demo you might also like:</p>
				<a class="media-item" href="https://tympanus.net/Development/AnimatedGridLayout/">
					<img class="media-item__img" src="{{asset('img/related/GridItemAnimation.jpg')}}">
					<h3 class="media-item__title">Grid Item Animation Layout</h3>
				</a>
				<a class="media-item" href="https://tympanus.net/Development/ImageGridEffects/">
					<img class="media-item__img" src="{{asset('img/related/ImageGridEffects.png')}}">
					<h3 class="media-item__title">Effect Ideas for Image Grids</h3>
				</a>
				<p>Guitar vector <a href="http://www.freepik.com">designed by Freepik</a>.</p>
				<p>Patterns by <a href="https://pixelbuddha.net/">Pixel Buddha</a>.</p>
			</section>
		</main>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
		<script src="{{asset('js/anime.min.js')}}"></script>
		<script src="{{asset('js/main.js')}}"></script>
		<script src="{{asset('ga/jscroll-master/jquery.jscroll.js')}}"></script>
		<script type="text/javascript">
			$('ul.pagination').hide();
			$(function() {
				$('.infinite-scroll').jscroll({
					autoTrigger: true,
					loadingHtml: '<img class="center-block" src="{{asset('img/loadings.gif')}}" alt="Loading..." />',
					padding: 0,
					nextSelector: '.pagination li.active + li a',
					contentSelector: 'div.infinite-scroll',
					callback: function() {
						$('ul.pagination').remove();
					}
				});
			});
		</script>
	</body>
</html>
@include('auth.login-modal')