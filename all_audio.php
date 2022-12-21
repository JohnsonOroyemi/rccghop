<?php
session_start();
include("connection.php");
$name = "citibuilda";

$sql="select * from resource where categories_id = 36 order by id desc";
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
    
                         <div class="col-xs-8 col-xs-offset-2">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Audio</th>
                        <th>View</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['file']; ?></td>
                    <td><a href="uploads/<?php echo $row['file']; ?>" target="_blank">View</a></td>
                    <td><a href="uploads/<?php echo $row['file']; ?>" download>Download</td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>

               </div>
          </div> 
     </section>

  <?php
  //inserting footer file
    include("footer.php");
  ?>
  
  