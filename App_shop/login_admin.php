
<?php	
	include_once('Admin/model/database_shop.php');
	include_once('Admin/model/m_customer.php');
	$customers = get_customers();
	$email=filter_input(INPUT_POST,'email');
	$password=filter_input(INPUT_POST,'password');
	$login_admin = check_admin($email,$password);
/*	$login_customer = check_login($email,$password);
*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sky Center</title>
	<link rel="stylesheet" type="text/css" href="SkyCentercss.css">
<link rel="shortcut icon" href="img/logo_Skycenter.png">
</head>
<body>
	
<div class="divbody" style="min-width:800px height: 870px;">
	<div class="divbody" style="background-color: #a7e1ef;height: 110px;">
		<div style=" float: left;">
			<img src="img/logo_Skycenter.png" style="width: 50%;padding-top: 7%; padding-left: 2%">
		</div>
		<div style="color: white; float: right; margin-right: 2%">
<table style="padding-top: 5px;">	
	<form action="" method="POST" role="form">	
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" name="email" class="form-control" id="" placeholder="Input field">
				<label for="">Password</label>
				<input type="text" name="password" class="form-control" id="" placeholder="Input field">
				<button id="btn2" type="submit" name="action" value="login_admin" class="btn">Login admin</button>
			</div>
	</form>
</table>
		</div>
	</div>
	<div class="divbody" style="height:150px;">
		<div style=" margin-top: 50px;">
			<ul>
				<li><a href="">Tiếng Việt</a></li>
				<li><a href=""> English</a></li>
				<li><a href=""> 中文(台灣)</a></li>
				<li><a href=""> ภาษาไทย</a></li>
			</ul>
		</div>
	</div>
</div>
<script language="javascript">

            document.getElementById("btn2").onclick = function () {
                document.getElementById("content").style.display = 'block';
            };

        </script>
</body>
</html>
</body>
</html>