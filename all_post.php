<?php
session_start();
include("connection.php");
$name = "citibuilda";
?>

<?php include("header.php"); ?>

<?php include("nav_bar.php"); ?>

     <!-- HOME -->

     <!-- FEATURE -->
     <section id="feature">
          <div class="container">
               <div class="row">
               <div class="section-title">
                              <h2>Media/Resources <small></small></h2>
                         </div>
                    <a href="all_audio.php" class="">
                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>01</span>
                              <h3>Audio Messages</h3>
                              <p></p>
                         </div>
                    </div>
                    </a>

                    <a href="all_video.php" class="">
                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>02</span>
                              <h3>Video Messages</h3>
                              <p></p>
                         </div>
                    </div>
                    </a>
                    
                    
                    <a href="praise.php" class="">
                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>03</span>
                              <h3>Praise/Worship</h3>
                              <p></p>
                         </div>
                    </div>
                    </a>


                    <a href="all_newsletter.php" class="">
                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>04</span>
                              <h3>News Letter</h3>
                              <p></p>
                         </div>
                    </div>
                    </a>
               </div>
          </div>
     </section>


     <!-- ABOUT -->


 <!-- TEAM -->
<?php //include("team.php");?>

 <!-- Courses -->
 <?php //include("courses.php");?>
    
 <!-- Courses -->
 <?php //include("testimonial.php");?>
    
<!-- CONTACT -->
<?php //include("contact.php");?>

 <!-- Footer -->
 <?php include("footer.php");?>