<?php



$message_sent=False;

if(isset($_POST["sub"])){

  if(filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
       $userName=$_POST["name"];
       $userEmail=$_POST["email"];
       $userName=$_POST["subject"];


      $to="sharadakoganti2000@gmail.com";
      $body="";


      $body.="From:".$userName."\r\n";
      $body.="Email:".$userEmail."\r\n";
      $body.="Message:".$message."\r\n";

      mail($to,$messageSubject,$body);
      $message_sent=true;
  

  }



}
echo "<pre>";
  print_r($_POST);
echo"</pre>";
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Future IT Systems LLC</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Yatra+One&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="img/logo1.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <a href="quote.html" class="button" style=" background-color:#007bff;border-radius: 10px;color: white;padding: 5px 22px;text-align: center;text-decoration: none;display: inline-block;font-size: 10px;margin: 4px 2px;cursor: pointer;">Get Quote</a>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="img/intro-img.svg" alt="" class="img-fluid">
      </div>

      <div class="intro-info" style="width: 40%;">
        <h2>Welcome to<br><span>FutureIT </span><br>Systems</h2>
        <h3 style="color: white">Digital Service Agency </h3>
        <div style="padding-top: 20px;">
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
          <a href="#services" class="btn-services scrollto">Our Services</a>
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>
WELCOME TO FUTURE IT SYSTEMS
FITS IS FULL DIGITAL SERVICE AGENCY</p>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>
              Designs that are more than just pretty, they work!
            </p>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Our beilef</a></h4>
              <p class="description">We believe in building strong brands, good clean design, well-crafted content, and integrated strategies.Our team prides ourselves on clean, usable interfaces that create positive flow and drive conversions</p>
            </div>
            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">Our vision</a></h4>
              <p class="description">To be a world-class supplier of IT products and services that help our clients make gobs of money.</p>
            </div>
            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">What we are known for</a></h4>
              <p class="description">We are a specialized Web Design Company in Pune and Nagpur that offers complete customized solutions to help your business create optimum exposure in the web world</p>
            </div>



          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="img/about-extra-2.svg" class="img-fluid" alt="">
          </div>
        </div>

<!--         <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/about-extra-2.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Our process</h4>
            <h3>Analyze your goal</h3>
            <h3>Work hard on it</h3>
            <h3>Improve you</h3>
            <h3>Achieve your destiny</h3>
          </div>
        </div> -->

<!--         <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/about-extra-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
            <p>
             Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt. 
            </p>
            <p>
              Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
            </p>
            <p>
              Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
            </p>
          </div>
          
        </div> -->

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
<!--     <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Our Services</h3>
          <br>
        </header>

         <div class="row">

          <div class="col-lg-3 col-md-6 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box" id="box1" style="background-image: url('img/test1.gif')">
              <div class="icon"><i class="ion-ios-analytics-outline" style="color: white;"></i></div>
              <h4 class="title" style="font-family: 'Yatra One', cursive;">Brand Strategy</h4>
              <p class="description">Graphic Design</p>
              <p class="description">Brand Architecture & Brand Strategy</p>
              <p class="description">Corporate Identity</p>
              <p class="description">Logo Design & Development</p>
              <p class="description">Packaging Design Services</p>
              <p class="description">Sales Collateral</p>
              <p class="description">Tradeshow Booth Design</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box" id="box2">
              <div class="icon"><i class="ion-ios-bookmarks-outline" style="color:white;"></i></div>
              <h4 class="title" style="font-family: 'Yatra One', cursive;">Website Design</h4>
              <p class="description">Web Design</p>
               <p class="description">Website Development</p>
               <p class="description">eCommerce</p>
               <p class="description">Responsive Design</p>
               <p class="description">Application Development</p>
               <p class="description">User Experience & User Interface</p>
               <p class="description">Conversion Rate Optimization</p>
            </div>
          </div>

           <div class="col-lg-3 col-md-6 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box" id="box3">
              <div class="icon"><i class="ion-ios-world-outline" style="color: white;"></i></div>
              <h4 class="title" style="font-family: 'Yatra One', cursive;">Digital Marketing</h4>
              <p class="description">Digital Marketing Strategy</p>
              <p class="description">Content Marketing</p>
              <p class="description">Social Media Strategy</p>
              <p class="description">Email Marketing</p>
              <p class="description">SEO Strategy</p>
              <p class="description">Webinar Production</p>
              <p class="description">TInbound Marketing Strategy</p>
              <p class="description">Pay-Per-Click (PPC) Management</p>
            </div>
          </div> 
           <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box" id="box4" style="background-image: url('img/test1.gif')">
              <div class="icon"><i class="ion-ios-clock-outline" style="color: white;"></i></div>
              <h4 class="title" style="font-family: 'Yatra One', cursive;">Web Strategy</h4>
                <p class="description">Content Strategy & Copywriting</p>
                <p class="description">Services Conversion Rate </p>
               <p class="description"> Optimization ( CRO )</p>
               <p class="description">eCommerce Website Development </p>
               <p class="description">Mobile Application Development</p>
               <p class="description">User Experience Design and Analysis</p>
               <p class="description">User Interface Designs</p>
               <p class="description">Web Design and Website Development</p>
            </div>
          </div> 

        </div>

      </div>
    </section> --><!-- #services -->

<section id="services" style="background-color: #ecf5ff;">
    <div class="container">

        <header class="section-header">
          <h3>Our Services</h3>
          <br>
        </header>

        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch wow bounceInUp" data-wow-duration="1.4s">
          	<div class="cards" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);max-width: 200px;margin: auto;text-align: center;font-family:arial; background-color: white; margin-bottom: 40px;padding:30px;">
			   <img src="img/b1.png" alt="Denim Jeans" style="width:100%"> 
			  <hr style="border-top: 1px solid black;">
			  <h5><b>Brand Strategy</b></h5>
			</div>
		  </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch wow bounceInUp" data-wow-duration="1.4s">
          	<div class="cards" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);max-width: 200px;margin: auto;text-align: center;font-family:arial; background-color: white; margin-bottom: 40px;padding:30px;">
			   <img src="img/boy.png" alt="Denim Jeans" style="width:100%"> 
			  <hr style="border-top: 1px solid black;">
			  <h5><b>Dynamic Websites</b></h5>
			</div>
		  </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch wow bounceInUp" data-wow-duration="1.4s">
          	<div class="cards" style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5); max-width: 200px;margin: auto;text-align: center;font-family: arial; background-color: white; margin-bottom: 40px;padding:30px;">
			 <!--  <img src="img/b33.png" alt="Denim Jeans" style="width:100%;"> -->
			 	<img src="img/dm.png" alt="Denim Jeans" style="width:100%">
			  <hr style="border-top: 1px solid black;">
			  <h5><b>Digital Marketing</b></h5>
			  
			</div>
		  </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch wow bounceInUp" data-wow-duration="1.4s">
          	<div class="cards" style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);max-width: 200px;margin: auto;text-align: center;font-family: arial; background-color: white; margin-bottom: 40px;padding:30px;">
			 <!--  <img src="img/ff.png" alt="Denim Jeans" style="width:100%"> -->
			 	<img src="img/ws.png" alt="Denim Jeans" style="width:100%">
			  <hr style="border-top: 1px solid black;">
			  <h5><b>Web Strategy</b></h5>
			  
<!-- 			  <p class="price" style="  color: grey;font-size: 22px;">$19.99</p>
			  <p>Some text about the jeans..</p>
 -->
			</div>
		  </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch wow bounceInUp" data-wow-duration="1.4s">
          	<div class="cards" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);max-width: 200px;margin: auto;text-align: center;font-family:arial; background-color: white; margin-bottom: 20px;padding:30px;">
			  <img src="img/email.png" alt="Denim Jeans" style="width:100%">
			  <hr style="border-top: 1px solid black;">
			  <h5><b>E-mail Marketing</b></h5>
			</div>
		  </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch wow bounceInUp" data-wow-duration="1.4s">
          	<div class="cards" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);max-width: 200px;margin: auto;text-align: center;font-family:arial; background-color: white; margin-bottom: 20px;padding:30px;">
			  <img src="img/seo.png" alt="Denim Jeans" style="width:100%">
			  <hr style="border-top: 1px solid black;">
			  <h5><b>SEO-Search Engine Opt.</b></h5>
			</div>
		  </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch wow bounceInUp" data-wow-duration="1.4s">
          	<div class="cards" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);max-width: 200px;margin: auto;text-align: center;font-family:arial; background-color: white; margin-bottom: 20px;padding:30px;">
			  <img src="img/cart.png" alt="Denim Jeans" style="width:100%">
			  <hr style="border-top: 1px solid black;">
			  <h5><b>E-commerce Websites</b></h5>
			</div>
		  </div>
	          <div class="col-lg-3 col-md-6 d-flex align-items-stretch wow bounceInUp" data-wow-duration="1.4s">
          	<div class="cards" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);max-width: 200px;margin: auto;text-align: center;font-family:arial; background-color: white; margin-bottom: 20px;padding:30px;">
			  <img src="img/b22.jpg" alt="Denim Jeans" style="width:100%">
			  <hr style="border-top: 1px solid black;">
			  <h5><b>Website Design</b></h5>
			</div>
		  </div>

		</div>
	</div>
</section>

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3 style="color: white;">Why choose us?</h3>
          <br>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-diamond"></i>
              <div class="card-body">
                <h5 class="card-title">Experience</h5>
                <p class="card-text"><b>5 years </b>of experience. We all know the fundamental behind having a strong virtual presence of an organization like us on the World Wide Web. We are familiar with many day-to-day internet-related terminologies, technology-driven apps, and marketing-gripped social media forums.</p>
              <!--   <a href="#" class="readmore">Read more </a> -->
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-language"></i>
              <div class="card-body">
                <h5 class="card-title">Skills</h5>
                <p class="card-text">More than <b>20 Successful Projects </b>
                Team work <br>
                Project management and planning <br>
                Problem solving <br>
                Delegation <br>
                Time management <br>
                Networking</p>
               <!--  <a href="#" class="readmore">Read more </a> -->
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-object-group"></i>
              <div class="card-body">
                <h5 class="card-title">Capabilities</h5>
                <p class="card-text">Future IT Systems gives your business a perfect web solution to raise your online presence. From the past 5 years, along with a team of merely 8 but extremely innovative people, FITS has been successful in transforming the obsolete attitudes of many enterprises, working in different fields, toward adopting the current web trends. </p>
                <!-- <a href="#" class="readmore">Read more </a> -->
              </div>
            </div>
          </div>

        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up" style="color: white;">104</span>
            <p style="color: white">Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up" style="color: white;">25</span>
            <p style="color: white;">Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up" style="color: white;">104</span>
            <p style="color: white;">Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up" style="color: white;">106</span>
            <p style="color: white;">Active installation</p>
          </div>
  
        </div>

      </div>
    </section>

    <!--==========================
      Portfolio Section
    ============================-->

   <section id="portfolio" class="clearfix">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Websites</li>
              <!-- <li data-filter=".filter-app">App</li> -->
              <!-- <li data-filter=".filter-card">Card</li> -->
             <!--  <li data-filter=".filter-web">Web</li> -->
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-1-1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <!-- <h4><a href="#">App 1</a></h4> -->
                <p>Margdarshan Solution</p>
                <div>
                  <a href="img/portfolio/portfolio-1-1.png" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="http://margdarshansolution.com/" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-2-1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <!-- <h4><a href="#">Web 3</a></h4> -->
                <p>Upper Crust</p>
                <div>
                  <a href="img/portfolio/portfolio-2-1.png" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-3-1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <!-- <h4><a href="#">App 2</a></h4> -->
                <p>Sangrilla Restaurant</p>
                <div>
                  <a href="img/portfolio/portfolio-3-1.png" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="https://abhinavjha98.github.io/hotel_website_sangleela/" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-4-1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <!-- <h4><a href="#">Card 2</a></h4> -->
                <p>Swadishtum Cateres</p>
                <div>
                  <a href="img/portfolio/portfolio-4-1.png" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-5.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <!-- <h4><a href="#">Web 2</a></h4> -->
                <p>DYP</p>
                <div>
                  <a href="img/portfolio/portfolio-5.png" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-6.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p>Hotel Malhargad</p>
                <div>
                  <a href="img/portfolio/portfolio-6.png" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-7-1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p>Burute Dental</p>
                <div>
                  <a href="img/portfolio/portfolio-7-1.png" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="https://abhinavjha98.github.io/burute.dental/" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/card3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
                <div>
                  <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
 -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-8.png" class="img-fluid" alt="" style="height: 235px;">
              <div class="portfolio-info">
                <p>Scarpfitt</p>
                <div>
                  <a href="img/portfolio/portfolio-8.png" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="https://www.scrapfitt.com/" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" style="background-color:#003F87;">
      <div class="container">

        <header class="section-header">
          <h3 style="color:white;font-size: 60px;font-family: 'Neucha', cursive;">Hear what our customers love about us!</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">
    
              <div class="testimonial-item">
                <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
                <h3>Vinay Tiwari</h3>
                <h4>MangalMurthi Enterprises</h4>
                <p>
                  You nailed it: you delivered on time and on budget and did so with grace and flexibility. You shined when it came to ease of the process and how you adapted when things don't go as planned. Your communication, understanding, and excitement make you stand out above other web firms.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
                <h3>Madhav Kulkarni</h3>
                <h4>MK Traders</h4>
                <p>
                 You are not a typical website design company! You are UNBELIEVABLY creative and straightforward, organized, and respond immediately to questions and communications
                </p>
              </div>
    
               <div class="testimonial-item">
                <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
                <h3>Sintu Singh</h3>
                <h4>Margdarshan Solution</h4>
                <p>I've had some questionable experiences with other web agencies in the past, but FutureIT has hands down been the best web company we've worked with, providing us with peace of mind and incredible service.
                </p>
              </div>
    
<!--              <div class="testimonial-item">
                <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                </p>
              </div> -->

            </div>

          </div>
        </div>


      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team" style="background-color: #ecf5ff">
      <div class="container">
        <div class="section-header">
          <h3>The Team</h3>
          <p>Meet our exceptionally talented team of digital warriors</p>
        </div>

        <div class="row">

           <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>AAKASH SHUKLA</h4>
                  <span><h6>Director</h6></span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>ABHINAV JHA</h4>
                  <span><h6>Chief Technical Officer</h6></span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

           <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>ADITYA WAGHMARE</h4>
                  <span><h6>Digital Marketing Head</h6></span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

           <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-4.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Rani</h4>
                  <span><h6>SEO/Email Marketing Head</h6></span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div> 

        </div>

      </div>
    </section><!-- #team -->


<!-- Contenedor -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" style="background-image: url('img/try.gif');"> 
      <!-- <section id="clients" style="background-image: url('https://media.giphy.com/media/l1J3DaHzWEp2bTpYs/giphy.gif');"> -->

      <div class="container">

        <div class="section-header">
          <h3 style="color: white; font-family: 'Yatra One', cursive;">We are trusted by</h3>
          <br>
        </div>

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/partner-logo-6.jpg" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/partner-logo-5.jpg" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/partner-logo-4.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/partner-logo-2.jpg" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/partner-logo-7.png" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/partner-logo-1.jpg" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/partner-logo-3.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/client-8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section>


<section id="price" style="background-color: #fff;">
      <div class="container">
        <div class="section-header">
          <h3 style="margin-top: 20px">Our prices</h3>
        </div>

        <table class="table table-hover table-bordered" style="text-align:center;padding-left:200px; padding-right:200px;table-layout:fixed;word-wrap: break-word; margin-top:auto;font-size: 15px;">
    <thead>
      <tr class="active">
<th style="background-color: #B0B0B0;"><center><h6 style="color: white;"><b>Item</b></h6><p class="text-sm" style="color: white;font-size: 12px;">Different services available</p></center></th>
          <th style="background-color:#FF0000;"><center><h6 style="color: white"><b>Basic</b></h6><p class="text-sm" style="color: white;font-size: 12px;">Ideal for small operations.</p></center></th>
          <th style="background-color:#009ACD"><center><h6 style="color: white"><b>Standard</b></h6><p class="text-sm" style="color: white; font-size: 12px;">Perfect for larger operations.</p></center></th>
          <th style="background-color:#ffa500"><center><h6 style="color: white"><b>Premium</b></h6><p class="text-sm" style="color: white; font-size: 12px;">Perfect for those who want software.</p></center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Domain name   <i style="color:limegreen;" class="fa fa-check fa-lg"></i></td>
        <td>$8.99/yr</td>
        <td>$8.99/yr</td>
        <td>$8.99/yr</td>
      </tr>

      <tr>
        <td>SSL   <i style="color:limegreen;" class="fa fa-check fa-lg"></i></td>
          <td>$99/yr</td>
        <td>$199/yr</td>
        <td>$599/yr</td>
      </tr>
      <tr>
        <td>Hosting  <i style="color:limegreen;" class="fa fa-check fa-lg"></i></td>
          <td>$15/mon</td>
        <td>$300/mon</td>
        <td>$1000/mon</td>
      </tr>
      <tr>
        <td>Email   <i style="color:limegreen;" class="fa fa-check fa-lg"></i></td>
        <td>Free with hosting</td>
        <td>$5-$25/user</td>
        <td>$5-$25/user</td>
      </tr>
      <tr>
              <td>Graphic Design  <i style="color:limegreen;" class="fa fa-check fa-lg"></i></td>
              <td>$1,000</td>
              <td>$7,500</td>
              <td>$30,000+</td>
      </tr>
      <tr>
        <td>Front end development <i style="color:limegreen;" class="fa fa-check fa-lg"></i></td>
          <td>$1500</td>
        <td>$10,000</td>
        <td>$50,000+</td>
      </tr>
      <tr>
        <td>Back end development <i style="color:limegreen;" class="fa fa-check fa-lg"></i></td>
          <td>$500</td>
        <td>$15,000</td>
        <td>$50,000+</td>
      </tr>
      <tr>
        <td>CMS integration  <i style="color:limegreen;" class="fa fa-check fa-lg"></i></td>
          <td>$500</td>
        <td>$5,000</td>
        <td>$25,000+</td>
      </tr>
      <tr>
        <td>3rd party integrations  <i style="color:limegreen;" class="fa fa-check fa-lg"></i></td>
          <td>$500</td>
        <td>$5,000</td>
        <td>$25,000+</td>
      </tr>
      <tr>
        <td>eCommerce  <i style="color:limegreen;" class="fa fa-check fa-lg"></i></td>
          <td>$2,000</td>
        <td>$7,500</td>
        <td>$50,000+</td>
      </tr>
      <tr>
        <td><b>Total:</b></td>
          <td><b>Apprx: $7,500</td>
        <td><b>Apprx: $40,000</td>
        <td><b>Apprx: $200,000</td>
      </tr>
    </tbody>
  </table>
</div>
</section>

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container-fluid">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row wow fadeInUp">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101595.93686963944!2d-80.02758343900315!3d37.27443792286337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x884d0c4d6aa966fd%3A0x249dbecbdbb0989b!2sRoanoke%2C%20VA%2C%20USA!5e0!3m2!1sen!2sin!4v1601476299560!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-4 info">
                <i class="ion-ios-location-outline"></i>
                <p style="font-size: 12px;">PO BOX 20981, Roanoke, VA, 24018, USA</p>
              </div>
              <div class="col-md-4 info">
                <i class="ion-ios-email-outline"></i>
                <p style="font-size: 12px;">support@futureitsystems.com</p>
              </div>
              <div class="col-md-4 info">
                <i class="ion-ios-telephone-outline"></i>
                <p style="font-size: 12px;">+91 820-8400761</p>
              </div>
            </div>
          </div>
            <?php 
              if(message_sent):
              <h3>sdfghj

            ?>
            
            <?php

          else:
            ?>

            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="index.php" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message" name="sub">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer" style="background-color: black;">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>Future IT System LLC</h3>
            <p>We love what we do and we do what our clients love & work with great clients all over the world to create thoughtful and purposeful websites.</p>
          </div>

          <div class="col-lg-3 col-md-6 text-center footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#about">About us</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-7  footer-contact">
            <h4 style="padding-left: 200px;margin-left: -50px;"><center>Contact Us</center></h4></div>
          <div class="col-lg-2 col-md-7  footer-contact">

            <p style="padding-left: 50px;margin-left: -50px">Head Office<br>             
            PO BOX 20981 <br>Roanoke <br>
              VA 24018 USA
            </p>
          </div>
          <div class="col-lg-2 col-md-7  footer-contact">
            <p style="margin-top:45px;margin-left: 50px;">
              Branch Office<br>
              Plot No 22,
              Opposite Radison blue hostel <br>
              Near Go gas chhatrapati square <br>
              Nagpur,
              440015 <br>
              <!-- Branch Office
              Nagpur -->
              <!-- <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br> -->
            </p>
          </div>


<!--           <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Solutions</h4>
            <p>Contact Center</p>
            <p>Knowledge</p>
            <p>Management</p>
            <p>Web Self-Service</p>
            <p>Performance Metrics</p>
          </div> -->

            <div class="col-md-12 text-center social-links">
            	<h4> Follow us on social media </h4>
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/104394954760587/posts/104396848093731/" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/futureitsystem/" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="https://www.linkedin.com/in/future-it-systems-llc-8113051b8" class="linkedin"><i class="fa fa-linkedin"></i></a>
                          <hr style="border-top: 0.5px solid white;width: 50%" >
                          <h6>© Copyright 2020. All Rights Reserved</h6>
            </div>

           


        </div>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
