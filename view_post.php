<?php
session_start();
include("connection.php");
require('top.inc.php');

 $sql="select * from newpost order by id desc";
 $result=$con->query($sql);

?>

<div class="card">
  <div class="card-header"><strong>Your Article(s)</strong><small></small></div>
  <div class="card-body card-block"></div>  
			<div class="form-group"></div>  
					<label for="categories" class=" form-control-label"></label>

  <!-- Main Content -->
    <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      <?php while($row=$result->fetch_array()) 
          {?>
          <?php 
          if(isset($_SESSION["user_id"])) 
          { 
          if($row["PostedBy"] === $_SESSION["user_id"]){?>
           <?php 
          if($row["Approval"] == 1){?>
        <div class="post-preview">
        <a href="post.php?id=<?php echo $row['ID']; ?>">
            <h5 class="post-title">
            <?php 
              echo ucwords(strtoupper($row["PostHeading"]));
            ?>
              <!--Man must explore, and this is exploration at its greatest-->
            </h5>
            <p class="post-subtitle">
            <?php 
              echo ucwords(strtolower($row["SubHeading"]));
            ?>
            
              <!--Problems look mighty small from 150 miles up
              PostContent-->
            </p>
          </a>
          <p class="post-meta">Posted by
            <a href="#"><?php 
              echo ucwords(strtolower($row["Author"]));
            ?></a>
            on <?php 
              echo ucwords(strtolower($row["PostingDate"]));
            ?></p>
            
            <a href="update_edit.php?id=<?php echo $row['ID']; ?>" type="btn" class="btn" style="border:1px solid grey;height:auto">Edit</a> 
            <a href="process.php?id=<?php echo $row['ID'];?>&delete=delete" type="btn" class="btn" style="border:1px solid grey;height:auto">Delete </a>
        </div>  
        <hr>
        <?php
          }
          ?>
        <?php }
        }else{
          header("location:signin.php");
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
 