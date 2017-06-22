<?php
$dalTablecliente = array();
$dalTablecliente["idcliente"] = array("type"=>3,"varname"=>"idcliente");
$dalTablecliente["nit"] = array("type"=>200,"varname"=>"nit");
$dalTablecliente["nombres"] = array("type"=>200,"varname"=>"nombres");
$dalTablecliente["apellidos"] = array("type"=>200,"varname"=>"apellidos");
$dalTablecliente["direccion"] = array("type"=>200,"varname"=>"direccion");
$dalTablecliente["email"] = array("type"=>200,"varname"=>"email");
$dalTablecliente["telefono"] = array("type"=>200,"varname"=>"telefono");
	$dalTablecliente["idcliente"]["key"]=true;

$dal_info["mydb_at_localhost__cliente"] = &$dalTablecliente;
?>