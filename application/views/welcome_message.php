<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Shaco</title>

	<style type="text/css">
	
	html {
		font-family:"Agency FB";
		background:#EEEEEE;
	}
	
	h1 {
		text-align:center;
		color:#999999;
		font-size:40px;
	}
	#login_box {
		width:240px;
		margin:auto;
		clear:both;
		display:block;
		
	}
	
	#login_box form {
		background:#999999;
		text-align:center;
		font-size:25px;
		color:#EEEEEE;
		padding:20px;
		width:220px;
	}
	
	#login_box input[type="text"] {
		display:block;
		margin:auto;
		clear:both;
		width:200px;
		margin-bottom:10px;
		height:30px;
		font-size:25px;
		text-align:center;
	} 
	
	#login_box input[type=submit] {
		display:block;
		margin:auto;
		clear:both;
		background:#EEEEEE;
		border:none;
		cursor:pointer;
		font-family:"Agency FB";
		width:100px;
		height;35px;
		font-size:30px;
		color:#999999;
	}
	
	#terms {
		text-align:center;
		font-size:20px;
		color:#999999;
	}	
	#terms_body {
		display:none;
		font-size:14px;
		color:#666666;
	}	
	</style>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>
		$( document ).ready(function() {
			$('#terms').click(function(){
				$("#terms_body").slideToggle("slow",function(){
					var status;
					$(this).is(':visible') ? status="&#9650;" : status="&#9660;";
					$("#terms_title").html(status + ' Terms and conditions');
				});
			});
		});
		//comments line 2
	</script>
</head>
<body>

<div id="container">
	<h1>Login screen</h1>
	<div id="login_box">
		<form name="input" action="" method="get">
			<label>Username</label><input type="text" name="user">
			<label>Password</label><input type="text" name="password">
			<input type="submit" value="Submit">
		</form>
		<div id="terms">
			<div id="terms_title">&#9660; Terms and conditions</div>
			<div id="terms_body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</div>	
		</div>
	</div>
</div>


</body>
</html>