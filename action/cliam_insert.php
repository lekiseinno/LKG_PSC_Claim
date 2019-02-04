<?php 
	include 'connect.php';

	$cliam_DocNo='';
	$claim_date=$_REQUEST['claim_date'];
	$claim_customer_name=$_REQUEST['claim_customer_name'];
	$claim_channel_id=$_REQUEST['claim_channel_id'];
	$lastupdate=date('Y-m-d H:i:s');
	$mail=$_REQUEST['email'];
	$claim_status=1;
	$company_id=$_REQUEST['company_id'];
	$customer_requirement_id=$_REQUEST['customer_requirement_id'];
	$qa_comment=$_REQUEST['qa_comment'];
	$datecreate=date('Y-m-d H:i:s');



	$sql="INSERT INTO Claim_Job (cliam_DocNo,claim_date,claim_customer_name,claim_channel_id,lastupdate,mail,claim_status,company_id,customer_requirement_id,qa_comment,datecreate,claim_status)
	VALUES('".$cliam_DocNo."','".$claim_date."','".$claim_customer_name."','".$claim_channel_id."','".$lastupdate."','".$mail."','".$claim_status."','".$company_id."','".$customer_requirement_id."','".$qa_comment."','".$datecreate."','0')";

	$query = sqlsrv_query( $con, $sql ) or die($sql);

    #header('location:../banner-list.php');


    foreach($_REQUEST['item_code'] as $key => $value) {
    		$image_defect='';
    		if($_FILES["image_defect"]["name"][$key]!=''){
	    		$file = strtolower($_FILES["image_defect"]["name"][$key]);
		        $sizefile = $_FILES["image_defect"]["size"][$key];
		        $type= strrchr($file,".");
		        $directory = "../img/image_defect";
		        $image_defect = date("YmdHis").$type;
		        move_uploaded_file($_FILES["image_defect"]["tmp_name"][$key],$directory.'/'.$_FILES["image_defect"]["name"][$key]);
		        rename($directory.'/'.$_FILES["image_defect"]["name"][$key],$directory.'/'.$image_defect);
		        chmod($directory.'/'.$image_defect,0777);
		    }

    	$sql="INSERT INTO Claim_Job_detail (cliam_DocNo,item_code,product_name,qty_salses,qty_defect,warranty,problem_description,invoice_so,image_defect)
	VALUES('".$cliam_DocNo."','".$_REQUEST['item_code'][$key]."','".$_REQUEST['product_name'][$key]."','".$_REQUEST['qty_salses'][$key]."','".$_REQUEST['qty_defect'][$key]."','".$_REQUEST['warranty'][$key]."','".$_REQUEST['problem_description'][$key]."','".$_REQUEST['invoice_so'][$key]."','".$image_defect."')";

		$query = sqlsrv_query( $con, $sql ) or die($sql);
    }


    header('location:../index.php');

 ?> 