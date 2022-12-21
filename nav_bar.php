<?php
include("connection.php");
?>
     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.php" class="navbar-brand"><img src="images/RCCG-LOGO.png" alt="citibuilda" style="width:35px;height:35px;"></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About</a></li>
                         <li><a href="#seremons" class="smoothScroll">Resources</a></li>
                         <li><a href="#testimonial" class="smoothScroll">Testimony</a></li>
                         <li><a href="#contact" class="smoothScroll">Info Desk</a></li>
                          <li><a href="#" class="smoothScroll">Youth</a></li>
                           <li><a href="#" class="smoothScroll">Children</a></li>
                    </ul>
             
                    <ul class="nav navbar-nav navbar-right">
					<?php
            
            if(isset($_SESSION["user_id"]))
            {?>
                <li><a href="signin.php#about"><i class="fa fa-user"></i> Membership</a></li>
            <?php
            }
            else{
            ?>
                <li><a href="signin.php#about"><i class="fa fa-user"></i>Membership</a></li>
                <?php
                }

            ?>
                    </ul>
               </div>

          </div>
     </section>

    