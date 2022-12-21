 <!-- Courses -->
 <?php
include("connection.php");
$name = "citibuilda";

$sql="select * from product where categories_id = 31 order by id desc limit 4";
$result=$con->query($sql);
?>
 <section id="courses">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Resources/Media <small>Transform your life by the renewal of Your Mind. Become like Jesus</small></h2>
                         </div>

          <div class="col-xs-8 col-xs-offset-2">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Audio/Video/Bulletin</th>
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
                    <td><?php echo $row['image']; ?></td>
                    <td><a href="uploads/<?php echo $row['image']; ?>" target="_blank">View</a></td>
                    <td><a href="uploads/<?php echo $row['image']; ?>" download>Download</td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
                    </div>

               </div>
          </div> 
          <br>
          <div class="section-title">
          <a href="all_post.php" class=""> <h2><small>View All</small></h2></a>
          </div>
     </section>
