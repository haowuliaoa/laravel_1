<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Around Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href={{ URL::asset("/css/bootstrap.css") }} rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href={{ URL::asset("/css/style.css") }} type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href={{ URL::asset("/css/font-awesome.css") }} rel="stylesheet">
<!-- //font-awesome icons -->
<!-- font -->
<link href='https://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src={{ URL::asset("/js/jquery-1.11.1.min.js") }}></script>
<script type="text/javascript" src={{ URL::asset("js/move-top.js") }}></script>
<script type="text/javascript" src={{ URL::asset("js/easing.js") }}></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
    });
</script>
<!--animate-->
<link href={{ URL::asset("css/animate.css")}} rel="stylesheet" type="text/css" media="all">
<script src={{URL::asset("/js/wow.min.js")}}></script>
	<script>
new WOW().init();
	</script>
<!--//end-animate-->
</head>
</head>
<body>
	<!-- header -->
	<div class="header">
		<div class="top-header">
			<div class="container">
				<div class="top-header-info">
					<div class="top-header-left wow fadeInLeft animated" data-wow-delay=".5s">
						<p>培育有中国根基的世界公民</p>
					</div>
					<div class="top-header-right wow fadeInRight animated" data-wow-delay=".5s">
						<div class="top-header-right-info">
							<ul>
								<li><a href="login.html">登录</a></li>
								<!--<li><a href="signup.html">注册</a></li>-->
							</ul>
						</div>
						<!--<div class="social-icons">-->
							<!--<ul>-->
								<!--<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>-->
								<!--<li><a class="twitter facebook" href="#"><i class="fa fa-facebook"></i></a></li>-->
								<!--<li><a class="twitter google" href="#"><i class="fa fa-google-plus"></i></a></li>-->
							<!--</ul>-->
						<!--</div>-->
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="bottom-header">
			<div class="container">
				<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
					<h1><a href="index.html"><img src="images/logo.jpg" alt="" /></a></h1>
				</div>
				<div class="top-nav wow fadeInRight animated" data-wow-delay=".5s">
					<nav class="navbar navbar-default">
						<div class="container">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->
							<!--<ul class="nav navbar-nav">-->
								<!--<li>-->
									<!--<a class="hvr-bounce-to-bottom" href="./index.html">Home</a>-->
								<!--</li>-->
								<!--<li>-->
									<!--<a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">111<span class="caret"></span></a>-->
									<!--<ul class="dropdown-menu">-->
										<!--<li><a class="hvr-bounce-to-bottom" href="#">11111</a></li>-->
										<!--<li><a class="hvr-bounce-to-bottom" href="#">11111</a></li>-->
									<!--</ul>-->
								<!--</li>-->
								<!--<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">222222<span class="caret"></span></a>-->
									<!--<ul class="dropdown-menu">-->
										<!--<li><a class="hvr-bounce-to-bottom" href="#">11111</a></li>-->
										<!--<li><a class="hvr-bounce-to-bottom" href="#">22222222</a></li>-->
										<!--<li><a class="hvr-bounce-to-bottom" href="#">33333</a></li>-->
										<!--<li><a class="hvr-bounce-to-bottom" href="#">444444</a></li>-->
									<!--</ul>-->
								<!--</li>-->
								<!--<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">33333<span class="caret"></span></a>-->
									<!--<ul class="dropdown-menu">-->
										<!--<li><a class="hvr-bounce-to-bottom" href="#">11111</a></li>-->
										<!--<li><a class="hvr-bounce-to-bottom" href="#">22222</a></li>-->
										<!--<li><a class="hvr-bounce-to-bottom" href="#">33333</a></li>-->
										<!--<li><a class="hvr-bounce-to-bottom" href="#">44444</a></li>-->
										<!--<li><a class="hvr-bounce-to-bottom" href="#">55555</a></li>-->
									<!--</ul>-->
								<!--</li>-->
							<!--</ul>-->
							<!--<div class="clearfix"> </div>-->
						<!--</div>-->
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- //header -->

	<!-- login -->
	<div class="login">
		<div class="container">
			<div class="login-body">
				<div class="login-heading">
					<h1>登录</h1>
				</div>
				<div class="login-info">
					<form method="get" action="./index.html">
						<input type="text" class="user" name="email" placeholder="手机号或邮箱" required="">
						<input type="password" name="password" class="lock" placeholder="验证码">
						<input type="submit" name="Sign In" value="登录">
						<!--<div class="signup-text">-->
							<!--<a href="signup.html">Don't have an account? Create one now</a>-->
						<!--</div>-->
						<hr>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //login -->

	<!-- footer -->
	<!--<div class="footer">-->
		<!--<div class="container">-->
			<!--<div class="footer-grids">-->
				<!--<div class="col-md-3 footer-nav wow fadeInLeft animated" data-wow-delay=".5s">-->
					<!--<h4>Navigation</h4>-->
					<!--<ul>-->
						<!--<li><a href="about.html">About</a></li>-->
						<!--<li><a href="gallery1.html">Gallery</a></li>-->
						<!--<li><a href="blog.html">Blog</a></li>-->
						<!--<li><a href="contact.html">Contact</a></li>-->
					<!--</ul>-->
				<!--</div>-->
				<!--<div class="col-md-5 footer-nav wow fadeInUp animated" data-wow-delay=".5s">-->
					<!--<h4>Newsletter</h4>-->
					<!--<p>Nunc non feugiat quam, vitae placerat ipsum. Cras at felis congue, volutpat neque eget</p>-->
					<!--<form>-->
						<!--<input type="email" id="mc4wp_email" name="EMAIL" placeholder="Enter your email here" required="">-->
						<!--<input type="submit" value="Subscribe">-->
					<!--</form>-->
				<!--</div>-->
				<!--<div class="col-md-4 footer-nav wow fadeInRight animated" data-wow-delay=".5s">-->
					<!--<h4>Latest News</h4>-->
					<!--<div class="news-grids">-->
						<!--<div class="news-grid">-->
							<!--<h6>09/01/2016 : <a href="single.html">Cras at felis congue</a></h6>-->
							<!--<h6>13/07/2016 : <a href="single.html">Volutpat neque eget</a></h6>-->
							<!--<h6>13/02/2016 : <a href="single.html">Agittis tellus ut dictum</a></h6>-->
							<!--<h6>28/11/2016 : <a href="single.html">Habitant morbi et netus</a></h6>-->
							<!--<h6>19/01/2016 : <a href="single.html">pellentesque habitant morbi</a></h6>-->
							<!--<h6>23/02/2016 : <a href="single.html">Maecenas volutpat lacus</a></h6>-->
						<!--</div>-->
					<!--</div>-->
				<!--</div>-->
				<!--<div class="clearfix"> </div>-->
			<!--</div>-->
			<!--<div class="copyright wow fadeInUp animated" data-wow-delay=".5s">-->
				<!--<p>Copyright &copy; 2016.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>-->
			<!--</div>-->
		<!--</div>-->
	<!--</div>-->
	<!-- //footer -->
</body>
</html>