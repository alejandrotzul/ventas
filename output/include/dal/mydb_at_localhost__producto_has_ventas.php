<?php
$dalTableproducto_has_ventas = array();
$dalTableproducto_has_ventas["producto_idproducto"] = array("type"=>3,"varname"=>"producto_idproducto");
$dalTableproducto_has_ventas["ventas_idventas"] = array("type"=>3,"varname"=>"ventas_idventas");
	$dalTableproducto_has_ventas["producto_idproducto"]["key"]=true;
	$dalTableproducto_has_ventas["ventas_idventas"]["key"]=true;

$dal_info["mydb_at_localhost__producto_has_ventas"] = &$dalTableproducto_has_ventas;
?>