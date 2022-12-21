<?php
session_start();
include("connection.php");
require('top.inc.php');

 $sql="select * from user";
 $result=$con->query($sql);

?>

<div class="card">
  <div class="card-header"><strong>Your Profile</strong><small></small></div>
  <div class="card-body card-block"></div>  
			<div class="form-group"></div>  
					<label for="categories" class=" form-control-label"></label>

  <!-- Main Content -->
    <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      <?php if(mysqli_num_rows($result) > 0){
          $row = mysqli_fetch_assoc($result);
          ?>
          <?php 
          if(isset($_SESSION["user_id"])) 
          {?>

        <div class="post-preview">
        <a href="#">
            <h5 class="post-title">
            <span><b> First Name:</b></span>
            <?php 
              echo ucwords(strtolower($row["firstName"]));
            ?>
              <!--Man must explore, and this is exploration at its greatest-->
            </h5>
            <br>
            <p class="post-subtitle">
            <span><b> Last Name:</b></span>
            <?php 
              echo ucwords(strtolower($row["lastName"]));
            ?>
            
              <!--Problems look mighty small from 150 miles up
              PostContent-->
            </p>
          </a>
          <p class="post-meta">
          <span><b> Email Address:</b></span>
            <a href="#"><?php 
              echo $row["emailAddress"];
            ?></a>
           <?php 
            
            ?></p>
            
            <a href="update_user_profile.php?id=<?php echo $row['userId']; ?>" type="btn" class="btn" style="border:1px solid grey;height:auto">Edit</a>
        </div>  
        <hr>
        <?php
          }
          ?>
         <?php
          }
          ?>
     

  <!-- Footer -->
  <footer>
  <?php
   require('footer.inc.php');
   ?>
  </footer>
 