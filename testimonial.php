<?php
include("connection.php");
$name = "citibuilda";

$sql="select * from testimony order by id desc ";
$result=$con->query($sql);
?>
 <!-- TESTIMONIAL -->
 <section id="testimonial">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h1>Testimony </h1>
                              <p>Lives touched to the Glory of God</p>
                         </div>

                         <div class="owl-carousel owl-theme owl-client">

                         <?php while($row=$result->fetch_array()) {?>
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="<?php echo 'uploads/'.$row["file"];?>" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4><?php echo ucwords(strtolower ($row["name"]));?></h4>
                                             <span><?php echo ucwords(strtolower ($row["location"]));?></span>
                                        </div>
                                        <p><b><?php echo ucwords(strtolower ($row["title_testimony"]));?></b> </p>
                                        <p><?php echo ucwords(strtolower ($row["short_desc"]));?></p>
                                        <div class="tst-rating">
                                        <p><b><?php echo ucwords(strtolower ($row["date"]));?></b></p>
                                        </div>
                                   </div>
                              </div>
                         <?php } ?>	
                         </div>
                         
                    </div>
               </div>
          </div>
     </section> 
