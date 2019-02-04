<?php include 'action/connect.php' ?>
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
<form action="action/cliam_insert.php" method="post" enctype="multipart/form-data">
	<div class="container-fluid" style="padding: 30px">
		<h4 align="center">ฟอร์มรับข้อร้องเรียนแจ้งปัญหาและเคลมสินค้า</h4>
		<div class="row">
			<div class="col-lg-6">
				<table class="table table-bordered">
					<tr>
						<td>ชื่อผู้ร้องเรียน</td>
						<td><input class="form-control" type="text" name="claim_customer_name"></td>
					</tr>
					<tr>
						<td>อีเมล์</td>
						<td><input class="form-control" type="email" name="email"></td>
					</tr>
					<tr>
						<td>ช่องทางการร้องเรียน</td>
						<td>
							<select name="claim_channel_id" id="" class="form-control">
						<?php 
						  $sql="SELECT * FROM claim_channel";
						  $query = sqlsrv_query( $con, $sql ) or die($sql);
						  while ($row = sqlsrv_fetch_array($query , SQLSRV_FETCH_ASSOC)) {
						?>
								<option value=<?=$row['claim_channel_id']?>><?=$row['claim_channel_name']?></option>
						<?php } ?>
							</select>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-lg-6">
				<table class="table table-bordered">
					<tr>
						<td>บริษัท</td>
						<td>
							<select name="company_id" id="" class="form-control">
						<?php 
						  $sql="SELECT * FROM company";
						  $query = sqlsrv_query( $con, $sql ) or die($sql);
						  while ($row = sqlsrv_fetch_array($query , SQLSRV_FETCH_ASSOC)) {
						?>
								<option value=<?=$row['company_id']?>><?=$row['company_name_EN']?></option>
						<?php } ?>
							</select>
						</td>
					</tr>
					<tr>
						<td>วันที่</td>
						<td><input class="form-control" type="date" name="claim_date" value="<?=date('Y-m-d')?>"></td>
					</tr>
				</table>
			</div>
		</div>
		
		
		<input class="form-control" type="hidden" id="count_tr" value="1">

		<table class="table table-bordered">
			<caption style="caption-side: top;">
				รายละเอียดสินค้า  
				<button type="button" class="btn btn-primary" onclick="add_tr(count_tr.value)"><i class="fas fa-plus-circle"></i> เพิ่ม</button>
			</caption>
			<tr class="tr-header">
				<td>รหัสสินค้า</td>
				<td>ชื่อสินค้า</td>
				<td>Invoice/SO</td>
				<td>จำนวนที่ขาย</td>
				<td>จำนวนของเสีย</td>
				<td>รับประกัน(ปี)</td>
				<td>ลักษณะปัญหา</td>
				<td>รูปภาพ</td>
			</tr>
			<tr class="tr-body-1">
				<td><input class="form-control" type="text" name="item_code[]"></td>
				<td><input class="form-control" type="text" name="product_name[]"></td>
				<td><input class="form-control" type="text" name="invoice_so[]"></td>
				<td><input class="form-control" type="text" name="qty_salses[]"></td>
				<td><input class="form-control" type="text" name="qty_defect[]"></td>
				<td><input class="form-control" type="text" name="warranty[]"></td>
				<td><textarea class="form-control" name="problem_description[]" id="" cols="30" rows="1"></textarea></td>
				<td><input class="form-control" type="file" name="image_defect[]"></td>
			</tr>
			<tr class="tr-body-0" style="display: none"></tr>
		</table>
		
		<div class="row">
			<div class="col-lg-6">
				<table class="table table-bordered">
					<tr>
						<td>ความประสงค์ของลูกค้า</td>
						<td>
							<select name="customer_requirement_id" id="" class="form-control">
						<?php 
						  $sql="SELECT * FROM customer_requirement";
						  $query = sqlsrv_query( $con, $sql ) or die($sql);
						  while ($row = sqlsrv_fetch_array($query , SQLSRV_FETCH_ASSOC)) {
						?>
								<option value=<?=$row['customer_requirement_id']?>><?=$row['customer_requirement_text']?></option>
						<?php } ?>
							</select>
						</td>
					</tr>
					<tr>
						<td>ความเห็นจากฝ่ายประกันคุณภาพ</td>
						<td><textarea class="form-control" name="qa_comment" id="" cols="30" rows="3"></textarea></td>
					</tr>

				</table>
			</div>
		</div>
	</div>
	<div align="center"><button class="btn btn-lg btn-success"><i class="fas fa-check-circle"></i> ส่ง</button></div>
</form>
</body>
</html>