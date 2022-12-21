<?php
session_start();
include("connection.php");
$name = "citibuilda";

?>

<?php include("header.php"); ?>

<?php include("nav_bar.php"); ?>

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
                                        <h3>2021 Anchor</h3>
                                        <p>Hag 2:9 The glory of this latter house shall be greater than of the former, saith the LORD of hosts: and in this place will I give peace, saith the LORD </p>
                                   </figcaption>
                              </figure>
                              </div>
                              </div>

                    <div class="col-md-offset-1 col-md-4 col-sm-12">
                         <div class="entry-form">
                              <form action="process.php" method="post">
                                   <h2>Sign in</h2>

<input type="email" name="username"  class="form-control" placeholder="Your email address" required="">

<input type="password" name="password" class="form-control" placeholder="Your password" required="">

<button class="submit-btn form-control" name="login"  id="form-submit">Continue</button> <br> 
                                <a href=""><h4>Forgot Password?</h4></a>  
                       </form>
                         </div>
                    </div>

               </div>
          </div>
     </section>


 <!-- Footer -->
 <?php include("footer.php");?>