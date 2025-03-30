<?php

include 'inc/database.php';

$db = new Database();
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
//$email= $_POST['email'];
$scheme=$_POST['scheme'];
$city= $_POST['city'];
$message= $_POST['message'];
$contact = $db->insert("contact_us", ['business'=>$scheme,'name' => $name,'mobile'=>$mobile,'address'=>$address,'city'=>$city,'message' => $message,]);
if ($contact) {
    echo "<script>alert('Thanks For Contact');</script>";
    echo "<script>window.location='index.php';</script>";
    
} else {
    //echo alert('Oops', 'Something Went Wrong!', false);
    echo "<script>window.location='contact.php';</script>";
//    print_r($db->error());
}
