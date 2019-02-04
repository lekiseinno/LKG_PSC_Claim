<?php 
	include '../../action/connect.php';

		$company_name=$_POST['company_name'];
		$company_name_EN=$_POST['company_name_EN'];
		$company_name_short=$_POST['company_name_short'];



        $sql="INSERT INTO company(company_name,company_name_EN,company_name_short,company_close) VALUES('$company_name','$company_name_EN','$company_name_short','0')";
	    $query = sqlsrv_query( $con, $sql ) or die($sql);

        header('location:../company.php');
 ?>