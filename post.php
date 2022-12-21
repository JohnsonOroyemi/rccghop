<?php
session_start();
include("connection.php");

if(isset($_GET['id'])){
  $id = $_GET['id'];

  $sql="select * from event where id = $id";

  $result=$con->query($sql);
}else{

}
?>

<?php include("header.php"); ?>

<?php include("nav_bar.php"); ?>

<?php 
        if(isset($_GET['id'])){
        if(mysqli_num_rows($result) > 0){
          $row = mysqli_fetch_assoc($result);
  ?>
   
    <!-- Page Header -->
  <header class="masthead" style="background-image: url('images/postimg.jpg')">
    <div class=""></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        
          <div class="">
            <br><br>
            <h1>
            <?php 
              echo ucwords(strtolower($row["name"]));
            ?>
            </h1>
            <h3 class="">
            <?php 
              echo ucwords(strtolower($row["short_desc"]));
            ?>
            </h3>
          
            <span class=""><i class="fa fa-calendar"></i> <strong>Date:</strong>
              <a href="#"><?php 
              echo ucwords(strtolower($row["date"]));
            ?></a>
            <br><br>
            <i class="fa fa-clock-o"></i> <strong>Time:</strong>
              <?php 
              echo ucwords(strtolower($row["time"]));
            ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>

 <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>
          <img src="<?php 
              echo 'uploads/'.$row["file"];
            ?>" alt="<?php 
              echo $row["name"];
            ?>" style="width:100%">
            <br><br>
          <?php 
              echo $row["detailed_desc"];
            ?>
          </p>

  <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
     .body {
    background: #ffffff;
    font-family: 'Nunito', sans-serif;
    overflow-x: hidden;
    padding-top: 70px;
  }

        .panel{
      border-color: gainsboro;
      margin-bottom: 20px;
      padding-right: 2px;
      padding-left: 2px;
      }
       .panel-heading {
      background-color:gainsboro;
      border-color: gainsboro;
      border-width: 25px;
      padding-right: 15px;
      padding-left: 15px;
      padding-top: 15px;
       }
        .panel-body {
      background-color: gainsboro;
      border-color: gainsboro;
      border-width: 25px;
      padding-right: 15px;
      padding-left: 15px;
      padding-bottom: 15px;
        }
       .panel-footer {
      background-color: white;
      border-color: white;
      border-radius: 5px;
       }
       .left {
     float:left;
       }
       .right {
     float:right;
       }

    
p {
  line-height: 1.5;
  margin: 30px 0;
}

p a {
  text-decoration: underline;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-weight: 800;
  font-family: 'Nunito', sans-serif;
}

a {
  color: #212529;
  transition: all 0.2s;
}

a:focus, a:hover {
  color: #0085A1;
}

blockquote {
  font-style: italic;
  color: #868e96;
}

.section-heading {
  font-size: 36px;
  font-weight: 700;
  margin-top: 60px;
}

.caption {
  font-size: 14px;
  font-style: italic;
  display: block;
  margin: 0;
  padding: 10px;
  text-align: center;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}


header.masthead {
  margin-bottom: 50px;
  background: no-repeat center center;
 
  background-attachment: scroll;
  position: relative;
  background-size: cover;
}

header.masthead .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;

  
}

header.masthead .page-heading,
header.masthead .post-heading,
header.masthead .site-heading {
  padding: 200px 0 150px;
  color: white;
}

@media only screen and (min-width: 768px) {
  header.masthead .page-heading,
  header.masthead .post-heading,
  header.masthead .site-heading {
    padding: 200px 0;
  }
}

header.masthead .page-heading,
header.masthead .site-heading {
  text-align: center;
}

header.masthead .page-heading h1,
header.masthead .site-heading h1 {
  font-size: 50px;
  margin-top: 0;
}

header.masthead .page-heading .subheading,
header.masthead .site-heading .subheading {
  font-size: 24px;
  font-weight: 300;
  line-height: 1.1;
  display: block;
  margin: 10px 0 0;
  font-family: 'Muli', sans-serif;
}

@media only screen and (min-width: 768px) {
  header.masthead .page-heading h1,
  header.masthead .site-heading h1 {
    font-size: 80px;
  }
}

header.masthead .post-heading h1 {
  font-size: 35px;
}

header.masthead .post-heading .meta,
header.masthead .post-heading .subheading {
  line-height: 1.1;
  display: block;
}

header.masthead .post-heading .subheading {
  font-size: 24px;
  font-weight: 600;
  margin: 10px 0 30px;
  font-family: 'Muli', sans-serif;
}

header.masthead .post-heading .meta {
  font-size: 20px;
  font-weight: 300;
  font-style: italic;
  font-family: 'Muli', sans-serif;
}

header.masthead .post-heading .meta a {
  color: #fff;
}

@media only screen and (min-width: 768px) {
  header.masthead .post-heading h1 {
    font-size: 55px;
  }
  header.masthead .post-heading .subheading {
    font-size: 30px;
  }
}
</style>   
          </div>
        </div>
      </div>
</article>

<?php
    }else{
    echo "Not greater than zero";
  }
}
  ?>

<hr>

  <?php
  //inserting footer file
    include("footer.php");
  ?>
  
  