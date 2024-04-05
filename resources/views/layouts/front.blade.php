<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{$title ??''}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('blog/css/animate.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('blog/css/bootstrap.css')}}">


	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('blog/css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
        <body dir="rtl">
		
	<div class="gtco-loader"></div>
	
	<div id="page">
	<nav class="gtco-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-7 text-left">
					<div id="gtco-logo"><a href="{{route('landing')}}">ElectronicOS</a></div>
				</div>
				<div class="col-xs-5  text-right menu-1">
					<ul>
						<li><a href="{{route('landing')}}">صفحه اصلی</a></li>
						<li class="has-dropdown">
							<a href="#">مقالات</a>
							<ul class="dropdown">
                                                          @forelse($categories as $category)
								<li><a href="{{route('category.show',$category->slug)}}">{{$category->name}}</a></li>
                                                          @empty
                                                          <div></div> 
                                                          @endforelse   
							</ul>
						</li>
                                                 @guest
						<li><a href="{{route('login')}}">ورود/عضویت</a></li>
                                                
                                                @else
						<li  class="has-dropdown"><a href="#">{{auth()->user()->name}}</a>
                                                <ul class="dropdown">
  
                                                            <li><a href="{{route('dashboard')}}">داشبورد مدیریت</a></li>
                                                            <li><a href="{{route('logout')}}" onclick="logoutUser(event)">خروج</a></li>                                                           
								
							</ul>
                                                </li>                                                
                                                @endguest
                                        
                                        </ul> 
				</div>
			</div>
			
		</div>
	</nav>
            <form action="{{route('logout')}}" method="post" id="logout-form">
                @csrf
                
            </form>

{{$slot}}

<footer id="gtco-footer" role="contentinfo">
	<!--	<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-12">
					<h3 class="footer-heading">Most Popular</h3>
				</div>
				<div class="col-md-4">
					<div class="post-entry">
						<div class="post-img">
							<a href="#"><img src="images/img_1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by GetTemplates.co"></a>
						</div>
						<div class="post-copy">
							<h4><a href="#">How Web Hosting Can Impact Page Load Speed</a></h4>
							<a href="#" class="post-meta"><span class="date-posted">4 days ago</span></a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="post-entry">
						<div class="post-img">
							<a href="#"><img src="images/img_2.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by GetTemplates.co"></a>
						</div>
						<div class="post-copy">
							<h4><a href="#">How Web Hosting Can Impact Page Load Speed</a></h4>
							<a href="#" class="post-meta"><span class="date-posted">4 days ago</span></a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="post-entry">
						<div class="post-img">
							<a href="#"><img src="images/img_3.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by GetTemplates.co"></a>
						</div>
						<div class="post-copy">
							<h4><a href="#">How Web Hosting Can Impact Page Load Speed</a></h4>
							<a href="#" class="post-meta"><span class="date-posted">4 days ago</span></a>
						</div>
					</div>
				</div>
			</div>
                            -->

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; کلیه حقوق مادی و معنوی متعلق به موسسه ی مجازی الکترونیک اپن سورس می باشد  ۱۴۰۳
</small> 
						<small class="block"><a href="{{route('landing')}}">Electronicos.co</a></small>
					</p>
					<p>
						<ul class="gtco-social-icons">
							<li><a href="#"><img style="width:30px" src="{{asset('blog/img/instagram-94.png')}}" /></a></li>
							<li><a href="#"><img style="width:30px" src="{{asset('blog/img/telegram-94.png')}}"></i></a></li>
							
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
        <script>
	function logoutUser(event) {
     event.preventDefault()       
    document.getElementById('logout-form').submit();
}</script>
	<!-- jQuery -->
	<script src="{{asset('blog/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('blog/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('blog/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('blog/js/jquery.waypoints.min.js')}}"></script>
	<!-- Stellar -->
	<script src="{{asset('blog/js/jquery.stellar.min.js')}}"></script>
	<!-- Main -->
	<script src="{{asset('blog/js/main.js')}}"></script>

	</body>
</html>
