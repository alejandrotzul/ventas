<?php
$dalTablefacturas = array();
$dalTablefacturas["numeroFactura"] = array("type"=>3,"varname"=>"numeroFactura");
$dalTablefacturas["fecha"] = array("type"=>7,"varname"=>"fecha");
$dalTablefacturas["cliente_idcliente"] = array("type"=>3,"varname"=>"cliente_idcliente");
	$dalTablefacturas["numeroFactura"]["key"]=true;
	$dalTablefacturas["cliente_idcliente"]["key"]=true;

$dal_info["mydb_at_localhost__facturas"] = &$dalTablefacturas;
?>