<!-- FlatFy Theme - Andrea Galanti /-->
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
   <meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
   <meta name="author" content="">

   <title>Baon</title>

   <!-- FLATFY -->
   <!-- Bootstrap core CSS -->
   <link href="{{ URL::asset('flatfy/css/bootstrap.min.css')}}" rel="stylesheet">

   <!-- Custom Google Web Font -->
   <link href="{{ URL::to('/')}}" rel="stylesheet">
   <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>

   <!-- Custom CSS-->
   <link href="{{ URL::asset('flatfy/css/general.css') }}" rel="stylesheet">

  <!-- Owl-Carousel -->
   <link href="{{ URL::asset('flatfy/css/custom.css') }}" rel="stylesheet">
   <link href="{{ URL::asset('flatfy/css/owl.carousel.css') }}" rel="stylesheet">
   <link href="{{ URL::asset('flatfy/css/owl.theme.css') }}" rel="stylesheet">
   <link href="{{ URL::asset('flatfy/css/animate.css') }}" rel="stylesheet">

   <!-- Magnific Popup core CSS file -->
   <link rel="stylesheet" href="{{ URL::asset('flatfy/css/magnific-popup.css') }}">

   <script src="{{ URL::asset('flatfy/js/modernizr-2.6.2.min.js') }}"></script>
   <!-- END OF FLATFY -->
</head>

<body id="home">

 <!-- Preloader -->
 <!-- <div id="preloader">
   <div id="status"></div>
 </div> -->

 <!-- FullScreen -->
   <div class="intro-header">
   <div class="col-xs-12 text-center abcen1">
     <h1 class="h1_home wow fadeIn" data-wow-delay="0.4s">Baon</h1>
     <h3 class="h3_home wow fadeIn" data-wow-delay="0.6s">Healthy and Delicous Lunch Food <br> Delivered to your Child. </h3>
     <ul class="list-inline intro-social-buttons">
       <li><a href="{{ URL::to('/login') }}" class="btn  btn-lg mybutton_cyano wow fadeIn" data-wow-delay="0.8s"><span class="network-name">Log In</span></a>
       </li>
       <li id="download" ><a href="{{ URL::to('/register') }}" class="btn  btn-lg mybutton_standard wow swing wow fadeIn" data-wow-delay="1.2s"><span class="network-name">Register</span></a>
       </li>
     </ul>
   </div>
       <!-- /.container -->
   <div class="col-xs-12 text-center abcen wow fadeIn">
     <div class="button_down ">
       <a class="imgcircle wow bounceInUp" data-wow-duration="1.5s"  href="#whatis"> <img class="img_scroll" src="{{ URL::asset('flatfy/img/icon/circle.png')}}" alt=""> </a>
     </div>
   </div>
   </div>

 <!-- NavBar-->
 <nav class="navbar-default" role="navigation">
   <div class="container">
     <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="#home">Baon</a>
     </div>

     <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
       <ul class="nav navbar-nav">

         <li class="menuItem"><a href="#whatis">Features</a></li>
         <li class="menuItem"><a href="#useit">The Problem</a></li>
         <li class="menuItem"><a href="#solution">Our Solution</a></li>
       </ul>
     </div>

   </div>
 </nav>

 <!-- What is -->
 <div id="whatis" class="content-section-b" style="border-top: 0">
   <div class="container">

     <div class="col-md-6 col-md-offset-3 text-center wrap_title">
       <h2>Features</h2>
       <!-- <p class="lead" style="margin-top:0">A special thanks to Death.</p> -->

     </div>

     <div class="row">

       <div class="col-sm-4 wow fadeInDown text-center">
         <img class="rotate" src="{{URL::asset('flatfy/img/icon/icon1.png') }}" alt="Generic placeholder image" width="100">
         <h3>Meal Packages</h3>
         <p class="lead">Variety of meal packages that inlcudes delicious and healthy lunch food for your child.</p>

         <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
       </div><!-- /.col-lg-4 -->

       <div class="col-sm-4 wow fadeInDown text-center">
         <img  class="rotate" src="{{URL::asset('flatfy/img/icon/shopping bag.svg') }}" alt="Generic placeholder image">
          <h3>Order</h3>
          <p class="lead">Hassle free ordering system for the meal package of your choice.</p>
          <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
       </div><!-- /.col-lg-4 -->

       <div class="col-sm-4 wow fadeInDown text-center">
         <img  class="rotate" src="{{URL::asset('flatfy/img/icon/map.svg') }}" alt="Generic placeholder image">
          <h3>Delivery</h3>
         <p class="lead">On time delivery to affiliated schools. You can trust us to deliver the meals on time for lunch.</p>
         <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
       </div><!-- /.col-lg-4 -->

     </div><!-- /.row -->

     <!-- <div class="row tworow">

       <div class="col-sm-4  wow fadeInDown text-center">
         <img class="rotate" src="{{URL::asset('flatfy/img/icon/laptop.svg') }}" alt="Generic placeholder image">
         <h3>Responsive</h3>
         <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
        <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p>
       </div>

       <div class="col-sm-4 wow fadeInDown text-center">
         <img  class="rotate" src="{{URL::asset('flatfy/img/icon/map.svg') }}" alt="Generic placeholder image">
          <h3>Google</h3>
          <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
          <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p>
       </div>

       <div class="col-sm-4 wow fadeInDown text-center">
         <img  class="rotate" src="{{URL::asset('flatfy/img/icon/browser.svg') }}" alt="Generic placeholder image">
          <h3>Bootstrap</h3>
        <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
         <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p>
       </div>

     </div> -->
   </div>
 </div>

 <!-- Use it -->
   <div id ="useit" class="content-section-a">

       <div class="container">

           <div class="row">

       <div class="col-sm-6 pull-right wow fadeInRightBig">
                   <img class="img-responsive " src="{{URL::asset('flatfy/img/bg3.jpg') }}" alt="">
               </div>

               <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
                   <h3 class="section-heading">The Problem</h3>
         <div class="sub-title lead3"><h4>One of the main concerns of mothers is what <br>their child/children will eat at school.</h4></div>
                   <p class="lead">
           For working moms, this also leads to additional problems because of their work schedule. Mornings can get very hectic because everyone is rushing to where they have to be. There could be times when they wont be able to prepare lunch food and either send the food to their child's school of just let them buy at the canteen. For the former, they either need to make time from work or ask someone to bring it to their child. The latter carries its own problem because no might be available to do it for them.

           Kaluoy sa bata. Gutumon.
         </p>

          <!-- <p><a class="btn btn-embossed btn-primary" href="#" role="button">View Details</a>
          <a class="btn btn-embossed btn-info" href="#" role="button">Visit Website</a></p> -->
       </div>
           </div>
       </div>
       <!-- /.container -->
   </div>

   <!-- <div class="content-section-b">

   <div class="container">
           <div class="row">
               <div class="col-sm-6 wow fadeInLeftBig">
                    <div id="owl-demo-1" class="owl-carousel">
           <a href="img/iphone.png" class="image-link">
             <div class="item">
               <img  class="img-responsive img-rounded" src="{{URL::asset('flatfy/img/iphone.png') }}" alt="">
             </div>
           </a>
           <a href="img/iphone.png" class="image-link">
             <div class="item">
               <img  class="img-responsive img-rounded" src="{{URL::asset('flatfy/img/iphone.png') }}" alt="">
             </div>
           </a>
           <a href="img/iphone.png" class="image-link">
             <div class="item">
               <img  class="img-responsive img-rounded" src="{{URL::asset('flatfy/img/iphone.png') }}" alt="">
             </div>
           </a>
         </div>
               </div>

               <div class="col-sm-6 wow fadeInRightBig"  data-animation-delay="200">
                   <h3 class="section-heading">Drag Gallery</h3>
         <div class="sub-title lead3">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br> sdfs sit atmet sit dolor greand fdanrh sdfs</div>
                   <p class="lead">
           In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret.
           Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur,
           uam non erat mirum sapientiae lorem cupido
           patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.
         </p>

          <p><a class="btn btn-embossed btn-primary" href="#" role="button">View Details</a>
          <a class="btn btn-embossed btn-info" href="#" role="button">Visit Website</a></p>
       </div>
     </div>
       </div>
   </div> -->

   <div id ="solution" class="content-section-a">

       <div class="container">

            <div class="row">

       <div class="col-sm-6 pull-left wow fadeInLeftBig">
                   <img class="img-responsive " src="{{URL::asset('flatfy/img/bg4.jpg') }}" alt="">
               </div>

               <div class="col-sm-6 wow fadeInRightBig"  data-animation-delay="200">
                   <h3 class="section-heading">The Solution</h3>
                   <p class="lead">
                     Baon: Order Meal Packages Online
                   </p>

         <ul class="descp lead2">
           <li><i class="glyphicon glyphicon-cutlery"></i> No need to worry on what to prepare. </li>
           <li><i class="glyphicon glyphicon-thumbs-up"></i> Delivery to the child's school is covered.</li>
           <li><i class="glyphicon glyphicon-calendar"></i> Empowers you to take control of your schedule and plan your budget.</li>
         </ul>
       </div>
           </div>
       </div>

   </div>

 <!-- Screenshot -->
 <!-- <div id="screen" class="content-section-b">
       <div class="container">
         <div class="row" >
      <div class="col-md-6 col-md-offset-3 text-center wrap_title ">
       <h2>Screen App</h2>
       <p class="lead" style="margin-top:0">A special thanks to Death.</p>
      </div>
     </div>
       <div class="row wow bounceInUp" >
             <div id="owl-demo" class="owl-carousel">

       <a href="img/slide/1.png" class="image-link">
         <div class="item">
           <img  class="img-responsive img-rounded" src="{{URL::asset('flatfy/img/slide/1.png') }}" alt="Owl Image">
         </div>
       </a>

              <a href="img/slide/2.png" class="image-link">
         <div class="item">
           <img  class="img-responsive img-rounded" src="{{URL::asset('flatfy/img/slide/2.png') }}" alt="Owl Image">
         </div>
       </a>

       <a href="img/slide/3.png" class="image-link">
         <div class="item">
           <img  class="img-responsive img-rounded" src="{{URL::asset('flatfy/img/slide/3.png') }}" alt="Owl Image">
         </div>
       </a>

       <a href="img/slide/1.png" class="image-link">
         <div class="item">
           <img  class="img-responsive img-rounded" src="{{URL::asset('flatfy/img/slide/1.png') }}" alt="Owl Image">
         </div>
       </a>

              <a href="img/slide/2.png" class="image-link">
         <div class="item">
           <img  class="img-responsive img-rounded" src="{{URL::asset('flatfy/img/slide/2.png') }}" alt="Owl Image">
         </div>
       </a>

       <a href="img/slide/3.png" class="image-link">
         <div class="item">
           <img  class="img-responsive img-rounded" src="{{URL::asset('flatfy/img/slide/3.png') }}" alt="Owl Image">
         </div>
       </a>
             </div>
         </div>
       </div>


 </div> -->


 <!-- Credits -->
 <!-- <div id="credits" class="content-section-a">
   <div class="container">
     <div class="row">

     <div class="col-md-6 col-md-offset-3 text-center wrap_title">
       <h2>Credits</h2>
       <p class="lead" style="margin-top:0">A special thanks to Death.</p>
      </div>

       <div class="col-sm-6  block wow bounceIn">
         <div class="row">
           <div class="col-md-4 box-icon rotate">
             <i class="fa fa-desktop fa-4x "> </i>
           </div>
           <div class="col-md-8 box-ct">
             <h3> Bootstrap </h3>
             <p> Lorem ipsum dolor sit ametconsectetur adipiscing elit. Suspendisse orci quam. </p>
           </div>
         </div>
       </div>
       <div class="col-sm-6 block wow bounceIn">
         <div class="row">
           <div class="col-md-4 box-icon rotate">
           <i class="fa fa-picture-o fa-4x "> </i>
           </div>
           <div class="col-md-8 box-ct">
           <h3> Owl-Carousel </h3>
           <p> Nullam mo  arcu ac molestie scelerisqu vulputate, molestie ligula gravida, tempus ipsum.</p>
           </div>
         </div>
       </div>
     </div>

     <div class="row tworow">
       <div class="col-sm-6  block wow bounceIn">
         <div class="row">
           <div class="col-md-4 box-icon rotate">
             <i class="fa fa-magic fa-4x "> </i>
           </div>
           <div class="col-md-8 box-ct">
             <h3> Codrops </h3>
             <p> Lorem ipsum dolor sit ametconsectetur adipiscing elit. Suspendisse orci quam. </p>
           </div>
         </div>
       </div>
       <div class="col-sm-6 block wow bounceIn">
         <div class="row">
           <div class="col-md-4 box-icon rotate">
           <i class="fa fa-heart fa-4x "> </i>
           </div>
           <div class="col-md-8 box-ct">
           <h3> Lorem Ipsum</h3>
           <p> Nullam mo  arcu ac molestie scelerisqu vulputate, molestie ligula gravida, tempus ipsum.</p>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div> -->

 <!-- Banner Download -->
 <div id="downloadlink" class="banner">
   <div class="container">
     <div class="row">
       <div class="col-md-6 col-md-offset-3 text-center wrap_title">
       <h2>Register for Free</h2>
       <p>
         <a href="{{ URL::to('/login') }}" class="btn btn-embossed btn-primary view" >Log In</a>
         <a href="{{ URL::to('/register') }}" class="btn btn-embossed btn-default view" >Register for Free</a>
       </p>
      </div>
     </div>
   </div>
 </div>

 <!-- Contact -->
 <!-- <div id="contact" class="content-section-a">
   <div class="container">
     <div class="row">

     <div class="col-md-6 col-md-offset-3 text-center wrap_title">
       <h2>Contact Us</h2>
       <p class="lead" style="margin-top:0">A special thanks to Death.</p>
     </div>

     <form role="form" action="" method="post" >
       <div class="col-md-6">
         <div class="form-group">
           <label for="InputName">Your Name</label>
           <div class="input-group">
             <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
             <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
           </div>
         </div>

         <div class="form-group">
           <label for="InputEmail">Your Email</label>
           <div class="input-group">
             <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
             <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
           </div>
         </div>

         <div class="form-group">
           <label for="InputMessage">Message</label>
           <div class="input-group">
             <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
             <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
           </div>
         </div>

         <input type="submit" name="submit" id="submit" value="Submit" class="btn wow tada btn-embossed btn-primary pull-right">
       </div>
     </form>

     <hr class="featurette-divider hidden-lg">
       <div class="col-md-5 col-md-push-1 address">
         <address>
         <h3>Office Location</h3>
         <p class="lead"><a href="https://www.google.com/maps/preview?ie=UTF-8&q=The+Pentagon&fb=1&gl=us&hq=1400+Defense+Pentagon+Washington,+DC+20301-1400&cid=12647181945379443503&ei=qmYfU4H8LoL2oATa0IHIBg&ved=0CKwBEPwSMAo&safe=on">The Pentagon<br>
         Washington, DC 20301</a><br>
         Phone: XXX-XXX-XXXX<br>
         Fax: XXX-XXX-YYYY</p>
         </address>

         <h3>Social</h3>
         <li class="social">
         <a href="#"><i class="fa fa-facebook-square fa-size"> </i></a>
         <a href="#"><i class="fa  fa-twitter-square fa-size"> </i> </a>
         <a href="#"><i class="fa fa-google-plus-square fa-size"> </i></a>
         <a href="#"><i class="fa fa-flickr fa-size"> </i> </a>
         </li>
       </div>
     </div>
   </div>
 </div> -->



   <!-- <footer>
     <div class="container">
       <div class="row">
         <div class="col-md-7">
           <h3 class="footer-title">Follow Me!</h3>
           <p>Vuoi ricevere news su altri template?<br/>
             Visita Andrea Galanti.it e vedrai tutte le news riguardanti nuovi Theme!<br/>
             Go to: <a  href="http://andreagalanti.it" target="_blank">andreagalanti.it</a>
           </p> -->

     <!-- LICENSE -->
     <!-- <a rel="cc:attributionURL" href="http://www.andreagalanti.it/flatfy"
      property="dc:title">Flatfy Theme </a> by
      <a rel="dc:creator" href="http://www.andreagalanti.it"
      property="cc:attributionName">Andrea Galanti</a>
      is licensed to the public under
      <BR>the <a rel="license"
      href="http://creativecommons.org/licenses/by-nc/3.0/it/deed.it">Creative
      Commons Attribution 3.0 License - NOT COMMERCIAL</a>.


         </div>  -->
         <!-- /col-xs-7 -->

         <!-- <div class="col-md-5">
           <div class="footer-banner">
             <h3 class="footer-title">Flatfy Theme</h3>
             <ul>
               <li>12 Column Grid Bootstrap</li>
               <li>Form Contact</li>
               <li>Drag Gallery</li>
               <li>Full Responsive</li>
               <li>Lorem Ipsum</li>
             </ul>
             Go to: <a href="http://andreagalanti.it/flatfy" target="_blank">andreagalanti.it/flatfy</a>
           </div>
         </div>
       </div>
     </div>
   </footer> -->

   <!-- JavaScript -->
   <script src="{{ URL::asset('flatfy/js/jquery-1.10.2.js') }}"></script>
   <script src="{{ URL::asset('flatfy/js/bootstrap.js') }}"></script>
 <script src="{{ URL::asset('flatfy/js/owl.carousel.js') }}"></script>
 <script src="{{ URL::asset('flatfy/js/script.js') }}"></script>
 <!-- StikyMenu -->
 <script src="{{ URL::asset('flatfy/js/stickUp.min.js') }}"></script>
 <script type="text/javascript">
   jQuery(function($) {
   $(document).ready( function() {
     $('.navbar-default').stickUp();

   });
   });

 </script>
 <!-- Smoothscroll -->
 <script type="text/javascript" src="{{ URL::asset('flatfy/js/jquery.corner.js') }}"></script>
 <script src="{{ URL::asset('flatfy/js/wow.min.js') }}"></script>
 <script>
  new WOW().init();
 </script>
 <script src="{{ URL::asset('flatfy/js/classie.js') }}"></script>
 <script src="{{ URL::asset('flatfy/js/uiMorphingButton_inflow.js') }}"></script>
 <!-- Magnific Popup core JS file -->
 <script src="{{ URL::asset('flatfy/js/jquery.magnific-popup.js') }}"></script>
</body>

</html>
