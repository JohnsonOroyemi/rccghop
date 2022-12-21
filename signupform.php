<?php
include("connection.php");
?>
<div class="col-md-offset-1 col-md-4 col-sm-12">
                         <div class="entry-form">
                              <form action="process.php" method="post">
                                   <h2>Sign up today</h2>

<input type="text" class="form-control" name="firstname" placeholder="First name" required="">

<input type="text" class="form-control" name="lastname" placeholder="Last name" required="">

<input type="email"  class="form-control" name="email" placeholder="Your email address" required="">

<input type="password"  class="form-control" name="password"  placeholder="Your password" required="">

<button class="submit-btn form-control" name="create_user"  id="form-submit">Get started</button>

                              </form>
                         </div>
                    </div>

                   