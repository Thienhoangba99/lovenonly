<?php
	include_once('Admin/database_app_shop.php');
	include_once('Admin/model/database_shop.php');
	include_once('Admin/model/m_category.php');
	include_once('Admin/model/m_product.php');
	include_once('Admin/model/m_slide.php');
	$categories = get_categories();
	$products = get_products();	
	$slides = get_slides();
	//print_r($categories);
?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Sky center</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="home.css">
		<link rel="stylesheet" type="text/css" href="css/home.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="jquery-3.3.1.min.js"></script>
		<script type="text/javascript">
		$(function() {
			var pull        = $('#pull');
			menu        = $('nav ul');
			menuHeight  = menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
		});

		$(window).resize(function(){
			var w = $(window).width();
			if(w > 320 && menu.is(':hidden')) {
				menu.removeAttr('style');
			}
		});
	</script>
	</head>
	<body>
		
		<header id="header" class="" >
			<div class="container-fluid"style="background-color: #0078d6;">
		<div class="container">
			<div class="row" id="row-container">
			  <div class="col-sm-2.5">
			  	<a href="" title="">
			  		<img src="img/logo.png" alt="" style="width: 30%;">
			  	</a>
			  </div>
			  <div class="col-sm-4" id="header-1">
			  		<form action="search_product.php" method="POST">
					<input type="text" name="search_value" placeholder="Enter product you want to search">
					<input type="submit" name="submit" value="Search">
					</form>
				</div>
			  </div>
			  </div>
			  <div class="col-sm-3.5" id="header2" class="float-left">
			  	<div style="float: right;">
					<ul id="ul_logo">
						<li>
							<a href="Login_logup.php" title="" class="li_logo">
								<span>
									<i class="fa fa-sign-in"></i>
									<p>Login</p>
								</span>	
							</a>
						</li>
						<li><a href="Login_logup.php" title="" class="li_logo">
						<span>
									<i class="fa fa-user-plus" aria-hidden="true"></i>
									<p>register</p>
								</span>
							</a>
						</li>
						<li><a href="" title="" class="li_logo">
						<span>
									<i class="fa fa-list" style="z-index: 1000000"></i>
									<p>compare</p>
								</span></a></li>
						<li><a href="" title="" class="li_logo">
									<i class="fa fa-shopping-cart" aria-hidden="true"></i>
											<span>
									<p>cart</p>
								</span></a></li>
						<li>
							<a href="Login_admin.php" title="" class="li_logo">
								<span>
									<i class="fa fa-sign-in"></i>
									<p>Login admin</p>
								</span>	
							</a>
						</li>
					</ul>
			  </div>
			</div>	
		</div>
		</div>	
	</div>
		<div class="row" id="row-header-2">
				<div class="container">
					<div id="row-header-2-0">
						<div id="position" style="height: 50px">
						<ul id="ul_logo_1">
						<li>
							<a href="home.php" title="" class="li_logo">HOME</a>
						</li>
						<li>
							<a href="" title="" class="li_logo">CATALOG/STORE</a>
						</li>
						<li>
							<a href="by_category.php" title="" class="li_logo">MENU</a>
						</li>
						<li>
							<a href="" title="" class="li_logo">FEATURES</a>
						</li>
						<li>
							<a href="" title="" class="li_logo">EXTENSIONS</a>
						</li>
						<li>
							<a href="" title="" class="li_logo">LANGUAGES</a>
						</li>
						<li>
							<a href="" title="" class="li_logo">STYLE</a>
						</li>
						<li>
							<a href="" title="" class="li_logo">CONTACT US</a>
						</li>
					</ul>
				</div>
					</div>
					<div style="float: right;width: 9%;">
						<span>
							<a href=""><i class="fa fa-th-list" aria-hidden="true"></i></a>
						</span>
					</div>
				</div>
		</div>
	</header>
	<div class="container-fluid" id="banner-container">
			<div class="container">  
			  <div id="myCarousel" class="carousel slide" data-ride="carousel">
			    <!-- Indicators -->
			    <ol class="carousel-indicators">
			      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#myCarousel" data-slide-to="1"></li>
			      <li data-target="#myCarousel" data-slide-to="2"></li>
			    </ol>

			    <!-- Wrapper for slides -->
			    <div class="carousel-inner">

			      <div class="item active">
			        <img src="img/banner0.jpg" alt="" style="width:100%;">
			      </div>

			      <div class="item">
			        <img src="img/banner1.jpg" alt="" style="width:100%;">
			      </div>
			    
			      <div class="item">
			        <img src="img/banner2.jpg" alt="" style="width:100%;">
			      </div>
			    </div>

			    <!-- Left and right controls -->
			    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			      <span class="glyphicon glyphicon-chevron-left"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#myCarousel" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right"></span>
			      <span class="sr-only">Next</span>
			    </a>
			  </div>
			</div>
	</div>
	<div class="container-fluid" id="bests_cf">
	<div class="container">
			<h3>Bestsellers</h3>
			<div class="row" id="bests_row_1">
					<div class="product-list row">
				<?php foreach ($products as $key => $value): ?>
					<div class="col-sm-4">
						<div class="product-item">
							<a href="#"><img src="Admin/controller/images/product/<?php echo $value['image'] ?>" class="img-thumbnail"></a>
							<p><a href="#"><?php echo $value['productname']; ?></a></p>
							<p class=""> Price <?php echo $value['price']; ?></p>	  
							<div class="marsk">
								<a href="details.php?productid=<?php echo $value['productid'] ?>">Show more information</a>
							</div>                                    
						</div>
							<div>Manchester Ave, Los Angeles, United States</div>
							<div>
								Phone: 
								<span>123 456 789</span>
							</div>
							</div>
				 <?php endforeach; ?>
					
				</div>
			</div>
 			
			
			<div class="row" id="bests_row_2">
				<div class="col-sm-4">
					<div><img src="img/bests3.jpg" alt=""></div>
					<h4><a href="">Spotlight Ceiling Bar</a></h4>
					<div>Category: 
						<a href=""><span>Lawn Mowers</span></a>
					</div>
					<div>Price <a href=""><span>$79.99</span></a></div>
					<div>Manchester Ave, Los Angeles, United States</div>
					<div>
						Phone: 
						<span>123 456 789</span>
					</div>
				</div>
 				<div class="col-sm-4">
					<div><img src="img/bests4.jpg" alt=""></div>
					<h4><a href="">Samsung Galaxy 9.7-Inch</a></h4>
					<div>Category: 
						<a href=""><span>Lawn Mowers</span></a>
					</div>
					<div>Price <a href=""><span>$79.99</span></a></div>
					<div>Manchester Ave, Los Angeles, United States</div>
					<div>
						Phone: 
						<span>123 456 789</span>
					</div>	
 				</div>
  				<div class="col-sm-4">
  					<div><img src="img/bests5.jpg" alt=""></div>
  					<h4><a href="">Ryobi Lawnmower</a></h4>
					<div>Category: 
						<a href=""><span>Lawn Mowers</span></a>
					</div>
					<div>Price <a href=""><span>$79.99</span></a></div>
					<div>Manchester Ave, Los Angeles, United States</div>
					<div>
						Phone: 
						<span>123 456 789</span>
					</div>
  				</div>
			</div>
	</div>
	</div>
	<div class="container-fluid" id="contact-0">
		<div class="container" id="contact-1">
			<span class="tln">
				<a href="" class="">Call us: 45 444 444 444</a>
			</span>
			<span class="tln">
				<a href="" class="">Order products</a>
			</span>
			<span class="tln">
				<a href="" class="">Send us a message</a>
			</span>
		</div>
	</div>
	<div class="container">
			<a class="tln-buttom" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="tln-buttom" href="#carousel-example-generic" role="button" data-slide="next" style="float: right;">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner" role="listbox" id="carou_0">
				<div class="carousel-item active">
				<div class="row" id="bests_row_1">
				<div class="col-sm-4">
					<div><img src="img/late1.jpg" alt=""></div>
					<h4><a href="">Kettle Charcoal Barbecue</a></h4>
					<div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem.
						</p>
					</div>
					<div class="read-more"><a href="">Read more</a></div>
				</div>
 				<div class="col-sm-4">
 					<div><img src="img/late2.jpg" alt=""></div>
 					<h4><a href="">Tefal Ultimate Anti-Calc</a></h4>
					<div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem.
						</p>
					</div>
					<div class="read-more"><a href="">Read more</a></div>
 				</div>
  				<div class="col-sm-4" >
  					<div><img src="img/late3.jpg" alt=""></div>
  					<h4><a href="">Stainless Steel Gas Grill</a></h4>
					<div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem.
						</p>
					</div>
					<div class="read-more"><a href="">Read more</a></div>
  				</div>
			</div>
				</div>
				<div class="carousel-item">
					 <div class="row" id="bests_row_2">
				<div class="col-sm-4">
					<div><img src="img/late4.jpg" alt=""></div>
					<h4><a href="">Spotlight Ceiling Bar</a></h4>
					<div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem.
						</p>
					</div>
					<div class="read-more"><a href="">Read more</a></div>
				</div>
 				<div class="col-sm-4">
					<div><img src="img/late5.jpg" alt=""></div>
					<h4><a href="">Samsung Galaxy 9.7-Inch</a></h4>
					<div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem.
						</p>
					</div>
					<div class="read-more"><a href="">Read more</a></div>	
 				</div>
  				<div class="col-sm-4">
  					<div><img src="img/late6.jpg" alt=""></div>
  					<h4><a href="">Ryobi Lawnmower</a></h4>
					<div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem.
						</p>
					</div>
					<div class="read-more"><a href="">Read more</a></div>
  				</div>
			</div>
				</div>
				<div class="carousel-item">
					 <div class="row" id="bests_row_2">
				<div class="col-sm-4">
					<div><img src="img/late7.jpg" alt=""></div>
					<h4><a href="">Spotlight Ceiling Bar</a></h4>
					<div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem.
						</p>
					</div>
					<div class="read-more"><a href="">Read more</a></div>
				</div>
 				<div class="col-sm-4">
					<div><img src="img/late8.jpg" alt=""></div>
					<h4><a href="">Samsung Galaxy 9.7-Inch</a></h4>
					<div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem.
						</p>
					</div>
					<div class="read-more"><a href="">Read more</a></div>
 				</div>
  				<div class="col-sm-4">
  					<div><img src="img/late9.jpg" alt=""></div>
  					<h4><a href="">Ryobi Lawnmower</a></h4>
					<div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem.
						</p>
					</div>
					<div class="read-more"><a href="">Read more</a></div>
  				</div>
			</div>
				</div>
				<div class="carousel-item">
					 <div class="row" id="bests_row_2">
				<div class="col-sm-4">
					<div><img src="img/late10.jpg" alt=""></div>
					<h4><a href="">Spotlight Ceiling Bar</a></h4>
					<div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem.
						</p>
					</div>
					<div class="read-more"><a href="">Read more</a></div>
				</div>
 				<div class="col-sm-4">
					<div><img src="img/late11.jpg" alt=""></div>
					<h4><a href="">Samsung Galaxy 9.7-Inch</a></h4>
					<div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem.
						</p>
					</div>
					<div class="read-more"><a href="">Read more</a></div>	
 				</div>
  				<div class="col-sm-4">
  					<div><img src="img/late12.jpg" alt=""></div>
  					<h4><a href="">Ryobi Lawnmower</a></h4>
					<div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem.
						</p>
					</div>
					<div class="read-more"><a href="">Read more</a></div>
  				</div>
			</div>
				</div>
			</div>
			
		</div>
		</div>

<!-- /header -->
<!-- footer -->
<footer id="footer">			
		<div id="footer-t">
			<div class="container">
				<div class="row">				
					<div id="logo-f" class="col-md-3 col-sm-12 col-xs-12 text-center">						
						<a href="#">Sky center</a>		
					</div>
					<div id="about" class="col-md-3 col-sm-12 col-xs-12">
						<h3>About us</h3>
						This is a shop that sells electrical equipment
					</div>
					<div id="hotline" class="col-md-3 col-sm-12 col-xs-12">
						<h3>Hotline</h3>
						<p>Phone Sale: +84 123 456 789</p>
						<p>Email: skycenter002@gmail.com</p>
					</div>
					<div id="contact" class="col-md-3 col-sm-12 col-xs-12">
						<h3>Contact Us</h3>
						<p>Address 1: 1 Ngo quyen stress, Son tra, Danang city</p>
					</div>
				</div>				
			</div>
			<div id="footer-b">				
				<div class="container">
					<div class="row">
					
						<div id="footer-b-r" class="col-md-6 col-sm-12 col-xs-12 text-center">
							<p>© 2018 Ba thien</p>
						</div>
					</div>
				</div>
				<div id="scroll">
					<a href="#"><img src="img/home/scroll.png"></a>
				</div>	
			</div>
		</div>
	</footer>
	<!-- end footer -->
	<script>
			jQuery(document).ready(function($) { 
			var TopFixMenu = $("#position");
			$(window).scroll(function(){
	  		if($(this).scrollTop()>60){
			TopFixMenu.show();
			$("div").css("top","0px")	
	        }else{
	        	$("div").css("top","auto")
	        }})})
		</script>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>
