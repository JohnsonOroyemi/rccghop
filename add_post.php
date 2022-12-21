<?php
session_start();
include("connection.php");
require('top.inc.php');
if(!isset($_SESSION["user_id"])){
header("location:index.php#signupform");
 }
 $name = "citibuilda";

?>

  <div class="card">
    <div class="card-header"><strong>Add New Article</strong><small></small></div>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <span><?php if(isset($_GET['r'])){echo $_GET['r'];} ?></span>
        <form method="post" action="process.php" name="sentMessage" id="" enctype="multipart/form-data">
        <div class="card-body card-block">
							   <div class="form-group">
									<label for="categories" class=" form-control-label"></label>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Image</label>
              <input type="file" class="form-control" id="fileToUpload" name="file" >
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Post Heading</label>
              <input type="text" class="form-control" placeholder="Post Heading" id="name" name="postHeading" required data-validation-required-message="Please enter the post heading.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Sub-heading</label>
              <input type="text" class="form-control" placeholder="Sub-heading" id="email" name="subHeading" required data-validation-required-message="Please subheading">
              <p class="help-block text-danger"></p>
            </div>
          </div>

          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Post Content</label><br><br>
              <textarea rows="5" class="form-control" placeholder="Post Content" id="message" name="postContent" required data-validation-required-message="Please enter the post content."></textarea>
              <!-- <textarea name="editor1"></textarea> -->
              <p class="help-block text-danger"></p>
            </div>
          </div>

          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Author</label>
              <input type="text" class="form-control" placeholder="Author" id="phone" name="author" required data-validation-required-message="Please enter the author's name.">
              <p class="help-block text-danger"></p>
            </div>

            <div class="control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Date</label>
                <input type="date" class="form-control" placeholder="Date" id="phone" name="postDate" required data-validation-required-message="Please choose the posting date.">
                <p class="help-block text-danger"></p>
              </div>
          </div>
        
          <br><br>
          <div id="success"></div>
          <input type="submit" class="btn btn-primary" id="sendMessageButton" name="addPost" value="Add" >
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>
  <hr>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'postContent' );
  </script>   
  <!-- Footer -->
  <footer>
  <?php
   require('footer.inc.php');
   ?>
  </footer>

 
</body>

</html>

