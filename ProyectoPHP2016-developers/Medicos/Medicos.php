	<!DOCTYPE html>


	<html>


	<head>


	 <title>Fremap</title>

			<link rel="shortcut icon" type="image/x-icon" href="../images/logoeusa.png" />
		    
		    <link href="../../css/bootstrap.css" rel='stylesheet' type='text/css'/>


		    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


	         <script src="../../js/jquery.min.js"></script>


		    <meta name="viewport" content="width=device-width, initial-scale=1">


			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


			<meta name="keywords" content="Payroll Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,


			Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />


			<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


			<link rel="stylesheet" href="../../css/flexslider.css" type="text/css" media="screen" />


			<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />


			<link rel="stylesheet" href="medicos.css" type="text/css" media="screen" />


			<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>


	        <link href='//fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>


	        <link href='//fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>


	        <!---- start-smoth-scrolling---->


			<script type="text/javascript" src="../../js/move-top.js"></script>


			<script type="text/javascript" src="../../js/easing.js"></script>


			<script type="text/javascript">


				jQuery(document).ready(function($) {


					$(".scroll").click(function(event){		


						event.preventDefault();


						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);


					});


				});


			</script>


			<script src="../../js/jquery.easydropdown.js"></script>


	<script src="../../js/cbpViewModeSwitch.js" type="text/javascript"></script>


	               





	</head>


	<body>

					<div class="header">
					 <div class="container">	
					   	<div class="logo">
							<a href="../index.html"><img src="../images/logo.png" alt=""/></a>
						</div>
						<div class="top-menu">
							<span class="menu"></span>
							<ul>
								<li><a href="../index.html">Inicio</a></li>
								<li><a class="last" href="../Triaje/triaje.php">Triaje</a></li> <!-- Hay que indicar la ruta aun por definir. -->
								<li><a class="active" href="Medicos.php">Médicos<lable><img src="../../images/line.png"></lable></a></li>
								<li><a href="../Contacto/contactos.html">Contactos</a></li>
							</ul>
						</div>
<script>
			$("span.menu").click(function(){
				$(".top-menu ul").slideToggle("slow" , function(){
				});
			});
		</script>
		<!-- script-for-menu -->
							
					<!-- search-scripts -->
					<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
					<!-- //search-scripts -->
				<div class="clearfix"></div>
			</div>

		<!-- script-for-nav -->
				<script>
					$(document).ready(function(){
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(1000);
						});
					});
				</script>
		<!-- script-for-nav -->
		<!-- /top-nav -->
                   <div class="clearfix"></div>
				</div>


			 </div>


			  <!-- header-section-ends -->


			  <div class="banner">


			  	<div class="container">


			  	<h3>NUESTROS MEDICOS</h3>


			  	</div>


			  	</div>


			  	<div class="content">


			  	<div class="contact-text">


			  	<div class="container">


			  		<div class="datagrid">


			  			


			  			<?php


			  				include 'listarMedicos.php';


			  				listar_Todo();


			  				


			  			?>	


			  	</div>


	                 </div>


	               </div>


	               <div class="contact-details">


	               	<div class="container">


	               	</div>


	            </div>


					            <div class="footer">


									<div class="container">


										<div class="clearfix"></div>


										<div class="footer-bottom">


					 		<p> Copyright &copy;<a href="#">FreMap</a> 2016</p>


	                 </div>


	                  <script type="text/javascript">


							$(document).ready(function() {


								/*


								var defaults = {


						  			containerID: 'toTop', // fading element id


									containerHoverID: 'toTopHover', // fading element hover id


									scrollSpeed: 1200,


									easingType: 'linear' 


						 		};


								*/


								


								$().UItoTop({ easingType: 'easeOutQuart' });


								


							});


						</script>


					<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


	                 </div>


				</div>


	</body>


	</html>


