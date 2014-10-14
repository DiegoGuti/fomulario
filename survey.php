<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs -->
<meta charset="utf-8">
<title>Mastenia Responsive Form wizar landing page</title>
<meta name="description" content="Mastenia Responsive Form wizar landing page">
<meta name="author" content="">

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS -->
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/skeleton.css">
<link rel="stylesheet" href="css/forms.css">
<link rel="stylesheet" href="css/layout.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/socialize-bookmarks.css">
<link rel="stylesheet" href="js/fancybox/source/jquery.fancybox.css?v=2.1.4">
<link rel="stylesheet" href="css/calendar.css">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Favicons-->
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Jquery -->
<script src="js/jquery-1.7.1.min.js"></script>
<script src="http://cdn.jquerytools.org/1.2.6/all/jquery.tools.min.js"></script>
 <script src="js/modernizr.2.5.3.js"></script>
</head>
<body>
<!--[if !IE]><!--><script>if(/*@cc_on!@*/false){document.documentElement.className+=' ie10';}</script><!--<![endif]-->

<header >
  <div class="container">
    <div class=" four columns" id="logo"><img src="img/logo.png"  class="scale-with-grid" alt="Logo"></div>
    <!-- Your logo-->
    
    <div class="btn-responsive-menu"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </div>
    <div class="twelve columns" id="top-nav">
      <ul>
        <li><a href="index.html" >Sign Up</a></li>
        <li><a href="reservation.html" >Reservation</a></li>
        <li><a href="survey.html" id="active">Survey</a></li>
        <li><a href="#" id="purchase">Purchase this template</a></li>
      </ul>
    </div>
  </div>
</header><!-- End Header-->

<section id="form_area_survey">
  <div id="shadow"></div>
  <article class="container">
    <div class=" four columns" id="top-msg">
      <div id="top-msg-wp">
        <h1>Survey</h1>
        <h2>Complete the form</h2>
        <p>Lorem ipsum dolor sit amet, eu pri voluptaria efficiantur, quo ea feugiat legimus intellegebat. </p>
        <p>Lorem ipsum dolor sit amet, eu pri voluptaria efficiantur, quo ea feugiat legimus intellegebat. </p>
      </div>
    </div>
    <div class="twelve columns" >
      <form id="custom" action="survey-send.php" method="POST" >
              <?php
if (isset($_POST['question_2'])) {
    $optionArray = $_POST['question_2'];
    for ($i=0; $i<count($optionArray); $i++) {
        echo $optionArray[$i]."<br />";
    }
}
?>
        <fieldset title="Step 1">
          <legend>Satisfaction</legend>
          <h3 class="question">1. How do you describe your overall satisfaction or dissatisfaction here?</h3>
              <ul>
              	<li><input type="radio" name="question_1" value="Very satisfied"/> Very satisfied</li>
                <li><input type="radio" name="question_1" value="Somewhat satisfied"/> Somewhat satisfied</li>
                <li><input type="radio" name="question_1" value="Neutral" /> Neutral</li>
                <li><input type="radio" name="question_1"  value="Somewhat dissatisfied"/> Somewhat dissatisfied</li>
                <li><input type="radio" name="question_1"  value="Very dissatisfied" /> Very dissatisfied</li>
              </ul>
              <br>
        </fieldset><!-- End Step one -->
        
        <fieldset title="Step 2" >
          <legend>About you</legend>
          <h3 class="question">2. How do you describe your carrer or profile?</h3>
          <div class="five columns alpha" >
              <ul class="add-bottom_3">
              	<li><input type="checkbox"  name="question_2[]"  value="Professional" /> Professional</li>
                <li><input type="checkbox"  name="question_2[]"  value="I have a degree"  /> I have a degree</li>
                <li><input type="checkbox"  name="question_2[]"  value="Neutral"  />  Neutral</li>
              </ul>
          </div>
          <div class="five columns omega" >
              <ul class="add-bottom_3">
              	<li><input type="checkbox"  name="question_2[]"  value="Emphatic"/> Emphatic</li>
                <li><input type="checkbox"  name="question_2[]"  value="Motivated"/> Motivated</li>
                <li><input type="checkbox"  name="question_2[]"  value="Passionate"/>  Passionate</li>
              </ul>
          </div>
          <br class="clear">
        </fieldset><!-- End Step two -->
        
        <fieldset title="Step 3">
          <legend>Personal info</legend>
          <div class="five columns alpha">
            <label>Name</label>
            <input type="text"  name="name" />
          </div>
          <div class="five columns omega">
            <label>Last name</label>
            <input type="text"  name="last_name" />
          </div>
          <div class="five columns alpha " >
            <label>Your Email <a href="#" class="tooltip_1" title="Your tooltip">Info</a></label>
            <input type="email"  name="email" />
          </div>
          <div class="five columns omega" >
            <label>Phone number <a href="#" class="tooltip_1" title="Your tooltip">Info</a></label>
            <input type="text"  name="phone_number" />
          </div>
          <br class="clear">
        </fieldset><!-- End Step three -->
        
        <input type="submit" class="finish" value="Finish!" />
      </form>
    </div>
  </article>
  <div id="shadow_2"></div>
</section><!-- End Form Area -->

<div class="container">

<section id="content_1">
  <article class="four columns">
    <div class="box"> <a href="#"><img src="img/icon_1.png" alt=""></a> </div>
    <h4>HTML5<span> dolor sit amet adisciping</span></h4>
    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
  </article>
  <article class="four columns">
    <div class="box"> <a href="#"><img src="img/icon_2.png" alt=""></a> </div>
    <h4>VALID CODE<span> dolor sit amet adisciping</span></h4>
    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
  </article>
  <article class="four columns">
    <div class="box"> <a href="#"><img src="img/icon_3.png" alt=""></a> </div>
    <h4>CLEAN DESIGN<span> dolor sit amet adisciping</span></h4>
    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
  </article>
  <article class="four columns">
    <div class="box"> <a href="#"><img src="img/icon_4.png" alt=""></a> </div>
    <h4>RESPONSIVE<span> dolor sit amet adisciping</span></h4>
    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
  </article>
  </section><!-- End content_1 -->
  
  <hr >
  
  <section id="content_2">
  
  <article class="clearfix">
  <div class="four columns about_strip"> <img  src="img/icon_5.png" alt="">
    <h3>Sodales eu nunc pede commodo donec cras perspiciatis </h3>
  </div>
  <div class="eleven columns line">
    <p>Lorem ipsum dolor sit amet, velit sed cursus lorem. Placerat velit, tristique nullam id urna. Libero morbi feugiat neque ante sed, suspendisse ac mi eleifend, sed et elementum mollis<strong> lacinia id ultricies</strong>. Sodales eu nunc, pede commodo donec cras perspiciatis quam vitae, quis orci ullamcorper metus egestas et. Wisi diam lobortis id, convallis id venenatis, sed vestibulum elit consequat, ac vestibulum tempus wisi suscipit tortor dolor. </p>
    <p>Vivamus nunc eleifend nunc fringilla lorem, montes dui, scelerisque eu blandit morbi turpis nisl, ullamcorper ante eu dui, quis eget neque turpis. </p>
  </div>
  </article>
  
<article class="clearfix">
  <div class="four columns about_strip"> <img  src="img/icon_6.png" alt="">
    <h3>Sodales eu nunc pede commodo donec cras perspiciatis </h3>
  </div>
  <div class="eleven columns line" >
    <p>Lorem ipsum dolor sit amet, velit sed cursus lorem. Placerat velit, tristique nullam id urna. Libero morbi feugiat neque ante sed, suspendisse ac mi eleifend, sed et elementum mollis<strong> lacinia id ultricies</strong>. Sodales eu nunc, pede commodo donec cras perspiciatis quam vitae, quis orci ullamcorper metus egestas et. Wisi diam lobortis id, convallis id venenatis, sed vestibulum elit consequat, ac vestibulum tempus wisi suscipit tortor dolor. </p>
    <p>Vivamus nunc eleifend nunc fringilla lorem, montes dui, scelerisque eu blandit morbi turpis nisl, ullamcorper ante eu dui, quis eget neque turpis. </p>
  </div>
</article>

<article class="clearfix add-bottom_3">
  <div class="four columns about_strip"> <img  src="img/icon_7.png" alt="">
    <h3>Sodales eu nunc pede commodo donec cras perspiciatis </h3>
  </div>
  <div class="eleven columns line">
    <p>Lorem ipsum dolor sit amet, velit sed cursus lorem. Placerat velit, tristique nullam id urna. Libero morbi feugiat neque ante sed, suspendisse ac mi eleifend, sed et elementum mollis<strong> lacinia id ultricies</strong>. Sodales eu nunc, pede commodo donec cras perspiciatis quam vitae, quis orci ullamcorper metus egestas et. Wisi diam lobortis id, convallis id venenatis, sed vestibulum elit consequat, ac vestibulum tempus wisi suscipit tortor dolor. </p>
    <p>Vivamus nunc eleifend nunc fringilla lorem, montes dui, scelerisque eu blandit morbi turpis nisl, ullamcorper ante eu dui, quis eget neque turpis. </p>
  </div>
  </article>
  <br class="clear">
  </section><!-- End content_2 -->
  
  <hr >
  
  <section id="content_3">
    <div class="four columns ">
      <h3>Lorem ipsum</h3>
      <p>Lorem ipsum dolor sit amet, sonet oratio persequeris qui at, te sed quem aliquip sadipscing.</p>
      <a href="#" class="button">Show more</a> <a href="#" class="button add-bottom_3">Contact us</a>
    </div>
    
    <div class="eleven columns line add-bottom_3">
      <h4>Product description</h4>
      <p>Vim id causae iriure integre, fugit lobortis salutandi qui at. Eros dolores tractatos vix ei, sonet errem qui te. Sed ut animal accusam delicatissimi. Vocent tincidunt ea qui, id qui justo vidisse docendi, at mundi mentitum theophrastus vis. Ex utroque eleifend qui.</p>
      <h4>Qui error labitur te</h4>
      <p class=" add-bottom_2">Vim id causae iriure integre, fugit lobortis salutandi qui at. Eros dolores tractatos vix ei, sonet errem qui te. Sed ut animal accusam delicatissimi. Vocent tincidunt ea qui, id qui justo vidisse docendi, at mundi mentitum theophrastus vis. Ex utroque eleifend qui.</p>
      
      <ul class="tabs">
        <!-- Give href an ID value of corresponding "tabs-content" <li>'s -->
        <li><a class="active" href="#firstab-1">General</a></li>
        <li><a href="#firstab-2">Video</a></li>
        <li><a href="#firstab-3">Slider</a></li>
      </ul>
      
      <!-- Standard <ul> with class of "tabs-content" -->
      <ul class="tabs-content">
              
        <!-- Give ID that matches HREF of above anchors -->
        <li class="active" id="firstab-1">
          <p>Vim id causae iriure integre, fugit lobortis salutandi qui at. Eros dolores tractatos vix ei, sonet errem qui te. Sed ut animal accusam delicatissimi. Vocent tincidunt ea qui, id qui justo vidisse docendi, at mundi mentitum theophrastus vis. Ex utroque eleifend qui.</p>
          <ul class="list_3">
            <li><strong>2G Network</strong> GSM 850 / 900 / 1800 / 1900</li>
            <li><strong>3G Network</strong> HSDPA 900 / 2100</li>
            <li><strong>Announced</strong> 2011, August</li>
            <li><strong>Status</strong> Available. Released 2011, September</li>
          </ul>
          <div class="pictures clearfix add-bottom">
            <div class="three columns alpha"> <a class="fancybox-media" href="http://www.youtube.com/watch?v=DvKSQXsDHcI"><span class="magnify_2">YouTube</span><img  src="img/img-explore-2.jpg" class="scale-with-grid" alt="" ></a> </div>
            <div class="three columns"> <a class="fancybox"  href="img/img-explore-3.jpg"  data-fancybox-group="gallery" ><span class="magnify_2">Picture</span><img  src="img/img-explore-2.jpg" class="scale-with-grid" alt="" ></a> </div>
            <div class="three columns omega"> <a class="fancybox"  href="img/img-explore-3.jpg"  data-fancybox-group="gallery" ><span class="magnify_2">Picture</span><img  src="img/img-explore-3.jpg" class="scale-with-grid" alt="" ></a> </div>
          </div><!-- End pictures -->       
        </li><!--End firstab-1-->
        
        <li id="firstab-2">
          <iframe src="http://www.youtube.com/embed/DvKSQXsDHcI?wmode=opaque"  height="350" style="width:100%;"></iframe><!-- Your video --> 
        </li><!--End firstab-2-->
        
        <li id="firstab-3">
          <div class="flexslider">
            <ul class="slides">
              <li><img src="img/slider_1.jpg" alt="">
                <p class="flex-caption">Captions and cupcakes. Winning combination.</p>
              </li>
              <li><img src="img/slider_2.jpg" alt="">
                <p class="flex-caption">Captions 2</p>
              </li>
              <li><img src="img/slider_3.jpg" alt="">
                <p class="flex-caption">Winning combination.</p>
              </li>
            </ul>
          </div><!-- end flexslider--> 
          
        </li><!--End firstab-2--> 
      </ul><!-- End tabs--> 
            
    </div><!-- End eleven columns--> 
    <br class="clear">
  </section> <!-- End content_3 -->

  <hr >
  
  <section id="content_4">
  <article>
    <div class="four columns">
      <h3>Contact us</h3>
      <p>Id meis honestatis eloquentiam vis, id delenit euripidis nam. Lorem iuvaret instructior nec ut, ad nullam petentium argumentum mel.</p>
      <p><strong>Street Number & Name Building</strong><br>
        District Postal Code 2034 BXU</p>
      <ul class="info_2">
        <li id="fax"><em>Tel. 41.22.319.36.10</em></li>
        <li id="mail"><a href="#">info@yourdomain.com</a></li>
      </ul>
    </div>
    <div class="eleven columns line">
      <div class="map_canvas add-bottom" id="map" style="height:375px;width:100%;"></div><!-- end map--> 
    </div>
    </article>
    <br class="clear">
</section>  <!-- End content_4 -->

<footer>
  <nav class="twelve columns">
    <ul class="social-bookmarks">
      <li class="behance"><a href="#">behance</a></li>
      <li class="facebook"><a href="#">facebook</a></li>
      <li class="googleplus"><a href="#">googleplus</a></li>
      <li class="twitter"><a href="#">twitter</a></li>
    </ul>
  </nav>
  <div class="four columns copy">© 2013 - All Rights Reserved.</div>
   <br class="clear">
</footer><!-- End Footer -->

</div><!-- End Container -->
<!-- Form style  --> 
 <script>
  $(document).ready(function(){
	$(":date").dateinput();
  });
  </script>
<script src="js/jquery.uniform.js"></script> 
<script type="text/javascript" >
      $(function(){
        $("input[type='text'],input[type='email'],input[type='radio'],input[type='checkbox'], textarea, select").uniform();
      });
    </script>
<!-- Add fancyBox --> 
<script  src="js/fancybox/source/jquery.fancybox.pack.js?v=2.1.4"></script> 
<script src="js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script> 
<script src="js/fancy_func.js"></script> 

<script src="js/flexi_slider.js"></script>
<!-- Google Maps API --> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script> 

<!-- JQUERY plugins: Poshy Tip, GMAP3, jQuery Validation, Tabs --> 
<script src="js/plug_ins.js"></script> 

<script src="js/jquery.stepy.min.js"></script> 
<script src="js/survey-validate.js"></script> 
<script src="js/functions.js"></script> 

</body>
</html>