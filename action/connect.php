<?php
//conect ERP    
//conect ERP    
$ip = "10.10.2.31";
$con = array( "Database"=>"LKG_PSC_Claim", "UID"=>"innovation", "PWD"=>"Inno12345","MultipleActiveResultSets"=>true,"CharacterSet"  => 'UTF-8');
$con = sqlsrv_connect( $ip, $con) or die( print_r( sqlsrv_errors(), true));
if( $con === false ) {
      die('10.10.2.31 : '.print_r( sqlsrv_errors(), true));
}

 
 