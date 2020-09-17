<?php

    $to = "training@mypetspas.com";
    // $from = $_REQUEST['email'];
    // $name = $_REQUEST['name'];
    // $subject = $_REQUEST['subject'];
    // $number = $_REQUEST['number'];
    // $cmessage = $_REQUEST['message'];

$name = $_REQUEST['name'];
$address = $_REQUEST['address'];
$email = $_REQUEST['email'];
// $name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$pet_name = $_REQUEST['pet_name'];
$pet_breed = $_REQUEST['pet_breed'];
$pet_color = $_REQUEST['pet_color'];
$pet_dob = $_REQUEST['pet_dob'];
$pet_sex = $_REQUEST['pet_sex'];
$pet_desexed = $_REQUEST['pet_desexed'];
$pet_dov = $_REQUEST['pet_dov'];
$pet_dodw = $_REQUEST['pet_dodw'];
$pet_place = $REQUESTT['pet_place'];
$pet_awp = $_REQUEST['pet_awp'];
$first_pets = $_REQUEST['first_pets'];
$other_pets = $_REQUEST['other_pets'];
$pet_beh1 = $_REQUEST['pet_beh1'];
$pet_beh2 = $_REQUEST['pet_beh2'];
$pet_beh3 = $_REQUEST['pet_beh3'];
$pet_beh4 = $_REQUEST['pet_beh4'];
$pet_beh5 = $_REQUEST['pet_beh5'];
$pet_beh6 = $_REQUEST['pet_beh6'];
$pet_beh7 = $_REQUEST['pet_beh7'];
$pet_beh8 = $_REQUEST['pet_beh8'];
$pet_beh9 = $_REQUEST['pet_beh9'];
$pet_beh10 = $_REQUEST['pet_beh10'];



    $headers = "From: $email";
	$headers = "From: " . $email . "\r\n";
	$headers .= "Reply-To: ". $email . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "You have a Training Booking from your My Pet Spas.";

    $logo = 'images/logo.png';
    $link = 'mypetspas.com';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$email}</td>";
	$body .= "</tr>";
  $body .= "<tr>";
  $body .= "<td style='border:none;'><strong>Address:</strong> {$address}</td>";
  $body .= "<td style='border:none;'><strong>PhoneNo:</strong> {$phone}</td>";
  $body .="</tr>";
  $body .= "<tr>";
  $body .= "<td style='border:none;'><strong>Pet Name:</strong> {$pet_name}</td>";
  $body .= "<td style='border:none;'><strong>Pet Breed:</strong> {$pet_breed}</td>";
  $body .="</tr>";
  $body .= "<tr>";
  $body .= "<td style='border:none;'><strong>Pet Color:</strong> {$pet_color}</td>";
  $body .= "<td style='border:none;'><strong>Pet Date of Birth:</strong> {$pet_dob}</td>";
  $body .="</tr>";
  $body .= "<tr>";
  $body .= "<td style='border:none;'><strong>Pet Sex:</strong> {$pet_sex}</td>";
  $body .= "<td style='border:none;'><strong>Pet De-sexed:</strong> {$pet_desexed}</td>";
  $body .="</tr>";
  $body .= "<tr>";
  $body .= "<td style='border:none;'><strong>Pet Date of Vaccination:</strong> {$pet_dov}</td>";
  $body .= "<td style='border:none;'><strong>Pet Date of Deworking:</strong> {$pet_dodw}</td>";
  $body .="</tr>";
  $body .= "<tr>";
  $body .= "<td style='border:none;'><strong>Where did they buy the pet:</strong> {$pet_place}</td>";
  $body .= "<td style='border:none;'><strong>Age of pet Purchased:</strong> {$pet_awp}</td>";
  $body .="</tr>";
  $body .= "<tr>";
  $body .= "<td style='border:none;'><strong>Is this first Dog ?:</strong> {$first_pets}</td>";
  $body .= "<td style='border:none;'><strong>Have other Pets?:</strong> {$other_pets}</td>";
  $body .="</tr>";
  $body .= "<tr>";
  $body .= "<td style='border:none;'><strong>Sit of Request?:</strong> {$pet_beh1}</td>";
  $body .= "<td style='border:none;'><strong>Stay on Request:</strong> {$pet_beh2}</td>";
  $body .="</tr>";
  $body .= "<tr>";
  $body .= "<td style='border:none;'><strong>Respond to Name?:</strong> {$pet_beh3}</td>";
  $body .= "<td style='border:none;'><strong>Come when Called?:</strong> {$pet_beh4}</td>";
  $body .="</tr>";
  $body .= "<tr>";
  $body .= "<td style='border:none;'><strong>Go to bed on Request:</strong> {$pet_beh5}</td>";
  $body .= "<td style='border:none;'><strong>Lay Down on request:</strong> {$pet_beh6}</td>";
  $body .="</tr>";
  $body .= "<tr>";
  $body .= "<td style='border:none;'><strong>Sociable with Other Pets:</strong> {$pet_beh7}</td>";
  $body .= "<td style='border:none;'><strong>Walk on a loose leash (no pulling):</strong> {$pet_beh8}</td>";
  $body .="</tr>";
  $body .= "<tr>";
  $body .= "<td style='border:none;'><strong>Sociable with people (no jumping):</strong> {$pet_beh9}</td>";
  $body .= "<td style='border:none;'><strong>Give eye contact when responding to Name:</strong> {$pet_beh10}</td>";
  $body .="</tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);
        header("Location:/booktraining.php");


?>
