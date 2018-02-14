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
		<h2 class="text-center">User Login</h2>
  <div class="form-group">
    <label class="control-label col-sm-2" for="username">Username: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="uname" placeholder="Enter Username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password: </label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="pass" placeholder="Enter password">
    </div>
  </div>

  
 
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10 text-center">
      <button class="userlogin_btn" id="user_login">Login</button>
    </div>
  </div>

  <div>
    <span class="success text-center" style="color: green;display: none;font-size: 24px">Login Success</span>
    <span class="fail text-center" style="color: red;display: none;font-size: 24px";>Login Failed</span>
  </div>

</div>
<div class="col-md-4"></div>

<script type="text/javascript">
  $("#user_login").on("click",function()
  {
    var uname = $("#uname").val();
    var pass = $("#pass").val();

    $.ajax({

      url:"api/userlogin_api.php",
      data:{uname:uname,pass:pass},
      type:"post",

      success:function(data)
      {
        jsondata = JSON.parse(data);

        if(jsondata.status == '1')
        {
          $(".success").show();
          $(".fail").hide();

          setTimeout(function(){
          window.location.href = "user_dashboard.php?id="+uname+"";
            }, 1000);
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