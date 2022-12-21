<?php
include("connection.php");
$name = "citibuilda";

$sql="select * from event order by id desc limit 2";
$result=$con->query($sql);
?>

 <div id="seremons" class="fullwidth-block" data-bg-color="#4a3173">
					<div class="container">
						<div class="row">
							<div class="col-md-5">
								<h3 class="section-title">Upcoming Event</h3>
								<ul class="seremon-list">
								 
							<?php while($row=$result->fetch_array()) {?>  
							
								<li>	
								<h3 class="seremon-title"><a href="post.php?id=<?php echo $row['id']; ?>"><?php echo ucwords(strtolower ($row["name"]));?></a></h3>
										<p><?php echo ucwords(strtolower ($row["short_desc"]));?></p>
										<div class="seremon-meta">
											<span><i class="fa fa-calendar"></i> <strong>Date:</strong><?php echo ucwords(strtolower ($row["date"]));?></span> <br> <br>
											<span><i class="fa fa-map-marker"></i> <strong></strong> <?php echo ucwords(strtolower ($row["location"]));?></span> <br> <br>
											<span><i class="fa fa-clock-o"></i> <strong>Time:</strong><?php echo ucwords(strtolower ($row["time"]));?></span>
										</div>
										
									</li>
									<?php } ?>	
								</ul>

								<a href="all_event.php" class="button">See All Events</a>
							</div>
						