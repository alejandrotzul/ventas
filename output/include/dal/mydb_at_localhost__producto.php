<?php
$dalTableproducto = array();
$dalTableproducto["idproducto"] = array("type"=>3,"varname"=>"idproducto");
$dalTableproducto["nombreProducto"] = array("type"=>200,"varname"=>"nombreProducto");
$dalTableproducto["precio"] = array("type"=>14,"varname"=>"precio");
$dalTableproducto["cantidad"] = array("type"=>3,"varname"=>"cantidad");
	$dalTableproducto["idproducto"]["key"]=true;

$dal_info["mydb_at_localhost__producto"] = &$dalTableproducto;
?>