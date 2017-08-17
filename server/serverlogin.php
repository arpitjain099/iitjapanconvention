<?php 
header('Access-Control-Allow-Origin: *');

//require 'vendor/autoload.php';

//use Mailgun\Mailgun;


include 'servercredentials.php';
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo "<br />";
  }


  $loginemail=$_POST["loginemail"];
  $loginpassword=$_POST['loginpassword'];
  //$name='a';  $email='a';  $number='a';  $location='a';  $company='a';  $student='a';  $year='a';  $motivation='a';

  $sql = "SELECT * FROM users";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "success";
} else {
    echo "fail";
}



$con->close();
?>