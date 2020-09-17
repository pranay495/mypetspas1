<?php

if(isset($_REQUEST['submit'])){
    
            $customername = $_REQUEST['name'];
            $phone = $_REQUEST['phone'];
            $email = $_REQUEST['email'];
            echo $customername,$phone,$email;
            $admincontact = "9677410159";
    	    $api_key = '35F49E42B40E55';
            $contacts = $phone.",".$admincontact;
            $from = 'EASYMS';
            $sms = "Welcome to mypetspas.com, Your Individual Grooming session has been booked with  Customer Name : $customername and Phone Number : $phone and Email : $email";
            $sms_text = urlencode($sms);
            
            $api_url = "https://login.easywaysms.com/app/smsapi/index.php?key=".$api_key."&campaign=0&routeid=7&type=text&contacts=".$contacts."&senderid=".$from."&msg=".$sms_text;
            
            // echo $api_url;
            
            $response = file_get_contents( $api_url);
            // echo $response;
                header("Location:/services.php");

    
}
            
?>