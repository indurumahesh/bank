<?php

include 'db.php';
$response = array();

$from_acc = $_POST['from_acc'];
$to_acc = $_POST['to_acc'];
$money = $_POST['money'];

$senderbalence = mysqli_query($con,"SELECT * FROM user WHERE user_account = '$from_acc'");

$data = mysqli_fetch_assoc($senderbalence);

$bal = $data['user_bal'];

//echo $bal;



if($bal >= $money)
{
	$sql  = "UPDATE user SET user_bal = user_bal+'$money' WHERE user_account = '$to_acc'";

	$result = mysqli_query($con,$sql);

	$sql1  = "UPDATE user SET user_bal = user_bal-'$money' WHERE user_account = '$from_acc'";

	$result1 = mysqli_query($con,$sql1);

if($result&&$result1)
{
 $response['status'] = 1;
 $response['message'] = 'success';
}

else
{
 $response['status'] = 0;
 $response['message'] = 'false'.mysqli_error($con);
}

}

else
{
	$response['status'] = 2;
 $response['message'] = 'Insuffiecient' ;
}



echo json_encode($response);

?>