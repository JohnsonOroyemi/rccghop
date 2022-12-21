<?php 
include("connection.php");

// contactmail
if (isset($_POST["sendMail"]))
{
$yourName = $con->real_escape_string ($_POST['your_name']);
$yourEmail = $con->real_escape_string($_POST['your_email']);
$subject = htmlspecialchars($_POST['subject'], ENT_QUOTES);
$comments =  htmlspecialchars($_POST['comments'], ENT_QUOTES);

include("contact_mail.php");

$sql = "INSERT INTO contact_form_info(firstName,email, phone, comments)VALUES('$yourName','$yourEmail','$subject','$comments')";

if($con->query($sql)) {
    
 echo "<script type='text/javascript'>alert('Mail sent. Thank you for the feedback, we will surely be in touch.'); window.location.href = 'index.php#contact';</script>";
          exit;

	}else{
   echo "<script type='text/javascript'>alert('Please fill name and email address'); window.location.href = 'index.php#contact';</script>";
          exit;

    }

}else{
   echo "<script type='text/javascript'>alert('An error occured'); window.location.href = 'index.php#contact';</script>";
          exit;

}
?>