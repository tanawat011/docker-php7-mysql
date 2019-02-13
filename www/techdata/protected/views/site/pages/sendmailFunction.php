<?php
$this->layout = 'noThemes';
/*$type = isset($_GET['type']) ?  $_GET['type'] : (isset($_POST['type']) ? $_POST['type'] : 'D');
	

$rivision = Rivision::model()->count(" YEAR(date_time) = '".date('Y')."' and MONTH(date_time) = '".date('m')."' and DAY(date_time) = '".date('d')."' ");
					$rivisionStr = '';
					if($rivision>0) {
							$rivisionStr = " Rev. ".$rivision;
					}
*/					
require_once '/var/www/html/techdata/protected/views/site/pages/mailContent.php';	

$to = isset($_GET['to']) ?  $_GET['to'] : (isset($_POST['to']) ? $_POST['to'] : '');
$subject = isset($_GET['subject']) ?  $_GET['subject'] : (isset($_POST['subject']) ? $_POST['subject'] : '');
$message = isset($_GET['message']) ?  $_GET['message'] : (isset($_POST['message']) ? $_POST['message'] : '');
$email = isset($_GET['email']) ?  $_GET['email'] : (isset($_POST['email']) ? $_POST['email'] : '');
$name = isset($_GET['name']) ?  $_GET['name'] : (isset($_POST['name']) ? $_POST['name'] : '');

require '../tasfleet/PHPMailer/PHPMailerAutoload.php';
date_default_timezone_set('Etc/UTC');

$mail = new PHPMailer;
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = '10.66.99.9'; 
$mail->Port = 25; 

$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "witthaya_p"; //$mail->Username = "joth14@gmail.com";

$mail->Password = "wp2@17##";
$mail->From =  $_SESSION['email']; //'witthaya_p@tasl.co.th'; //$_SESSION["email"];    // "witthaya_p@tasl.co.th";
$mail->FromName = $_SESSION['fname'].' '.$_SESSION['lname']; //"Witthaya Panduang"; //$_SESSION['fname']; //"Witthaya Panduang";

$mail->setFrom(''.$_SESSION['email'].'', $_SESSION['fname'].' '.$_SESSION['lname']);
$mail->addReplyTo(''.$email.'', $name);
$to_list = explode(',',$to);
foreach($to_list as $t){
	$mail->addAddress($t, '');	
}
$mail->Subject = $subject; //'PHPMailer GMail SMTP test';


$mail->Body  = $email_content; //$message;//  =  'This is the HTML message body <b>in bold!</b>'; // //
$mail->IsHTML(true);
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}		 
?>