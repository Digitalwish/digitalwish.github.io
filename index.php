<!DOCTYPE html>
<?php include ("languages/lang.php");?>
<?php include ("php/form.php");?>

<html lang="en">

  <head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131675227-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131675227-1');
</script>


   <style>
    .error {color: #FF0000;}
    </style>
    
    <!-- Meta Tag -->
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO -->
    <meta name="description" content="Digital">
    <meta name="generator" content="Visual Studio Code">
    <meta name="Keywords" content="HTML5, WebDesing, Mobile Design, Consulting">
    <meta name="author" content="ricardo rouco">
    <meta name="url" content="http://www.digitalwish.pt">
    <meta name="copyright" content="digitalwish">
    <meta name="robots" content="index,follow">
    
    
    <title>DigitalWish Development</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/apple-touch-icon.png">
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="css/plugin.css">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
    
    
    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

 </head>

  <body>
    
    
	
	<!-- Preloader Start -->
    <div id="preloader">
	  <div class="loader"></div>
    </div>
    <!-- Preloader End -->

    
    
    <!-- Home & Menu Section Start -->
    <header id="home" class="home-section">
        
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                
                    <div class="col-sm-3">
                        <div class="logo">
                            <a href="index.php">DIGITAL WISH</a>
                        </div>
                    </div>
                    
                    <div class="col-sm-9">
                        <div class="navigation-menu">
                            <div class="navbar">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smoth-scroll" href="#home">Home <div class="ripple-wrapper"></div></a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#about"><?php echo htmlspecialchars($lang["aboutus"]); ?></a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#portfolio"><?php echo htmlspecialchars($lang["folio"]); ?></a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#services"><?php echo htmlspecialchars($lang["serv"]); ?></a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#contact"><?php echo htmlspecialchars($lang["contacts"]); ?></a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#">||</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="index.php?lang=pt">PT</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="index.php?lang=en">EN</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="index.php?lang=es">ES</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="home-section-background" data-stellar-background-ratio="0.6">
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="header-text">
                                    <p><?php echo htmlspecialchars($lang['welcome']); ?></p>
                                    <h2><span class="typing"></span></h2>
                                    
                                    <div class="margin-top-60">
                          <a class="button button-style button-style-icon fa fa-long-arrow-right smoth-scroll" href="#portfolio"><?php echo htmlspecialchars($lang['folio']); ?></a>
                                  </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </header>
    <!-- Home & Menu Section End-->
    
    
    
    
    <!-- About Start -->
    <section id="about" class="about-section">
         <div class="row">
               
              <div class="col-md-6 col-sm-12 col-xs-12">
                <img class="img-responsive" src="images/bg/DWOFICIALLOGO.png" draggable="false" alt="" style="margin-top: -5;">
              </div>
                
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="about-me section-space-padding">
                  
                  <div class="col-sm-12">
                    <div class="section-title">
                        <h2><?php echo htmlspecialchars($lang['aboutus']); ?></h2>
                       
                    </div>
                </div>
                  
                  <p><?php echo htmlspecialchars($lang['agency']); ?></p>
                 </div>
              </div>


              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="about-me section-space-padding">
              <div>
                    <p style="margin-top: -260px;"><?php echo htmlspecialchars($lang['agency1']); ?></p>
                 </div>
              </div>
          </div>

          <div class="col-md-6 col-sm-12 col-xs-12">
            <img class="img-responsive" src="images/bg/logoFinalfibo.png" draggable="false" alt="" style="margin-top: -30%;">
                <div class="about-me section-space-padding">
              <div>
                    <p style="margin-top: 40px;"><?php echo htmlspecialchars($lang['agency2']); ?></p>
                 </div>
              </div>
          </div>

          </div>
       </section>
       <!-- About End -->

    
    <!-- Portfolio Start -->
    <section id="portfolio" class="portfolio section-space-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2><?php echo htmlspecialchars($lang['folio']); ?></h2>
                        <p><?php echo htmlspecialchars($lang['portext']); ?></p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <ul class="portfolio">
                    <li class="filter" data-filter="all"><?php echo htmlspecialchars($lang['all']); ?></li>
                    <li class="filter" data-filter=".apps"><?php echo htmlspecialchars($lang['wp']); ?></li>
                    <li class="filter" data-filter=".mockups"><?php echo htmlspecialchars($lang['logos']); ?></li>
                    <li class="filter" data-filter=".wordpress"><?php echo htmlspecialchars($lang['Cards']); ?></li>
                </ul>
            </div>
            
            <div class="portfolio-inner">
                <div class="row">
                
                
                    <div class="col-md-4 col-sm-6 col-xs-12 mix apps">
                        <div class="item">
                            <a href="images/portfolio/1.jpg" class="portfolio-popup" title="Arquitecto Cesar Rouco">
                                <img src="images/portfolio/1.jpg" alt="">
                            </a>
                        </div>
                        <a target="_blank" rel="noopener noreferrer" href="http://cesarrouco.com">Cesar Rouco</a>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 mix apps">
                        <div class="item">
                            <a href="images/portfolio/2.jpg" class="portfolio-popup" title="DigitalWish v2">
                                <img src="images/portfolio/2.jpg" alt="">
                            </a>
                        </div>
                        <a target="_blank" rel="noopener noreferrer" href="#">Digital Wish Prototype</a>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 mix apps">
                        <div class="item">
                            <a href="images/portfolio/3.jpg" class="portfolio-popup" title="FaciJoyas Ourivesaria">
                                <img src="images/portfolio/3.jpg" alt="">
                            </a>
                        </div>
                        <a target="_blank" rel="noopener noreferrer" href="http://facijoyas.com">Facijoyas.com</a>
                    </div>
                    
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 mix apps">
                        <div class="item">
                            <a href="images/portfolio/5.jpg" class="portfolio-popup" title="Ninho do Pardal">
                                <img src="images/portfolio/5.jpg" alt="">
                            </a>
                        </div>
                        <a target="_blank" rel="noopener noreferrer" href="#">Ninho do Pardal</a>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 mix apps">
                        <div class="item">
                            <a href="images/portfolio/6.jpg" class="portfolio-popup" title="Tiago Silva">
                                <img src="images/portfolio/6.jpg" alt="">
                            </a>
                        </div>
                        <a target="_blank" rel="noopener noreferrer" href="#">Tiago Silva</a>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 mix wordpress">
                        <div class="item">
                            <a href="images/portfolio/SSeguros.jpg" class="portfolio-popup" title="Soares Seguros">
                                <img src="images/portfolio/SSeguros.jpg" alt="">
                            </a>
                        </div>
                        <a target="_blank" rel="noopener noreferrer" href="http://www.soaresseguros.pt">Soares Seguros</a>
                    </div>
                    
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 mix mockups">
                        <div class="item">
                            <a href="images/portfolio/7.jpg" class="portfolio-popup" title="EYEONDRUG">
                                <img src="images/portfolio/7.jpg" alt="">
                            </a>
                        </div>
                        <a target="_blank" rel="noopener noreferrer" href="https://eyeondrug.com">Eye on Drug</a>
                    </div>

                     <div class="col-md-4 col-sm-6 col-xs-12 mix wordpress">
                        <div class="item">
                            <a href="images/portfolio/mochnet.jpg" class="portfolio-popup" title="Digital Wish">
                                <img src="images/portfolio/mochnet.jpg" alt="">
                            </a>
                        </div>
                        <a target="_blank" rel="noopener noreferrer" href="index.php">Digital Wish</a>    
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 mix wordpress">
                        <div class="item">
                            <a href="images/portfolio/timeout-cartoes.jpg" class="portfolio-popup" title="Timeout Aventura">
                                <img src="images/portfolio/timeout-cartoes.jpg" alt="">
                            </a>
                           
                        </div>
                        <a target="_blank" rel="noopener noreferrer" href="http://timeoutaventura.com">Timeout Aventura</a>
                        
                    </div>




                </div>
            </div>
        </div>
        
        <div class="text-center margin-top-50">
          <a class="button button-style button-style-dark button-style-icon fa fa-long-arrow-right smoth-scroll" href="#contact"><?php echo htmlspecialchars($lang['contactar']); ?></a>
            </div>
     
     </section>
    <!-- Portfolio End -->
    
    
    
    <!-- Services Start -->
    <section id="services" class="services-section section-space-padding">
        <div class="container">
           <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2><?php echo htmlspecialchars($lang['serv']); ?></h2>
                        <p><?php echo htmlspecialchars($lang['servtxt']); ?></p>
                    </div>
                </div>
            </div>
            
            <div class="row">

                <div class="col-md-4 col-sm-6">
                <div class="services-detail">
                    <i class="fa fa-code color-3"></i>
                    <h3><?php echo htmlspecialchars($lang['design']); ?></h3>
                    <hr>
                    <p><?php echo htmlspecialchars($lang['designtxt']); ?></p>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6">
				<div class="services-detail">
					<i class="fa fa-mobile color-1"></i>
					<h3><?php echo htmlspecialchars($lang['mobiledes']); ?></h3>
					<hr>
					<p><?php echo htmlspecialchars($lang['mobiledestext']); ?></p>
				</div>
			</div>

			<div class="col-md-4 col-sm-6">
				<div class="services-detail">
					<i class="fa fa-tablet color-2"></i>
					<h3><?php echo htmlspecialchars($lang['tabdes']); ?></h3>
					<hr>
					<p><?php echo htmlspecialchars($lang['tabdestxt']); ?></p>
				</div>
			</div>

			<div class="col-md-4 col-sm-6">
                <div class="services-detail">
                    <i class="fa fa-html5 color-5"></i>
                    <h3><?php echo htmlspecialchars($lang['htmlcss']); ?></h3>
                    <hr>
                    <p><?php echo htmlspecialchars($lang['htmlcsstxt']); ?></p>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6">
				<div class="services-detail">
					<i class="fa fa-support color-4"></i>
					<h3><?php echo htmlspecialchars($lang['fullSP']); ?></h3>
					<hr>
					<p><?php echo htmlspecialchars($lang['fullSPtxt']); ?></p>
				</div>
			</div>

			

			<div class="col-md-4 col-sm-6">
				<div class="services-detail">
					<i class="fa fa-ge color-6"></i>
					<h3><?php echo htmlspecialchars($lang['multi']); ?></h3>
					<hr>
					<p><?php echo htmlspecialchars($lang['multitxt']); ?></p>
				</div>
			</div>
            
            </div>
        </div>
    </section>
    <!-- Services End -->
    
    
    
    <!-- Call to Action Start -->


    <!-- Wrapper for slides -->
    <section class="call-to-action text-center"style = "width:100%;padding: 0px 0px 0px 0px;">
    <div class="container"style="width:100%">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      
    </ol>
    <div class="carousel-inner">
<!--new segment-->
      <div class="item active">
      <img class="img-responsive" src="images/bg/rr.png" draggable="false" alt="ricardo rouco" style="margin-top:3%;margin-bottom:2%;width:20%">
        <div class="carousel-caption"style = "color:#333333;text-shadow: none;">
        
        <div class="col-md-12 col-sm-8">
        <div id ="teste">
        
                        <h1><?php echo htmlspecialchars($lang['team']); ?></h1>
                             <h1> "First, solve the problem. Then, write the code."</h1>
                              <p><?php echo htmlspecialchars($lang['founder']); ?></p>
                              <p><?php echo htmlspecialchars($lang['founder1']); ?></p>
                              <p><?php echo htmlspecialchars($lang['founder2']); ?></p>
                              <p style = "float:right;">Ricardo Rouco</p>
                            </div>
                              
</div>   
            
        </div>
      </div>
<!--end segment-->
<!--new segment-->
<div class="item">
      <img class="img-responsive" src="images/bg/rr1.png" draggable="false" alt="" style="margin-top:3%;margin-bottom:2%;width:20%">
        <div class="carousel-caption"style = "color:grey;text-shadow: none;">
        
        <div class="col-md-12 col-sm-8">
        <div id ="teste">
        
                        <h2><?php echo htmlspecialchars($lang['team']); ?></h2>
                             <h1> "Good design is Good Business!"</h1>
                              <p><?php echo htmlspecialchars($lang['design0']); ?></p>
                              <p><?php echo htmlspecialchars($lang['design1']); ?></p>
                              <p><?php echo htmlspecialchars($lang['design2']); ?></p>
                              <p style = "float:right;">Cesar Rouco</p>
                            </div>
                              
</div>   
            
        </div>
      </div>








<!--end segment-->


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev" style= "background-image: none;">
      <span class="glyphicon glyphicon-chevron-left" style = "display: none;"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next" style= "background-image: none;">
      <span class="glyphicon glyphicon-chevron-right" style = "color:#333333"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
</section>
       <!-- Call to Action End -->
       
       
       
       
    <!-- Contact Start -->
    <section id="contact" class="contact-us section-space-padding">
       <div class="container">
          <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2><?php echo htmlspecialchars($lang['contacts']); ?></h2>
                        
                    </div>
                </div>
            </div>
            
            
           <div class="text-center margin-top-10 margin-bottom-50">
            <div class="row">
            
               <div class="col-md-4 col-sm-4">
                <div class="contact-us-detail">  
                 <i class="fa fa-mobile color-6"></i>
                  <p><a href="tel:+1234567890">+351 910573117</a></p>
                 </div>
                </div>
               
               <div class="col-md-4 col-sm-4">
                <div class="contact-us-detail">
                 <i class="fa fa-mail-reply color-5"></i>
                  <p><a href="mailto:hi@digitalwish.pt">hi@digitalwish.pt</a></p>
                 </div>
                </div>
                 
               <div class="col-md-4 col-sm-4">
                <div class="contact-us-detail">
                 <i class="fa fa-clock-o color-3"></i>
                  <p>Mon - Fri 10:00 – 19:00 GMT</p>
                 </div>
                </div>
              
               </div>
              </div>
            
        
         <div class="row">
           
           <div class="col-md-6">   
                 
               <div class="row">

                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                  

                    <div class="col-sm-6">
                        <div class="form-group">
                           

                       <input type="text" placeholder="Name" name="name" value="<?php echo $name;?>">
                            <span class="error"><?php echo $nameErr;?></span>
                            
                         </div>
                        </div>
                                
                       <div class="col-sm-6">
                        <div class="form-group">
                            
                            <input type="text" placeholder="E-Mail" name="email" value="<?php echo $email;?>">
                            <span class="error"><?php echo $emailErr;?></span>
                         
                         </div>
                        </div>
                        
                        <div class="col-sm-6">
                          <div class="form-group" style>

                             <input type="text" placeholder="Website" name="website" value="<?php echo $website;?>">
                            <span class="error"><?php echo $websiteErr;?></span>
                           
                           </div>
                          </div>

                          <div class="col-sm-6">
                          <div class="form-group" style>

                           
                            <input type="text" placeholder= "Pais" name="pais" value="<?php echo $pais;?>">
                            
                           
                           </div>
                          </div>
                          
                                
                         <div class="col-sm-10">
                            
                          <select id="subject" class="form-group form-control">
                            <option value="" selected disabled><?php echo htmlspecialchars($lang['subject']); ?></option>
                            <option><?php echo htmlspecialchars($lang['WB']); ?></option>
                            <option><?php echo htmlspecialchars($lang['MULT']); ?></option>
                            <option><?php echo htmlspecialchars($lang['cont']); ?></option>
                            <option><?php echo htmlspecialchars($lang['moveis']); ?></option>
                            <option><?php echo htmlspecialchars($lang['other']); ?></option>
                           </select>
                          </div>
                                
                       <div class="col-sm-10">
                        <div class="textarea-message form-group">
                            
                          <textarea name="comment" rows="6" cols="64" style = "width : 97%" ><?php echo $comment;?></textarea>
                          </div>
                         </div>
                   
                   
                    <div class="text-center"> 
                         
           <button type="submit" class="button button-style button-style-dark button-style-icon fa fa-long-arrow-right text-center" value="Submit" name="submit">
           <?php echo htmlspecialchars($lang['submit']); ?></button>
                      </div>
                       
                  </form>
                   
				</div>
               </div>
          <!--  MAPS -- METER IMAGEM -->
          <div class="col-md-6">
                <div class="contact-us-detail">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23693.861118035995!2d-8.500193040662532!3d42.07034981925609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2577fb591ae177%3A0xe1e71cb0709452a5!2zTW9uw6fDo28!5e0!3m2!1spt-PT!2spt!4v1538497325338" width="100%" height="450" frameborder="2" style="border:2"></iframe>
        
                 </div>
                </div>
          
        </div>
       </div>
       
      <div class="margin-top-80"> 
       <ul class="social-icon">
         <li><a href="https://www.facebook.com/digitalwish.pt/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
         <li><a href="#" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
         <li><a href="#" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a></li>
       </ul>
      </div>
       
     </section>
     <!-- Contact End -->
       
        
        
        
    <!-- Footer Start -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
               
      <div class="col-md-4 text-left">
       <p><span><a href="#about" class="smoth-scroll"><?php echo htmlspecialchars($lang['aboutus']); ?></a></span> | <span><a href="#portfolio" class="smoth-scroll"><?php echo htmlspecialchars($lang['folio']); ?></a></span></p>
          </div>
               
            <div class="col-md-4 text-center">
               <p>© Copyright 2017 DIGITAL WISH</p>
               </div>
                
             </div>
        </div>
    </footer>
    <!-- Footer End -->
    
    
    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- Back to Top End -->
    
    
    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC0HAKwKinpoFKNGUwRBgkrKhF-sIqFUNA"></script>
    
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>
  
  </body>
 </html>