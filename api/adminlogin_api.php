<?php

include 'db.php';

$response = array();

$uname = $_POST['uname'];
$pass = $_POST['pass'];

$query = "SELECT * FROM admin WHERE admin_username='$uname' AND admin_password ='$pass'";
$result = mysqli_query($con,$query);

//echo mysqli_num_rows($result);

if(mysqli_num_rows($result)>0)
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