<?php 
header('Access-Control-Allow-Origin: *');

//require 'vendor/autoload.php';

//use Mailgun\Mailgun;
// godaddy username
//$con=mysqli_connect("localhost","jainarpit","jainarpit","iitjapan");
//local

include 'servercredentials.php';


if (mysqli_connect_errno($con))
  {
  echo "2";
    //echo "<br />";
  }
// 0 signup successful, 1 user already exists, 2 signup fail
  $name=$_POST["name"];
  $email=$_POST['email'];
  $number=$_POST['number'];
  $location=$_POST['location'];
  $company=$_POST['company'];
  $student=$_POST['designation'];
  $motivation=$_POST['motivation']; 
  $iitalum=$_POST['iitalum']; 
  $iitjapan=$_POST['iitjapan']; 
  $whichiitwereyouastudentof=$_POST['whichiitwereyouastudentof']; 
  $interestedingaladinner=$_POST['interestedingaladinner']; 
  $galadinnerpreferences=$_POST['galadinnerpreferences']; 
  $yearofgraduation=$_POST['yearofgraduation']; 
  $typeofregistration=$_POST['typeofregistration']; 
  $regid=time();
  /*$name='a';  $email='a';  $number='a';  $location='a';  $company='a';  $student='a';  $year='a';  $motivation='a';*/
$result = mysqli_query($con,"SELECT * FROM users where email='$email'");
    /* determine number of rows result set */
    $row_cnt = $result->num_rows;


    if($row_cnt>0){
      //username is present
      echo "1";
    } else {
      //username is not present
      $result = mysqli_query($con,"INSERT INTO `users` VALUES('$name','$email','$number','$location','$company','$interestedingaladinner', '$galadinnerpreferences', '$designation','$motivation','$iitalum','$iitjapan','$whichiitwereyouastudentof','$yearofgraduation','$typeofregistration','$regid');");
      if($result){
      echo "0";

require '../sendgrid-php/vendor/autoload.php';

$from = new SendGrid\Email("PAN IIT India Japan Convention 2017", "paniitjapan@gmail.com");
$subject = "PAN IIT India Japan Convention - Thank you for showing interest";
$to = new SendGrid\Email($name, $email);
//$mystr='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml"> <head> <meta charset="utf-8"> <!-- utf-8 works for most cases --> <meta name="viewport" content="width=device-width"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine --> <title></title> <!-- CSS Reset --> <style type="text/css"> html, body { Margin: 0 !important; padding: 0 !important; height: 100% !important; width: 100% !important; } /* What it does: Stops email clients resizing small text. */ * { -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; } /* What is does: Centers email on Android 4.4 */ div[style*="margin: 16px 0"] { margin:0 !important; } /* What it does: Stops Outlook from adding extra spacing to tables. */ table, td { mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important; } /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */ table { border-spacing: 0 !important; border-collapse: collapse !important; table-layout: fixed !important; Margin: 0 auto !important; } table table table { table-layout: auto; } /* What it does: Uses a better rendering method when resizing images in IE. */ img { -ms-interpolation-mode:bicubic; } .yshortcuts a { border-bottom: none !important; } /* What it does: A work-around for iOS meddling in triggered links. */ .mobile-link--footer a, a[x-apple-data-detectors] { color:inherit !important; text-decoration: underline !important; } </style> <!-- Progressive Enhancements --> <style> /* What it does: Hover styles for buttons */ .button-td, .button-a { transition: all 100ms ease-in; } .button-td:hover, .button-a:hover { background: #555555 !important; border-color: #555555 !important; } /* Media Queries */ @media screen and (max-width: 600px) { .email-container { width: 100% !important; } /* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */ .fluid, .fluid-centered { max-width: 100% !important; height: auto !important; Margin-left: auto !important; Margin-right: auto !important; } /* And center justify these ones. */ .fluid-centered { Margin-left: auto !important; Margin-right: auto !important; } /* What it does: Forces table cells into full-width rows. */ .stack-column, .stack-column-center { display: block !important; width: 100% !important; max-width: 100% !important; direction: ltr !important; } /* And center justify these ones. */ .stack-column-center { text-align: center !important; } /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */ .center-on-narrow { text-align: center !important; display: block !important; Margin-left: auto !important; Margin-right: auto !important; float: none !important; } table.center-on-narrow { display: inline-block !important; } } </style> </head> <body bgcolor="#222222" width="100%" style="Margin: 0;"> <table bgcolor="#222222" cellpadding="0" cellspacing="0" border="0" height="100%" width="100%" style="border-collapse:collapse;"><tr><td valign="top"> <center style="width: 100%;"> <!-- Visually Hidden Preheader Text : BEGIN --> <div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;"> Welcome to FundMyVenture! </div> <!-- Visually Hidden Preheader Text : END --> <!-- Email Header : BEGIN --> <table align="center" width="600" class="email-container"> <tr> <td style="padding: 20px 0; text-align: center">  </td> </tr> </table> <!-- Email Header : END --> <!-- Email Body : BEGIN --> <table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#ffffff" width="600" class="email-container"> <!-- Hero Image, Flush : BEGIN --> <tr> <td> <img src="http://iitjapanconvention.com/images/Final_PanIIT-logo-no-text.png" width="600" height="" alt="Thank you for showing interest in PAN IIT India Japan Convention 2017" border="0" align="center" style="width: 100%; max-width: 600px;"> </td> </tr> <!-- Hero Image, Flush : END --> <!-- 1 Column Text : BEGIN --> <tr> <td style="padding: 20px; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555;">Thank you for registering with <a href="http://iitjapanconvention.com/" target="_blank">PAN IIT India Japan Convention 2017</a>. We look forward to meeting you. <br> <br>Your registration details are:<br>Name: '.$name.'<br/>E-Mail: '.$email.'<br/>Contact Number: '.$number.'<br/>Registration ID (for future reference): '.$regid.'<br/></body></html>';
$mystr='<div style="padding: 20px;">Hi '.$name.',<br/><br/>Thank you for registering with <a href="http://iitjapanconvention.com/" target="_blank">PAN IIT India Japan Convention 2017</a>. We look forward to meeting you at Makuhari Messe, Tokyo on 1st December 2017. <br> <br>Your registration details are:<br><b>Name</b>: '.$name.'<br/><b>E-Mail</b>: '.$email.'<br/><b>Contact Number</b>: '.$number.'<br/><b>Registration ID</b>: (for future reference): '.$regid.'<br/><br/>Should the above details change or for more information, please contact us at <a href="mailto:iitjapan@gmail.com">iitjapan@gmail.com</a>.<br/><br/> For updates about the event, please visit: <a href="http://iitjapanconvention.com/" target="_blank">PAN IIT India Japan Convention 2017</a><br/><br/>Best regards,<br/>Team PAN IIT India Japan Convention 2017</div>';
$content = new SendGrid\Content("text/html", $mystr);
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey ='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';
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
//echo $response->statusCode();
//print_r($response->headers());
//echo $response->body();
      }
      else {
      echo "2";
      }
    }


$con->close();





/*
require 'server/mail/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

//$mail->isSMTP();                                    // Set mailer to use SMTP
$mail->Host = 'ssl://smtp.gmail.com';                 // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'paniitjapan@gmail.com';            // SMTP username
$mail->Password = 'paniitjapan.org';                  // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('paniitjapan@gmail.com', 'PAN IIT India Japan Convention');     // Add a recipient
$mail->addAddress($email);  
    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'PAN IIT India Japan Convention - Thank you for showing interest';
$mail->Body    = 'testmail';
$mail->AltBody = 'Thank you for showing interest for PAN IIT India Japan Convention 2017. We look forward to seeing you on 1st December.';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
*/


?>