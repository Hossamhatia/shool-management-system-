<!DOCTYPE HTML>
<?php
include'./include/functions.php';

?>
<html>
<head>
<title>School Management System</title>
	
<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- start slider -->
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="js/jquery.cslider.js"></script>
	<script type="text/javascript">
			$(function() {

				$('#da-slider').cslider({
					autoplay : true,
					bgincrement : 450
				});

			});
		</script>
<!-- Owl Carousel Assets -->
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {

				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});

			});
		</script>
		<!-- //Owl Carousel Assets -->
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
	<style>
	
	.araby{
animation-name: x1;
animation-duration: 2s;
animation-iteration-count: infinite;
}
@keyframes x1
{
	0%{color: red}
	25%{color:green}
	50%{color:blue}
	75%{color:yellow}
	100%{color:darkorchid}

	}
		.th_font{
			font-size: 20px;
			font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", "serif";
			
		}
	</style>
<script>
	
$(document).ready(function(){
	
	$("#srch").keyup(function(){
		
		var x = $(this).val();
		if(x!='')
			{
				$.ajax({
					
					url:'search.php',
					method:'GET',
					data:{g:x},
					datatype:'text',
					success:function(data){
						$("#divsearch").html(data);
					}
					
					
				});
			}
		
	});
});
	</script>
	<script>
	
$(document).ready(function(){
	
	$("#tech1").click(function(){
		
		var x = "Teacher" ;
		
				$.ajax({
					
					url:'search1.php',
					method:'GET',
					data:{g:x},
					datatype:'text',
					success:function(data){
						$("#links").html(data);
					}
					
					
				});
			
		
	});
});
	</script>
	
</head>
<body>


	
	<div class="container-fluid">
	<div class="row h_menu">
		<div class="logo navbar-right fa-btn btn-1 btn-1e" style="margin-right: 550px" >
			<ul class="nav navbar-btn ">
			<li>
				<?php
				include'./config/connect.php';
				//include'./check-session/check_session.php';
				session_start();
				if(isset($_SESSION["usename"]))
				{
				echo "<a href='./logout.php' style='font-weight: bold;float:left' class='btn btn-danger'><i class='fa fa-users'></i>logout</a><a href='#' style='font-weight: bold;float:left' class='btn btn-danger'><i class='fa fa-shipping-fast'></i> Wellcom Admin[ ".$_SESSION["usename"]." ]</a>";
					
				}
				else if(isset($_SESSION["user_Name"]))
				{
				echo "<a href='./logout.php' style='font-weight: bold;float:left' class='btn btn-danger'><i class='fa fa-users'></i>logout</a><a href='#' style='font-weight: bold;float:left' class='btn btn-danger'><i class='fa fa-shipping-fast'></i> Wellcom[ ".$_SESSION["user_Name"]." ]</a>";
					
				}
				else
				{
					echo "<a href='./admin/admin-login.php' style='font-weight: bold;font-size:50px'><i class='fa fa-users'></i>login As Admin</a>";
				}
			
					?>
					</li>
			</ul>
		</div>
		</div>
	</div>
			<div class="col-md-2" style="height: 2000px;background-color: black">
		<div>
			<h3 style="text-align: center" class="araby">AL-ARABY SCHOOL</h3>
			<ul style="font-size: 20px;text-decoration-line: none;list-style-type: none">
				<li><a style="color: red" href="index.php" class="glyphicon glyphicon-home"> home</a></li>
			    <li><a style="color: red" href="index.php?staf_dep='staf_dep'" class="glyphicon glyphicon-user"> Staff-Department</a></li>
				<li><a style="color: red" class="glyphicon glyphicon-pencil" id="tech1"> Teachers Info</a></li>
				<li><a style="color: red" href="technology.php" class="glyphicon glyphicon-home"> Bulding-structure</a></li>
				<li><a style="color: red" href="#" class="glyphicon glyphicon-info-sign"> Exams-Info</a></li>
			</ul>
			</div>
		
		</div>
		
	<div class="col-md-10">	
<div class="container">
	
	<div class="row header">
		
		
		<div class="logo navbar-left">
			<h1 ><a href="index.html" class="araby">Al-Araby School </a></h1> 
		</div>
		<div class="h_search navbar-right">
			<form>
				<input type="text" id="srch" class="text" placeholder="Enter text here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter text here';}" ><i class="fa fa-search" style="font-size: 25px"></i>
				
			</form>
		</div>
		<div class="clearfix"></div>
	
</div>
</div>
<div class="container">
	<div class="row h_menu">
		<nav class="navbar navbar-default navbar-left" role="navigation">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
				  
		        <li class="active"><a href="index.php">Home</a></li>
		        
				  <?php
				  if(isset($_SESSION["usename"]))
				{
		         echo "<li ><a href='Add-Student.php'>Add-Student</a></li>";
		         echo "<li><a href='show-std.php'>Show-Students</a></li>";
				 echo "<li><a href='results.php'>Add-Result</a></li>";
				}
				  else
				  {
				echo " <li><a href='index.php'>About us</a></li>";
				  }
				  
				  ?>
		        <li><a href="show-result2.php">Show Results</a></li>
		        <li><a href="contact.php">Contact</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		    <!-- start soc_icons -->
		</nav>
		<div class="soc_icons navbar-right">
			<ul class="list-unstyled text-center">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<!--				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
-->				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				
			</ul>	
		</div>
	</div>
	<!-- login+logout-->
	
	
</div>
	<div id="sreacharea" style="text-align: center">
	<div id="divsearch"></div>
		<div id="links">
		<?php
			if(isset($_GET["staf_dep"]))
			{
				get_staf_dep();
				
			}
			
			?>
		
		</div>
	
	</div>
	<!-- start slider -->
<div class="slider_bg" >
	<div class="container" id="replacediv">
		<div id="da-slider" class="da-slider text-center">
			<div class="da-slide" >
				<h2>Education portal</h2>
				<p>We Have done more due to our experinace,our loyality for improve youth power of education is our first aim.</span></p>
				<h3 class="da-link"><a href="single-page.html" class="fa-btn btn-1 btn-1e">view more</a></h3>
			</div>
			<div class="da-slide">
				<h2>online educations</h2>
				<p>We can contact with you any time with anu way of comunication so if you need to contact us online follow us on our social portals .</span></p>
				<h3 class="da-link"><a href="single-page.html" class="fa-btn btn-1 btn-1e">view more</a></h3>
			</div>
			<div class="da-slide">
				<h2>education portal</h2>
				<p>We Have done more due to our experinace,our loyality for improve youth power of education is our first aim.</span></p>
				<h3 class="da-link"><a href="single-page.html" class="fa-btn btn-1 btn-1e">view more</a></h3>
			</div>
			<div class="da-slide">
				<h2>online educations</h2>
				<p>We can contact with you any time with anu way of comunication so if you need to contact us online follow us on our social portals .</span></p>
				<h3 class="da-link"><a href="single-page.html" class="fa-btn btn-1 btn-1e">view more</a></h3>
			</div>
	   </div>
	</div>
</div><!-- end slider -->
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="main row">
			<div class="col-md-3 images_1_of_4 text-center">
				<span class="bg"><i class="fa fa-globe"></i></span>
				<h4><a href="#">Our Location</a></h4>
				<p class="para">we have more branches you can follow our location on google map .</p>
				<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>
			</div>
			<div class="col-md-3 images_1_of_4 bg1 text-center">
				<span class="bg"><i class="fa fa-laptop"></i></span>
				<h4><a href="#">Technologies</a></h4>
				<p class="para">we introduce many ways of education with modern technology in education .</p>
				<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>
			</div>
			<div class="col-md-3 images_1_of_4 bg1 text-center">
				<span class="bg"><i class="fa fa-cog"></i></span>
				<h4><a href="#">Settings</a></h4>
				<p class="para">Conttact our staff for any inquery,we have department for experiance IT </p>
				<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>
			</div>		
			<div class="col-md-3 images_1_of_4 bg1 text-center">
				<span class="bg"><i class="fa fa-shield"></i> </span>
				<h4><a href="#">School word</a></h4>
				<p class="para">we have more  years of success between schools environment.</p>
				<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>
			</div>	
		</div>
	</div>
</div><!-- end main -->
<div class="main_btm"><!-- start main_btm -->
	<div class="container">
		<div class="main row">
			<div class="col-md-6 content_left">
				<img src="images/pic1.jpg" alt="" class="img-responsive">
			</div>
			<div class="col-md-6 content_right">
				<h4>Our Graduations From first start to persent time </h4>
				<p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words. </p>
				<a href="single-page.html" class="fa-btn btn-1 btn-1e">read more</a>
			</div>
		</div>
				<!----start-img-cursual---->
					<div id="owl-demo" class="owl-carousel text-center">
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">Teachers</a></h4>
								<p>
									Lorem ipsum dolor amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua.
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">Courses</a></h4>
								<p>
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/c3.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">Piology Sceince</a></h4>
								<p>
									On the other hand, we denounce with righteous indignation and dislike men who are so beguiled  pleasure of the moment,
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/c4.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">Liberrary</a></h4>
								<p>
									Lorem ipsum dolor amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua.
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">Courses</a></h4>
								<p>
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/c3.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">Piology Scince</a></h4>
								<p>
									On the other hand, we denounce with righteous indignation and dislike men who are so beguiled  pleasure of the moment,
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/c4.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">Liberary</a></h4>
								<p>
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">Teacher</a></h4>
								<p>
									On the other hand, we denounce with righteous indignation and dislike men who are so beguiled  pleasure of the moment,
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">Courses</a></h4>
								<p>
									Lorem ipsum dolor amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua.
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/c3.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">Teachers</a></h4>
								<p>
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">Piologies scince</a></h4>
								<p>
									On the other hand, we denounce with righteous indignation and dislike men who are so beguiled  pleasure of the moment,
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl" data-src="images/c4.jpg" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="#">Liberary</a></h4>
								<p>
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
								</p>
							</div>
						</div>
					</div>
					<!----//End-img-cursual---->
	</div>
</div>
<div class="footer_bg"><!-- start footer -->
	<div class="container">
		<div class="row  footer">
			<div class="copy text-center">
				<p class="link"><span>&#169; All rights reserved | Design by&nbsp;<a href="http://www.School.com/"> Hossam Hassan Atia</a></span></p>
			</div>
		</div>
	</div>
</div>
	</div>

</body>
</html>
