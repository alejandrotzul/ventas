<?php
$dalTableventas = array();
$dalTableventas["idventas"] = array("type"=>3,"varname"=>"idventas");
$dalTableventas["producto"] = array("type"=>200,"varname"=>"producto");
$dalTableventas["cantidad"] = array("type"=>3,"varname"=>"cantidad");
$dalTableventas["fechaVenta"] = array("type"=>7,"varname"=>"fechaVenta");
	$dalTableventas["idventas"]["key"]=true;

$dal_info["mydb_at_localhost__ventas"] = &$dalTableventas;
?>