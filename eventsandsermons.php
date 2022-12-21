<?php
include("connection.php");
$name = "citibuilda";

$sql="select * from resource order by id desc limit 2";
$result=$con->query($sql);
?>

 <div id="seremons" class="fullwidth-block" data-bg-color="#4a3173">
					<div class="container">
						<div class="row">
							<div class="col-md-5">
								<h3 class="section-title">Upcoming Event</h3>
								<ul class="seremon-list">
								<li>
										<?php while($row=$result->fetch_array()) {?>
										<h3 class="seremon-title"><a href="#"><?php echo ucwords(strtolower ($row["name"]));?></a></h3>
										<p><?php echo ucwords(strtolower ($row["short_desc"]));?></p>
										<div class="seremon-meta">
											<span><i class="fa fa-calendar"></i> <strong>Date:</strong><?php echo ucwords(strtolower ($row["date"]));?></span>
											<span><i class="fa fa-map-marker"></i> <strong></strong> <?php echo ucwords(strtolower ($row["location"]));?></span>
										</div>
									</li>
									<?php } ?>	
								</ul>

								<a href="#" class="button">See All Events</a>
							</div>

							
							<div class="col-md-5 col-md-offset-2">
								<h3 class="section-title">Latest Sermons</h3>
								<ul class="seremon-list">
							
              						<?php while($row=$result->fetch_array()) {?>
									<li>
										<h3 class="seremon-title"><a href="#"><?php echo $row["name"];?></a></h3>
										<div class="seremon-meta">
											<span><i class="fa fa-calendar"></i> <strong>Date:</strong><?php echo $row["date"];?></span>
											<span><i class="fa fa-user"></i> <strong>Minister:</strong> <?php echo $row["minister"];?></span>
										</div>
										<a href="uploads/<?php echo $row['file']; ?>" target="_blank" class="button secondary"><img src="images/icon-headset.png" alt="" class="icon"> Listen/Watch</a>
										<a href="uploads/<?php echo $row['file']; ?>" download class="button secondary"><img src="images/icon-film.png" alt=""> Download</a>
									</li>
									<?php } ?>	
								</ul>

								<a href="all_post.php" class="button">See all sermons</a>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- #seremons -->