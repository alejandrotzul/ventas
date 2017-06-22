<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafacturas = array();
	$tdatafacturas[".truncateText"] = true;
	$tdatafacturas[".NumberOfChars"] = 80;
	$tdatafacturas[".ShortName"] = "facturas";
	$tdatafacturas[".OwnerID"] = "";
	$tdatafacturas[".OriginalTable"] = "facturas";

//	field labels
$fieldLabelsfacturas = array();
$fieldToolTipsfacturas = array();
$pageTitlesfacturas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsfacturas["Spanish"] = array();
	$fieldToolTipsfacturas["Spanish"] = array();
	$pageTitlesfacturas["Spanish"] = array();
	$fieldLabelsfacturas["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipsfacturas["Spanish"]["fecha"] = "";
	$fieldLabelsfacturas["Spanish"]["cantidad"] = "Cantidad";
	$fieldToolTipsfacturas["Spanish"]["cantidad"] = "";
	$fieldLabelsfacturas["Spanish"]["precio"] = "Precio";
	$fieldToolTipsfacturas["Spanish"]["precio"] = "";
	if (count($fieldToolTipsfacturas["Spanish"]))
		$tdatafacturas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfacturas[""] = array();
	$fieldToolTipsfacturas[""] = array();
	$pageTitlesfacturas[""] = array();
	if (count($fieldToolTipsfacturas[""]))
		$tdatafacturas[".isUseToolTips"] = true;
}


	$tdatafacturas[".NCSearch"] = true;



$tdatafacturas[".shortTableName"] = "facturas";
$tdatafacturas[".nSecOptions"] = 0;
$tdatafacturas[".recsPerRowPrint"] = 1;
$tdatafacturas[".mainTableOwnerID"] = "";
$tdatafacturas[".moveNext"] = 1;
$tdatafacturas[".entityType"] = 0;

$tdatafacturas[".strOriginalTableName"] = "facturas";

	



$tdatafacturas[".showAddInPopup"] = false;

$tdatafacturas[".showEditInPopup"] = false;

$tdatafacturas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafacturas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafacturas[".fieldsForRegister"] = array();

$tdatafacturas[".listAjax"] = false;

	$tdatafacturas[".audit"] = false;

	$tdatafacturas[".locking"] = false;


$tdatafacturas[".add"] = true;
$tdatafacturas[".afterAddAction"] = 1;
$tdatafacturas[".closePopupAfterAdd"] = 1;
$tdatafacturas[".afterAddActionDetTable"] = "";

$tdatafacturas[".list"] = true;


$tdatafacturas[".import"] = true;

$tdatafacturas[".exportTo"] = true;

$tdatafacturas[".printFriendly"] = true;


$tdatafacturas[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafacturas[".searchSaving"] = false;
//

$tdatafacturas[".showSearchPanel"] = true;
		$tdatafacturas[".flexibleSearch"] = true;

$tdatafacturas[".isUseAjaxSuggest"] = true;

$tdatafacturas[".rowHighlite"] = true;



$tdatafacturas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafacturas[".isUseTimeForSearch"] = false;



$tdatafacturas[".badgeColor"] = "008B8B";


$tdatafacturas[".allSearchFields"] = array();
$tdatafacturas[".filterFields"] = array();
$tdatafacturas[".requiredSearchFields"] = array();

$tdatafacturas[".allSearchFields"][] = "fecha";
	$tdatafacturas[".allSearchFields"][] = "cantidad";
	$tdatafacturas[".allSearchFields"][] = "precio";
	

$tdatafacturas[".googleLikeFields"] = array();
$tdatafacturas[".googleLikeFields"][] = "fecha";
$tdatafacturas[".googleLikeFields"][] = "cantidad";
$tdatafacturas[".googleLikeFields"][] = "precio";


$tdatafacturas[".advSearchFields"] = array();
$tdatafacturas[".advSearchFields"][] = "fecha";
$tdatafacturas[".advSearchFields"][] = "cantidad";
$tdatafacturas[".advSearchFields"][] = "precio";

$tdatafacturas[".tableType"] = "list";

$tdatafacturas[".printerPageOrientation"] = 0;
$tdatafacturas[".nPrinterPageScale"] = 100;

$tdatafacturas[".nPrinterSplitRecords"] = 40;

$tdatafacturas[".nPrinterPDFSplitRecords"] = 40;



$tdatafacturas[".geocodingEnabled"] = false;





$tdatafacturas[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafacturas[".pageSize"] = 20;

$tdatafacturas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafacturas[".strOrderBy"] = $tstrOrderBy;

$tdatafacturas[".orderindexes"] = array();

$tdatafacturas[".sqlHead"] = "SELECT facturas.fecha,  detallefactura.cantidad,  detallefactura.precio";
$tdatafacturas[".sqlFrom"] = "FROM facturas,detallefactura";
$tdatafacturas[".sqlWhereExpr"] = "";
$tdatafacturas[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafacturas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafacturas[".arrGroupsPerPage"] = $arrGPP;

$tdatafacturas[".highlightSearchResults"] = true;

$tableKeysfacturas = array();
$tdatafacturas[".Keys"] = $tableKeysfacturas;

$tdatafacturas[".listFields"] = array();
$tdatafacturas[".listFields"][] = "fecha";
$tdatafacturas[".listFields"][] = "cantidad";
$tdatafacturas[".listFields"][] = "precio";

$tdatafacturas[".hideMobileList"] = array();


$tdatafacturas[".viewFields"] = array();
$tdatafacturas[".viewFields"][] = "fecha";
$tdatafacturas[".viewFields"][] = "cantidad";
$tdatafacturas[".viewFields"][] = "precio";

$tdatafacturas[".addFields"] = array();
$tdatafacturas[".addFields"][] = "fecha";

$tdatafacturas[".masterListFields"] = array();
$tdatafacturas[".masterListFields"][] = "fecha";
$tdatafacturas[".masterListFields"][] = "cantidad";
$tdatafacturas[".masterListFields"][] = "precio";

$tdatafacturas[".inlineAddFields"] = array();
$tdatafacturas[".inlineAddFields"][] = "fecha";

$tdatafacturas[".editFields"] = array();
$tdatafacturas[".editFields"][] = "fecha";

$tdatafacturas[".inlineEditFields"] = array();
$tdatafacturas[".inlineEditFields"][] = "fecha";

$tdatafacturas[".exportFields"] = array();
$tdatafacturas[".exportFields"][] = "fecha";
$tdatafacturas[".exportFields"][] = "cantidad";
$tdatafacturas[".exportFields"][] = "precio";

$tdatafacturas[".importFields"] = array();
$tdatafacturas[".importFields"][] = "fecha";
$tdatafacturas[".importFields"][] = "cantidad";
$tdatafacturas[".importFields"][] = "precio";

$tdatafacturas[".printFields"] = array();
$tdatafacturas[".printFields"][] = "fecha";
$tdatafacturas[".printFields"][] = "cantidad";
$tdatafacturas[".printFields"][] = "precio";

//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "facturas";
	$fdata["Label"] = GetFieldLabel("facturas","fecha");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "facturas.fecha";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatafacturas["fecha"] = $fdata;
//	cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cantidad";
	$fdata["GoodName"] = "cantidad";
	$fdata["ownerTable"] = "detallefactura";
	$fdata["Label"] = GetFieldLabel("facturas","cantidad");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cantidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "detallefactura.cantidad";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafacturas["cantidad"] = $fdata;
//	precio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "precio";
	$fdata["GoodName"] = "precio";
	$fdata["ownerTable"] = "detallefactura";
	$fdata["Label"] = GetFieldLabel("facturas","precio");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "precio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "detallefactura.precio";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafacturas["precio"] = $fdata;


$tables_data["facturas"]=&$tdatafacturas;
$field_labels["facturas"] = &$fieldLabelsfacturas;
$fieldToolTips["facturas"] = &$fieldToolTipsfacturas;
$page_titles["facturas"] = &$pageTitlesfacturas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["facturas"] = array();
//	detallefactura
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="detallefactura";
		$detailsParam["dOriginalTable"] = "detallefactura";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "detallefactura";
	$detailsParam["dCaptionTable"] = GetTableCaption("detallefactura");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["facturas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["facturas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["facturas"][$dIndex]["masterKeys"][]="numeroFactura";

				$detailsTablesData["facturas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["facturas"][$dIndex]["detailKeys"][]="facturas_numeroFactura";

// tables which are master tables for current table (detail)
$masterTablesData["facturas"] = array();


	
				$strOriginalDetailsTable="cliente";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cliente";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cliente";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["facturas"][0] = $masterParams;
				$masterTablesData["facturas"][0]["masterKeys"] = array();
	$masterTablesData["facturas"][0]["masterKeys"][]="idcliente";
				$masterTablesData["facturas"][0]["detailKeys"] = array();
	$masterTablesData["facturas"][0]["detailKeys"][]="cliente_idcliente";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_facturas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "facturas.fecha,  detallefactura.cantidad,  detallefactura.precio";
$proto0["m_strFrom"] = "FROM facturas,detallefactura";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "facturas",
	"m_srcTableName" => "facturas"
));

$proto6["m_sql"] = "facturas.fecha";
$proto6["m_srcTableName"] = "facturas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad",
	"m_strTable" => "detallefactura",
	"m_srcTableName" => "facturas"
));

$proto8["m_sql"] = "detallefactura.cantidad";
$proto8["m_srcTableName"] = "facturas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "precio",
	"m_strTable" => "detallefactura",
	"m_srcTableName" => "facturas"
));

$proto10["m_sql"] = "detallefactura.precio";
$proto10["m_srcTableName"] = "facturas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "facturas";
$proto13["m_srcTableName"] = "facturas";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "numeroFactura";
$proto13["m_columns"][] = "fecha";
$proto13["m_columns"][] = "cliente_idcliente";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "facturas";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "facturas";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
												$proto16=array();
$proto16["m_link"] = "SQLL_CROSSJOIN";
			$proto17=array();
$proto17["m_strName"] = "detallefactura";
$proto17["m_srcTableName"] = "facturas";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ventas_idventas";
$proto17["m_columns"][] = "facturas_numeroFactura";
$proto17["m_columns"][] = "cantidad";
$proto17["m_columns"][] = "precio";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "detallefactura";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "facturas";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="facturas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_facturas = createSqlQuery_facturas();


	
		;

			

$tdatafacturas[".sqlquery"] = $queryData_facturas;

$tableEvents["facturas"] = new eventsBase;
$tdatafacturas[".hasEvents"] = false;

?>