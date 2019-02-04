<?php 
	include '../../action/connect.php';	

			$claim_channel_id=$_POST['claim_channel_id'];
			$sql="SELECT claim_channel_close FROM claim_channel WHERE claim_channel_id='$claim_channel_id'";
			$query = sqlsrv_query( $con, $sql ) or die($sql);
			$row = sqlsrv_fetch_array($query , SQLSRV_FETCH_ASSOC);
			if($row['claim_channel_close']==0){
				$claim_channel_close=1;
			}else{
				$claim_channel_close=0;
			}

	        $sql="UPDATE claim_channel SET claim_channel_close='$claim_channel_close' WHERE claim_channel_id='$claim_channel_id';
	        ";
	        $query = sqlsrv_query( $con, $sql ) or die($sql);
	        
	        echo $claim_channel_close;
 ?>