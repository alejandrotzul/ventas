<?php
$dalTabledetallefactura = array();
$dalTabledetallefactura["ventas_idventas"] = array("type"=>3,"varname"=>"ventas_idventas");
$dalTabledetallefactura["facturas_numeroFactura"] = array("type"=>3,"varname"=>"facturas_numeroFactura");
$dalTabledetallefactura["cantidad"] = array("type"=>3,"varname"=>"cantidad");
$dalTabledetallefactura["precio"] = array("type"=>14,"varname"=>"precio");
	$dalTabledetallefactura["ventas_idventas"]["key"]=true;
	$dalTabledetallefactura["facturas_numeroFactura"]["key"]=true;

$dal_info["mydb_at_localhost__detallefactura"] = &$dalTabledetallefactura;
?>