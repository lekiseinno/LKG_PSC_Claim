<?php 
	include '../../action/connect.php';	

			$customer_requirement_id=$_POST['customer_requirement_id'];
			$sql="SELECT customer_requirement_close FROM customer_requirement WHERE customer_requirement_id='$customer_requirement_id'";
			$query = sqlsrv_query( $con, $sql ) or die($sql);
			$row = sqlsrv_fetch_array($query , SQLSRV_FETCH_ASSOC);
			if($row['customer_requirement_close']==0){
				$customer_requirement_close=1;
			}else{
				$customer_requirement_close=0;
			}

	        $sql="UPDATE customer_requirement SET customer_requirement_close='$customer_requirement_close' WHERE customer_requirement_id='$customer_requirement_id';
	        ";
	        $query = sqlsrv_query( $con, $sql ) or die($sql);
	        
	        echo $customer_requirement_close;
 ?>