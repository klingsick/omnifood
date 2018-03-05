<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Omnifood is a demo web site that showcases Bill Klingsick's web developer skills">
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,300italic" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="resources/css/media-queries.css">
    <link rel="apple-touch-icon" sizes="180x180" href="resources/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="resources/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="resources/favicons/favicon-16x16.png">
    <link rel="manifest" href="resources/favicons/site.webmanifest">
    <link rel="mask-icon" href="resources/favicons/safari-pinned-tab.svg" color="#e67e22">
    <link rel="shortcut icon" href="resources/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#e67e22">
    <meta name="msapplication-config" content="resources/favicons/browserconfig.xml">
    <meta name="theme-color" content="#e67e22">
    <title>Omnifood</title>
   </head>
   <body>

       <header>
           <nav>
               <div class="row">
                  <a href="index.php">
                      <img src="resources/img/logo-white.png" alt="Omnifood logo" class="logo">
                      <img src="resources/img/logo.png" alt="Omnifood logo" class="logo-black">
                  </a>
                  <ul class="main-nav js--main-nav">
                     <li><a href="#features">Food Delivery</a></li>
                     <li><a href="#steps">How It Works</a></li>
                     <li><a href="#cities">Our Cities</a></li>
                     <li><a href="#signup">Sign Up</a></li>
                  </ul>
                  <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
               </div>
           </nav>
           <div class="hero-text-box">
               <h1>Goodbye junk food.<br>Hello super healthy meals.</h1>
               <a class="btn btn-full js--scroll-to-plans" href="#">I'm hungry</a>
               <a class="btn btn-ghost js--scroll-to-features" href="#">Show me more</a>
           </div>
       </header>

	<!-- Features Section -->
       <section class="section-features js--section-features" id="features">
           <div class="row">
               <h2>Get food fast &mdash; not fast food.</h2>
               <p class="long-copy">
                   Hello, we're Omnifood, your new premium food delivery service. We know you're always busy. No time for cooking. So let us take care of that. We're really good at it. We promise!
               </p>
           </div>
           <div class="row js--waypoint-1">
               <div class="col span-1-of-4 box">
                   <i class="ion-calendar icon-big icon-light"></i>
                   <h3>Up to 365 days/year</h3>
                   <p>
                       Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.
                   </p>
               </div>
               <div class="col span-1-of-4 box">
                   <i class="ion-clock icon-big"></i>
                   <h3>Ready in 20 minutes</h3>
                   <p>
                       You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.
                   </p>
               </div>
               <div class="col span-1-of-4 box">
                   <i class="ion-fork icon-big"></i>
                   <h3>100% organic</h3>
                   <p>
                       All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!
                   </p>
               </div>
               <div class="col span-1-of-4 box">
                   <i class="ion-checkmark icon-big icon-light"></i>
                   <h3>Order anything</h3>
                   <p>
                       We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!
                   </p>
               </div>
           </div>
       </section>

   <!-- Meals Images Section -->
       <section class="section-meals">
           <ul class="meals-showcase clearfix">
               <li>
                   <figure class="meal-photo">
                       <img src="resources/img/1.jpg" alt="Korean bibimbap with egg and vegetables">
                   </figure>
               </li>
               <li>
                   <figure class="meal-photo">
                       <img src="resources/img/2.jpg" alt="Simple italian pizza with cherry tomatoes">
                   </figure>
               </li>
               <li>
                   <figure class="meal-photo">
                       <img src="resources/img/3.jpg" alt="Chicken breast steak with vegetables">
                   </figure>
               </li>
               <li>
                   <figure class="meal-photo">
                       <img src="resources/img/4.jpg" alt="Autumn pumpkin soup">
                   </figure>
               </li>
           </ul>
           <ul class="meals-showcase clearfix">
               <li>
                   <figure class="meal-photo">
                       <img src="resources/img/5.jpg" alt="Paleo beef steak with vegetables">
                   </figure>
               </li>
               <li>
                   <figure class="meal-photo">
                       <img src="resources/img/6.jpg" alt="Healthy baguette with egg and vegetables">
                   </figure>
               </li>
               <li>
                   <figure class="meal-photo">
                       <img src="resources/img/7.jpg" alt="Burger with cheddar and bacon">
                   </figure>
               </li>
               <li>
                   <figure class="meal-photo">
                       <img src="resources/img/8.jpg" alt="Granola with cherries and strawberries">
                   </figure>
               </li>
           </ul>
       </section>

   <!-- Steps 1, 2, 3 Section -->
       <section class="section-steps" id="steps">
           <div class="row">
               <h2>How it works &mdash; Simple as 1, 2, 3</h2>
           </div>
           <div class="row">
               <div class="col span-1-of-2 steps-box">
                   <img src="resources/img/app-iPhone.png" alt="Omnifood app on iPhone" class="app-screen js--waypoint-2">
               </div>
               <div class="col span-1-of-2 steps-box">
                   <div class="works-step">
                       <div>1</div>
                       <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                   </div>
                   <div class="works-step">
                       <div>2</div>
                       <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
                   </div>
                   <div class="works-step">
                       <div>3</div>
                       <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
                   </div>
                   <a href="#" class="btn-app"><img src="resources/img/download-app.svg" alt="iPhone App"></a>
                   <a href="#" class="btn-app"><img src="resources/img/download-app-android.png" alt="Android App"></a>
               </div>
           </div>
       </section>

   <!-- Cities (locations) Section -->
       <section class="section-cities" id="cities">
           <div class="row">
               <h2>We're currently in these cities</h2>
           </div>
           <div class="row js--waypoint-3">
		        <div class="col span-1-of-4 cities-box">
		            <img class="city-img" src="resources/img/lisbon-3.jpg" alt="Lisbon">
		            <h3>Lisbon</h3>
		            <ul class="city-points">
                        <li><i class="ion-ios-people icon-small"></i>1600+ happy eaters</li>
		                <li><i class="ion-ios-star icon-small"></i>60+ top chefs</li>
		                <li><i class="ion-social-twitter icon-small"></i><a href="#">@omnifood_lx</a></li>
		            </ul>
		        </div>
		        <div class="col span-1-of-4 cities-box">
		            <img class="city-img" src="resources/img/san-francisco.jpg" alt="San Francisco">
		            <h3>San Francisco</h3>
		            <ul class="city-points">
                        <li><i class="ion-ios-people icon-small"></i>3700+ happy eaters</li>
		                <li><i class="ion-ios-star icon-small"></i> 60+ top chefs</li>
		                <li><i class="ion-social-twitter icon-small"></i><a href="#">@omnifood_sf</a></li>
		            </ul>
		        </div>
		        <div class="col span-1-of-4 cities-box">
		            <img class="city-img" src="resources/img/berlin.jpg" alt="Berlin">
		            <h3>Berlin</h3>
		            <ul class="city-points">
                        <li><i class="ion-ios-people icon-small"></i>2300+ happy eaters</li>
		                <li><i class="ion-ios-star icon-small"></i>110+ top chefs</li>
		                <li><i class="ion-social-twitter icon-small"></i><a href="#">@omnifood_berlin</a></li>
		            </ul>
		        </div>
		        <div class="col span-1-of-4 cities-box">
		            <img class="city-img" src="resources/img/london.jpg" alt="London">
		            <h3>London</h3>
		            <ul class="city-points">
		                <li><i class="ion-ios-people icon-small"></i>1200+ happy eaters</li>
		                <li><i class="ion-ios-star icon-small"></i>50+ top chefs</li>
		                <li><i class="ion-social-twitter icon-small"></i><a href="#">@omnifood_london</a></li>
		            </ul>
		        </div>
           </div>
       </section>

   <!-- Testimonials Section -->
       <section class="section-testimonials">
           <div class="row">
               <h2>Our customers can't live without us!</h2>
           </div>
           <div class="row">
               <div class="col span-1-of-3 testimonial-box">
                   <blockquote>
                       Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!
                       <cite><img src="resources/img/customer-1.jpg" alt="Alberto Duncan" class="testimonial-img">&mdash; Alberto Duncan</cite>
                   </blockquote>
               </div>
               <div class="col span-1-of-3 testimonial-box">
                   <blockquote>
                       Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!
                       <cite><img src="resources/img/customer-2.jpg" alt="Joana Silva" class="testimonial-img">&mdash; Joana Silva</cite>
                   </blockquote>
               </div>
               <div class="col span-1-of-3 testimonial-box">
                   <blockquote>
                       I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!
                       <cite><img src="resources/img/customer-3.jpg" alt="Milton Chapman" class="testimonial-img">&mdash; Milton Chapman</cite>
                   </blockquote>
               </div>
           </div>
       </section>

   <!-- Pricing Plans Section -->
       <section class="section-plans js--section-plans" id="signup">
           <div class="row">
               <h2>Start eating healthy today</h2>
           </div>
           <div class="row">
               <div class="col span-1-of-3 plans-box">
                   <div class="plan-container js--waypoint-4">
                       <div>
                           <h3>Premium</h3>
                           <p class="plan-price">$399 <span>/ month</span></p>
                           <p class="price-per-meal">That's only $13.30 per meal</p>
                       </div>
                       <div>
                           <ul>
                               <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal every day</li>
                               <li><i class="ion-ios-checkmark-empty icon-small"></i>Order 24/7</li>
                               <li><i class="ion-ios-checkmark-empty icon-small"></i>Access to newest creations</li>
                               <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
                           </ul>
                       </div>
                       <div>
                           <a class="btn btn-full" href="#">Sign up now</a>
                       </div>
                   </div>
               </div>
               <div class="col span-1-of-3 plans-box">
                   <div class="plan-container">
                       <div>
                           <h3>Pro</h3>
                           <p class="plan-price">$149 <span>/ month</span></p>
                           <p class="price-per-meal">That's only $14.90 per meal</p>
                       </div>
                       <div>
                           <ul>
                               <li><i class="ion-ios-checkmark-empty icon-small icon-small"></i>1 meal 10 days/month</li>
                               <li><i class="ion-ios-checkmark-empty icon-small"></i>Order 24/7</li>
                               <li><i class="ion-ios-checkmark-empty icon-small"></i>Access to newest creations</li>
                               <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
                           </ul>
                       </div>
                       <div>
                           <a class="btn btn-ghost" href="#">Sign up now</a>
                       </div>
                   </div>
               </div>
               <div class="col span-1-of-3 plans-box">
                   <div class="plan-container">
                       <div>
                           <h3>Starter</h3>
                           <p class="plan-price">$19 <span>/ meal</span></p>
                           <p class="price-per-meal">&nbsp;</p>
                       </div>
                       <div>
                           <ul>
                               <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal</li>
                               <li><i class="ion-ios-checkmark-empty icon-small"></i>Order from 8 am to 12 pm</li>
                               <li><i class="ion-ios-close-empty icon-small"></i></li>
                               <li><i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
                           </ul>
                       </div>
                       <div>
                           <a class="btn btn-ghost" href="#">Sign up now</a>
                       </div>
                   </div>
               </div>
           </div>
       </section>

    <!-- Feedback Form Section -->
       <section class="section-form" id="form">
           <div class="row">
               <h2>We're happy to hear from you</h2>
           </div>
           <div class="row">
               <form method="post" action="mailer.php" class="contact-form">
                       
                    <?php
                   
                       if($_GET['success'] == 1) {
                           echo "<div class=\"row\"><div class=\"form-messages success\">Thank you! Your message has been sent.</div></div>";
                       }
                       
                       if($_GET['success'] == -1) {
                           echo "<div class=\"row\"><div class=\"form-messages error\">Oops! Something went wrong. Please try again.</div></div>";
                       }
                   ?>
                       
                       <div class="row">
                           <div class="col span-1-of-3">
                               <label for="name">Name</label>
                           </div>
                           <div class="col span-2-of-3">
                               <input type="text" name="name" id="name" placeholder="Your Name" required>
                           </div>
                   </div>
                   <div class="row">
                       <div class="col span-1-of-3">
                           <label for="email">Email</label>
                       </div>
                       <div class="col span-2-of-3">
                           <input type="email" name="email" id="email" placeholder="Your Email" required>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col span-1-of-3">
                           <label for="find-us">How did you find us?</label>
                       </div>
                       <div class="col span-2-of-3">
                           <select name="find-us" id="find-us">
                               <option value="null">Choose an Option...</option>
                               <option value="friends">Friends</option>
                               <option value="search">Search Engine</option>
                               <option value="ad">Advertisement</option>
                               <option value="other">Other</option>
                           </select>
                       </div>
                   </div>
                    <div class="row">
                       <div class="col span-1-of-3">
                           <label for="newsletter">Newsletter?</label>
                       </div>
                       <div class="col span-2-of-3">
                           <input type="checkbox" name="newsletter" id="newsletter" checked>
                           <label for="newsletter">Yes, please!</label>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col span-1-of-3">
                           <label for="message">Drop us a line</label>
                       </div>
                       <div class="col span-2-of-3">
                           <textarea rows="6" cols="50" name="message" id="message" maxlength="1000" placeholder="Your message here"></textarea>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col span-1-of-3">
                           <label>&nbsp;</label>
                       </div>
                       <div class="col span-2-of-3">
                           <button type="submit">Submit</button>
                       </div>
                   </div>
               </form>
           </div>
       </section>

   <!-- Footer -->
       <footer>
           <div class="row">
               <div class="col span-1-of-2">
                   <ul class="footer-nav">
                       <li><a href="#">About us</a></li>
                       <li><a href="#">Blog</a></li>
                       <li><a href="#">Press</a></li>
                       <li><a href="#">iOS App</a></li>
                       <li><a href="#">Android App</a></li>
                   </ul>
               </div>
               <div class="col span-1-of-2">
                   <ul class="social-links">
                       <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                       <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                       <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                       <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                   </ul>
               </div>
           </div>
           <div class="row">
               <p>
                   Copyright &copy; 2018 by Noone. No rights reserved. This is a fictional website for demonstration purposes only.
               </p>
           </div>
       </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="vendors/js/Respond-master/dest/respond.min.js"></script>
        <script src="vendors/js/html5shiv-master/dist/html5shiv.js"></script>
        <script src="vendors/js/selectivizr-master/selectivizr.js"></script>
        <script src="vendors/js/jquery.waypoints.min.js"></script>
        <script src="resources/js/script.js"></script>

   </body>
</html>
