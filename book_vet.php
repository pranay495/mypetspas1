<?php

    $to = "support@mypetspas.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $pet_type = $_REQUEST['pet_type'];
    $petname = $_REQUEST['pet_name'];
    $subject = $_REQUEST['subject'];
    $number = $_REQUEST['number'];
    $date = $_REQUEST['date'];
    $time = $_REQUEST['time'];
    $cmessage = $_REQUEST['message'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "You have a message from your My Pet Spas.";

    $logo = 'images/logo.png';
    $link = 'mypetspas.com';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
  $body .= "<td style='border:none;'><strong>Pet Name:</strong> {$petname}</td>";
  $body .= "<td style='border:none;'><strong>Pet Aniaml:</strong> {$pet_type}</td>";
	$body .= "</tr>";
  $body .= "<tr><td style='border:none;'><strong>Date:</strong> {$date}</td>";
	$body .= "<td style='border:none;'><strong>Time:</strong> {$time}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$subject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);

?>
