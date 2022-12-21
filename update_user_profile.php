<?php
session_start();
include("connection.php");
require('top.inc.php');
$name = "citibuilda";

if(!isset($_SESSION["user_id"])){
header("location:signin.php");
 }

 if(isset($SESSION['user_id'])){
  $id = $_SESSION['user_id'];

  $sql="SELECT * from user where id = $id";

  $result=$con->query($sql);
}else{

}
?>

<div class="card">
  <div class="card-header"><strong>Update Your Profile</strong><small></small></div>
  <div class="card-body card-block"></div>  
			<div class="form-group"></div>  
					<label for="categories" class=" form-control-label"></label>
          
    <!-- Main Content -->
    <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      <?php 
        if(isset($_SESSION['id'])){
        if(mysqli_num_rows($result) > 0){
          $row = mysqli_fetch_assoc($result);
          ?>
        <form method="post" action="process.php" name="sentMessage" id="" enctype="multipart/form-data" >
        <input name="id" type="hidden" value="<?php echo $row['userId'];?>" />
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Image</label>
              <input type="file" class="form-control" id="fileToUpload" name="file" value="">          

            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Fisrt Name</label>
              <input type="text" class="form-control" placeholder="First Name" id="name" name="firstname" value="<?php echo $row ['firstName'];?>" >
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Last Name</label>
              <input type="text" class="form-control" placeholder="Last Name" id="email" name="lastname" value="<?php echo $row ['lastName'];?>"  required data-validation-required-message="Please subheading">
              <p class="help-block text-danger"></p>
            </div>
          </div>

          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Email Address</label>
              <input type="email" class="form-control" placeholder="Email Address" id="phone" name="email"  value="<?php echo $row ['emailAddress'];?>"  required data-validation-required-message="Please enter the author's name.">
              <p class="help-block text-danger"></p>
            </div>
          <?php
                  }else{
            echo "Not greater than zero";
          }
        }
          ?>
          <br>
          <div id="success"></div>
          <input type="submit" class="btn btn-primary" id="sendMessageButton" name="update" value="update" >
        </form>
      </div>
    </div>
  </div>
  </div>
  </div>
  <hr>

  <!-- Footer -->
  <footer>
  <?php
   require('footer.inc.php');
   ?>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>
  <script>
      CKEDITOR.replace( 'postContent' );
  </script>
</body>

</html>
