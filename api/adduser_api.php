<?php

include 'db.php';

$response = array();

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$account = rand(11111,99999);
$bal = '0';

$sql = "INSERT INTO user (user_name,user_email,user_mobile,user_address,user_account,user_bal,user_addedon) VALUES ('$name','$email','$mobile','$address','$account','$bal',NOW())";

$result = mysqli_query($con,$sql);

if($result)
{
	$response['status'] = 1;
	$response['message'] = "success";
}

else
{
	$response['status'] = 0;
	$response['message'] = "failed";
}


echo json_encode($response);



?>