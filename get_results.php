<?php
session_start();
include("connection.php");

if(isset($_POST['search'])) {
$description = $_POST["search_term"];

$sql = "SELECT * from newpost where  (PostHeading LIKE '%".$description."%') OR (SubHeading LIKE '%".$description."%') OR (PostContent LIKE '%".$description."%') OR (Author LIKE '%".$description."%')";

$result = mysqli_query($con, $sql);
if($make = mysqli_num_rows($result) > 0)
{

        while($row=$result->fetch_array())  {?>
      
        <div class="post-preview">
          <a href="post.php?id=<?php echo $row['ID']; ?>">
            <h2 class="post-title">
            <?php 
              echo ucwords(strtolower($row["PostHeading"]));
            ?>
              <!--Man must explore, and this is exploration at its greatest-->
            </h2>
            <h3 class="post-subtitle">
            <?php 
              echo ucwords(strtolower($row["SubHeading"]));
            ?>
              <!--Problems look mighty small from 150 miles up
              PostContent-->
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#"><?php 
              echo ucwords(strtolower($row["Author"]));
            ?></a>
            on <?php 
              echo ucwords(strtolower($row["PostingDate"]));
            ?></p>
        </div>
        <hr>
        <?php
        }
        ?>
        <?php
}
        }
        ?>
        
    
  
        
  


