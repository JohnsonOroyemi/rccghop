<?php
include("connection.php");


  $sql="select * from product where categories_id = 13";
  $result=$con->query($sql);

?> 

 
  <!-- Start Slider Area -->
  <div class="slider__container slider--one">
                            <div class="slider__activation__wrap owl-carousel owl-theme">
                                <!-- Start Single Slide -->
                                <?php while($row=$result->fetch_array()) 
                                       {?>
                                <div class="slide slider__full--screen slider-height-inherit slider-text-right" style="background: rgba(0, 0, 0, 0) url(<?php echo 'assets/uploads/'.$row["image"];?>) no-repeat scroll center center / cover ;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-10 col-lg-8 col-md-offset-2 col-lg-offset-4 col-sm-12 col-xs-12">
                                                <div class="slider__inner">
                                                    <h1>New Product <span class="text--theme">Collection</span></h1>
                                                    <div class="slider__btn">
                                                        <a class="htc__btn" href="cart.php">shop now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                                <!-- End Single Slide -->
                            </div>
                        </div>
                        <!-- End Slider Area -->
       