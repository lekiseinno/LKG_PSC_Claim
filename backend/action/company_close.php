<?php 
	include '../../action/connect.php';	

			$company_id=$_POST['company_id'];
			$sql="SELECT company_close FROM company WHERE company_id='$company_id'";
			$query = sqlsrv_query( $con, $sql ) or die($sql);
			$row = sqlsrv_fetch_array($query , SQLSRV_FETCH_ASSOC);
			if($row['company_close']==0){
				$company_close=1;
			}else{
				$company_close=0;
			}

	        $sql="UPDATE company SET company_close='$company_close' WHERE company_id='$company_id';
	        ";
	        $query = sqlsrv_query( $con, $sql ) or die($sql);
	        
	        echo $company_close;
 ?>