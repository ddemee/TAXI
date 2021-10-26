<?php
if(!empty($_POST["send"])) {
	$name = $_POST["name2"];
    $adress = $_POST["adress"];
    $day = $_POST["day"];
    $hour = $_POST["minutes"];
    $region = $_POST["region"];
	$cartype = $_POST["cartype"];
	$number = $_POST["number2"];
	$destination = $_POST["destination"];

	$toEmail = "admin@phppot_samples.com";
	$mailHeaders = "From: " . $name .">\r\n";
                    "ADRESS: " . $adress .">\r\n" ;
                    "NUMBER: " . $number .">\r\n";
                    "DAY: "    . $day .">\r\n";
                    "TIME: " . $hour .">\r\n";
                    "Region: " . $region .">\r\n";
                    "CARTYPE: " . $cartype .">\r\n";
                    "DESTINATION: " . $destination .">\r\n";
	if(mail($toEmail, $number,  $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
?>