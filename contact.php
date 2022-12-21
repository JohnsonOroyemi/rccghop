<!-- CONTACT -->
<?php
include("connection.php");
?>

<div id="contact" class="fullwidth-block" data-bg-color="#4a3173">
					<div class="container">
						<h2 class="section-title">Contact us</h2>
						<p class="section-intro">We love conversations. let us talk!</p>

						<div class="contact-detail">
							<span><img src="images/icon-marker.png" alt="" class="icon"> 1, Kadiri Street, Fadeyi, Lagos</span>
							<span><img src="images/icon-phone.png" alt="" class="icon"> +234 818 348 8935</span>
							<span><img src="images/icon-envelope.png" alt="" class="icon"> contact@rccghop.net</span>
						</div>

						<form class="contact-form" id="contact-form" role="form" action="get_response.php" method="post" name="sentMessage>
							<div class="row">
								<div class="col-md-6">
									<div class="control"><input type="text" placeholder="Your name..." name="your_name" required=""><img src="images/icon-user.png" alt="" class="icon"></div>
									<div class="control"><input type="text" placeholder="Email..." name="your_email" required=""><img src="images/icon-email.png" alt="" class="icon"></div>
									<div class="control"><input type="text" placeholder="Subject..." name="subject" required=""><img src="images/icon-globe.png" alt="" class="icon"></div>
								</div>
								
									<div class="control">
										<textarea placeholder="Your message..." name="comments"  required=""></textarea>
										<img src="images/icon-pen.png" alt="" class="icon">
									</div>
									<p class="text-right">
										<input type="submit" value="Send message" name="sendMail" >
									</p>
							
							</div>
						</form>
					</div>
				</div>
