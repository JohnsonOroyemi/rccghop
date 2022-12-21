<?php
session_start();
include("connection.php");

$sql="select * from event order by id desc";
$result=$con->query($sql);
?>

<?php include("header.php"); ?>

<?php include("nav_bar.php"); ?>

    <!-- Courses -->
   <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Explore <small>From Latest to Oldest</small></h2>
                         </div>
    
                         <?php while($row=$result->fetch_array()){?>
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="<?php echo 'uploads/'.$row["file"];?>"  class="img-responsive" alt="" style="height:200px; width:100%;">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i></span>
                                                     
                                                  </div>
                                                   
                                             </div>

                                             <div class="courses-detail" style="height:150px;">
                                                  <h3><a href="post.php"><?php echo ucwords(strtolower($row["name"]));?></a></h3>
                                                  <p><?php echo ucwords(strtolower($row["short_desc"]));?></p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="images/RCCG-LOGO.png" class="img-responsive" alt="">
                                                       <span><?php echo ucwords(strtolower($row["location"]));?></span>
                                                  </div>
                                                  <div class="courses-price">
                                                       <a href="post.php?id=<?php echo $row['id']; ?>"><span>View</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div> 
                              <?php } ?>  
                         
                    </div>

               </div>
          </div> 
     </section>
     
 <!-- Footer -->
 <?php include("footer.php");?>