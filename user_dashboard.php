<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

</head>
<body>

    <?php

        include("db.php");

        $id = $_GET['id'];

        $getdata = mysqli_query($con,"SELECT * FROM user WHERE user_account = '$id'");

        $data = mysqli_fetch_assoc($getdata);



    ?>

	<div class="logo_div text-center">
		<img class="logo_img" src="images/sbi.png">
	</div>

	<div class="main_paneldiv">

	<div class="col-md-3 side_men">
		<ul>
			<li><a href="admin_dashboard.php">Account Summary</a></li>
			<li><a href="user_transfer.php?id=<?php echo $id ?>">Transfer Money</a></li>
			
		</ul>
	</div>
	<div class="col-md-6 main_admindiv">
        <table id="customers">

    


  
  <tr>
    <td>Account holder name</td>
    <td><?php echo $data['user_name']; ?></td>
    
  </tr>
  <tr>
    <td>Account number</td>
    <td><?php echo $data['user_account']; ?></td>
    
  </tr>
  <tr>
    <td>Account balance</td>
    <td><?php echo $data['user_bal']; ?></td>
    
  </tr>

  <tr>
    <td>Currency</td>
    <td>INR</td>
    
  </tr>
  
</table>
		
	</div>
</div>


	
</body>
</html>