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

	<div class="logo_div text-center">
		<img class="logo_img" src="images/sbi.png">
	</div>

	<div class="main_paneldiv">

	<div class="col-md-3 side_men">
		<ul>
			<li><a href="admin_dashboard.php">Account list</a></li>
			<li><a href="adduser.php">Add account</a></li>
			
		</ul>
	</div>
	<div class="col-md-6 main_admindiv">
		
		<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Account</th>
                <th>Joined date</th>
                <th>Balence</th>
                
            </tr>
        </thead>
        <tfoot>
           
        </tfoot>
        <tbody>

        	<?php

        		include "db.php";

        		$getusers = mysqli_query($con,"SELECT * FROM user");

        		

        		while($data = mysqli_fetch_assoc($getusers))
				{

	        	?>


            <tr>
                <td><?php echo $data['user_name'] ?></td>
                <td><?php echo $data['user_account'] ?></td>
                <td><?php echo $data['user_addedon'] ?></td>
                <td><?php echo $data['user_bal'] ?></td>
                
                
            </tr>
            
            <?php  } ?>
            
        </tbody>
    </table>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
});
</script>
	
</body>
</html>