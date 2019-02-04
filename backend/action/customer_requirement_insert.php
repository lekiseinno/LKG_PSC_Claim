<?php 
	include '../../action/connect.php';



		$customer_requirement_text=$_POST['customer_requirement_text'];




        $sql="INSERT INTO customer_requirement(customer_requirement_text,customer_requirement_close) VALUES('$customer_requirement_text','0')";
	    $query = sqlsrv_query( $con, $sql ) or die($sql);

        header('location:../customer_requirement.php');
 ?>