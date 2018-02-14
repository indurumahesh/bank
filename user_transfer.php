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

<div class="col-md-4"></div>
<div class="col-md-4">
	<!-- <form class="form-horizontal"> -->
		<h2 class="text-center">Transfer money</h2>
  <div class="form-group">
    <label class="control-label col-sm-2" for="username">From account: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="from_acc" value="<?php echo $_GET['id'] ?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">To account: </label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="to_acc" placeholder="Reciever account">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Amount: </label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="money" placeholder="Enter amount">
    </div>
  </div>

  
 
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10 text-center">
      <button class="userlogin_btn" id="send_money">Send money</button>
    </div>
  </div>

  <div>
  	<span class="success text-center" style="color: green;display: none;font-size: 24px">Transfered successfully</span>
  	<span class="fail text-center" style="color: red;display: none;font-size: 24px";>Unable to transfer money</span>
  	<span class="insuf text-center" style="color: red;display: none;font-size: 24px";>Insufficient funds</span>
  </div>

</div>
<div class="col-md-4"></div>

<script type="text/javascript">
	$("#send_money").on("click",function()
	{


		var from_acc = $("#from_acc").val();
		var to_acc = $("#to_acc").val();
		var money= $("#money").val();
		
		$.ajax({

			url:"api/transfer_api.php",
			data:{from_acc:from_acc,to_acc:to_acc,money:money},
			type:"post",

			success:function(data)
			{
				jsondata = JSON.parse(data);

				if(jsondata.status == '1')
				{
					$(".success").show();
					$(".fail").hide();

					
				}

				else if(jsondata.status == '2')
				{
					$(".success").hide();
					$(".fail").show();
					$(".fail").text('Insufficient');

					
				}

				else
				{
					$(".success").hide();
					$(".fail").show();
				}


			}

		});
	});
</script>



</body>

</html>