<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php include 'bootstrap.php' ?>
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
		<table class="table table-bordered">
			<tr>
				<td>ชื่อผู้ร้องเรียน</td>
				<td><input type="text" name="claim_customer_name"></td>
			</tr>
			<tr>
				<td>อีเมล์</td>
				<td><input type="email" name="claim_mail"></td>
			</tr>
			<tr>
				<td>ช่องทางการร้องเรียน</td>
				<td>
					<select name="claim_chanel" id="">
						<option value="email">email</option>
						<option value="telephone">telephone</option>
						<option value="facebook">facebook</option>
						<option value="line">line</option>
					</select>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>