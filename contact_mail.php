<?php
include("connection.php");
$toEmail = "contact@rccghop.net";
$mailHeaders = "From: " . $_POST["your_name"] . "<". $_POST["your_email"] .">\r\n". "Content-Type: text/plain; charset=utf-8";
if(mail($toEmail, $_POST["subject"], $_POST["comments"], $mailHeaders)) {
echo"";
} else {
echo"";
}
?>
