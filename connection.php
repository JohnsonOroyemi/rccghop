<?php
$host = 'localhost';
$dbname = 'rccgnegy_admin';
$username = 'rccgnegy_rccghop_LP65';
$password = 'oImB&PCOsb=G';

$con = mysqli_connect($host, $username,$password, $dbname);

if($con)
{
    echo "";
}else{
    echo "Server and Database Not Connected";
}


?>