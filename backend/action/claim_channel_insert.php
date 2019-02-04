<?php 
	include '../../action/connect.php';



		$claim_channel_name=$_POST['claim_channel_name'];




        $sql="INSERT INTO claim_channel(claim_channel_name,claim_channel_close) VALUES('$claim_channel_name','0')";
	    $query = sqlsrv_query( $con, $sql ) or die($sql);

        header('location:../claim_channel.php');
 ?>