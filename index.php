<?php
session_start();
include("connection.php");
?>

<?php include("header.php"); ?>

<?php include("nav_bar.php"); ?>

     <!-- HOME -->
     <section id="home">
          <div class="row">

                    <div class="owl-carousel owl-theme home-slider">
                         <div class="item item-first">
                         <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>WELCOME! </h1>
                                                                               <h3>With Jesus joy, I welcome you specially to the glorious presence of God in RCCG HOUSE OF PRAISE. LAGOS PROVINCE 65 HEADQUARTERS. God loves you and you are very special to him and I want you to know He has wonderful plans for your life no matter who you are or where you are....<a href="welcome.php" "><b>continue reading</b></a></h3>
                                             
                                             <a href="https://mixlr.com/rccghouseofpraise" target="_blank" class="section-btn btn btn-default smoothScroll">RCCGHOP LIVE</a>
                                        </div>
                                   </div>
                              </div>ss
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                         <div class="col-md-6 col-sm-12">
                                             <h1>WELCOME! </h1>
                                             <h3>With Jesus joy, I welcome you specially to the glorious presence of God in RCCG HOUSE OF PRAISE. LAGOS PROVINCE 65 HEADQUARTERS. God loves you and you are very special to him and I want you to know He has wonderful plans for your life no matter who you are or where you are....<a href="welcome.php" "><b>continue reading</b></a></h3>
                                             
                                             <a href="https://mixlr.com/rccghouseofpraise" target="_blank" class="section-btn btn btn-default smoothScroll">RCCGHOP LIVE</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
          </div>
     </section>

     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <h2>Our Identity </h2>

                              <figure>
                                   <span><i class="fa fa-info"></i></span>
                                   <figcaption>
                                        <h3>Vision</h3>
                                        <p>To shine as the light the Lord Jesus has called us in this dark world and as His body, give beauty for ashes</p>
                                   </figcaption>
                              </figure>

                              <figure>
                                   <span><i class="fa fa-info"></i></span>
                                   <figcaption>
                                        <h3>Mission</h3>
                                        <p>To make disciples of all nations, reaching the unchurched who will re-establish God’s kingdom on earth</p>
                                   </figcaption>
                              </figure>

                              <figure>
                                   <span><i class="fa fa-info"></i></span>
                                   <figcaption>
                                        <h3>2022 Anchor</h3>
                                        <p>Joel 2:25  And I will restore to you the years that the locust hath eaten, the cankerworm, and the caterpiller, and the palmerworm... </p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

                    <?php include("signupform.php");?>

               </div>
          </div>
     </section>

<?php include("eventsonly.php");?>

<?php include("sermonsonly.php");?>

 <!-- TEAM -->
<?php //include("team.php");?>

 <!-- Courses -->
 <?php //include("courses.php");?>
    
 <!-- Courses -->
 <?php include("testimonial.php");?>
    

<!-- CONTACT -->
<?php include("contact.php");?>


 <!-- Footer -->
 <?php include("footer.php");?>