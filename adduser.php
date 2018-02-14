<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

	<div class="logo_div text-center">
		<img class="logo_img" src="images/sbi.png">
	</div>

	<div class="gap"></div>

<div class="col-md-3"></div>
<div class="col-md-6">
	<!-- <form class="form-horizontal"> -->
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" placeholder="Enter Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Email:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Mobile:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="mobile" placeholder="Enter mobile">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Address:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="address" placeholder="Enter password">
    </div>
  </div>

  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
     
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10 text-center">
      <button class="userlogin_btn" id="add_account">Add account</button>
    </div>
  </div>

</div>
<div class="col-md-3"></div>


<script type="text/javascript">


	$("#add_account").on("click",function()
	{
		var name = $("#name").val();
		var email = $("#email").val();
		var mobile = $("#mobile").val();
		var address = $("#address").val();

		$.ajax({

			url:"api/adduser_api.php",
			data:{name:name,email:email,mobile:mobile,address:address},
			type:"post",

			success:function(data)
			{
				jsondata = JSON.parse(data);

				if(jsondata.status == '1')
				{
					alert("user added");
				}

				else
				{
					alert("something wrong");
				}


			}

		});
	});

		

		alert
</script>



</body>
</html>