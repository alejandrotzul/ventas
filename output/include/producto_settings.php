<?php
require_once(getabspath("classes/cipherer.php"));




$tdataproducto = array();
	$tdataproducto[".truncateText"] = true;
	$tdataproducto[".NumberOfChars"] = 80;
	$tdataproducto[".ShortName"] = "producto";
	$tdataproducto[".OwnerID"] = "";
	$tdataproducto[".OriginalTable"] = "producto";

//	field labels
$fieldLabelsproducto = array();
$fieldToolTipsproducto = array();
$pageTitlesproducto = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsproducto["Spanish"] = array();
	$fieldToolTipsproducto["Spanish"] = array();
	$pageTitlesproducto["Spanish"] = array();
	$fieldLabelsproducto["Spanish"]["nombreProducto"] = "Nombre Producto";
	$fieldToolTipsproducto["Spanish"]["nombreProducto"] = "";
	$fieldLabelsproducto["Spanish"]["precio"] = "Precio";
	$fieldToolTipsproducto["Spanish"]["precio"] = "";
	$fieldLabelsproducto["Spanish"]["cantidad"] = "Cantidad";
	$fieldToolTipsproducto["Spanish"]["cantidad"] = "";
	if (count($fieldToolTipsproducto["Spanish"]))
		$tdataproducto[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsproducto[""] = array();
	$fieldToolTipsproducto[""] = array();
	$pageTitlesproducto[""] = array();
	if (count($fieldToolTipsproducto[""]))
		$tdataproducto[".isUseToolTips"] = true;
}


	$tdataproducto[".NCSearch"] = true;



$tdataproducto[".shortTableName"] = "producto";
$tdataproducto[".nSecOptions"] = 0;
$tdataproducto[".recsPerRowPrint"] = 1;
$tdataproducto[".mainTableOwnerID"] = "";
$tdataproducto[".moveNext"] = 1;
$tdataproducto[".entityType"] = 0;

$tdataproducto[".strOriginalTableName"] = "producto";

	



$tdataproducto[".showAddInPopup"] = false;

$tdataproducto[".showEditInPopup"] = false;

$tdataproducto[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataproducto[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataproducto[".fieldsForRegister"] = array();

$tdataproducto[".listAjax"] = false;

	$tdataproducto[".audit"] = false;

	$tdataproducto[".locking"] = false;


$tdataproducto[".add"] = true;
$tdataproducto[".afterAddAction"] = 1;
$tdataproducto[".closePopupAfterAdd"] = 1;
$tdataproducto[".afterAddActionDetTable"] = "";

$tdataproducto[".list"] = true;


$tdataproducto[".import"] = true;

$tdataproducto[".exportTo"] = true;

$tdataproducto[".printFriendly"] = true;


$tdataproducto[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataproducto[".searchSaving"] = false;
//

$tdataproducto[".showSearchPanel"] = true;
		$tdataproducto[".flexibleSearch"] = true;

$tdataproducto[".isUseAjaxSuggest"] = true;

$tdataproducto[".rowHighlite"] = true;



$tdataproducto[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproducto[".isUseTimeForSearch"] = false;





$tdataproducto[".allSearchFields"] = array();
$tdataproducto[".filterFields"] = array();
$tdataproducto[".requiredSearchFields"] = array();

$tdataproducto[".allSearchFields"][] = "nombreProducto";
	$tdataproducto[".allSearchFields"][] = "precio";
	$tdataproducto[".allSearchFields"][] = "cantidad";
	

$tdataproducto[".googleLikeFields"] = array();
$tdataproducto[".googleLikeFields"][] = "nombreProducto";
$tdataproducto[".googleLikeFields"][] = "precio";
$tdataproducto[".googleLikeFields"][] = "cantidad";


$tdataproducto[".advSearchFields"] = array();
$tdataproducto[".advSearchFields"][] = "nombreProducto";
$tdataproducto[".advSearchFields"][] = "precio";
$tdataproducto[".advSearchFields"][] = "cantidad";

$tdataproducto[".tableType"] = "list";

$tdataproducto[".printerPageOrientation"] = 0;
$tdataproducto[".nPrinterPageScale"] = 100;

$tdataproducto[".nPrinterSplitRecords"] = 40;

$tdataproducto[".nPrinterPDFSplitRecords"] = 40;



$tdataproducto[".geocodingEnabled"] = false;





$tdataproducto[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataproducto[".pageSize"] = 20;

$tdataproducto[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproducto[".strOrderBy"] = $tstrOrderBy;

$tdataproducto[".orderindexes"] = array();

$tdataproducto[".sqlHead"] = "SELECT nombreProducto,  precio,  cantidad";
$tdataproducto[".sqlFrom"] = "FROM producto";
$tdataproducto[".sqlWhereExpr"] = "";
$tdataproducto[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproducto[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproducto[".arrGroupsPerPage"] = $arrGPP;

$tdataproducto[".highlightSearchResults"] = true;

$tableKeysproducto = array();
$tdataproducto[".Keys"] = $tableKeysproducto;

$tdataproducto[".listFields"] = array();
$tdataproducto[".listFields"][] = "nombreProducto";
$tdataproducto[".listFields"][] = "precio";
$tdataproducto[".listFields"][] = "cantidad";

$tdataproducto[".hideMobileList"] = array();


$tdataproducto[".viewFields"] = array();
$tdataproducto[".viewFields"][] = "nombreProducto";
$tdataproducto[".viewFields"][] = "precio";
$tdataproducto[".viewFields"][] = "cantidad";

$tdataproducto[".addFields"] = array();
$tdataproducto[".addFields"][] = "nombreProducto";
$tdataproducto[".addFields"][] = "precio";
$tdataproducto[".addFields"][] = "cantidad";

$tdataproducto[".masterListFields"] = array();
$tdataproducto[".masterListFields"][] = "nombreProducto";
$tdataproducto[".masterListFields"][] = "precio";
$tdataproducto[".masterListFields"][] = "cantidad";

$tdataproducto[".inlineAddFields"] = array();

$tdataproducto[".editFields"] = array();
$tdataproducto[".editFields"][] = "nombreProducto";
$tdataproducto[".editFields"][] = "precio";
$tdataproducto[".editFields"][] = "cantidad";

$tdataproducto[".inlineEditFields"] = array();

$tdataproducto[".exportFields"] = array();
$tdataproducto[".exportFields"][] = "nombreProducto";
$tdataproducto[".exportFields"][] = "precio";
$tdataproducto[".exportFields"][] = "cantidad";

$tdataproducto[".importFields"] = array();
$tdataproducto[".importFields"][] = "nombreProducto";
$tdataproducto[".importFields"][] = "precio";
$tdataproducto[".importFields"][] = "cantidad";

$tdataproducto[".printFields"] = array();
$tdataproducto[".printFields"][] = "nombreProducto";
$tdataproducto[".printFields"][] = "precio";
$tdataproducto[".printFields"][] = "cantidad";

//	nombreProducto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nombreProducto";
	$fdata["GoodName"] = "nombreProducto";
	$fdata["ownerTable"] = "producto";
	$fdata["Label"] = GetFieldLabel("producto","nombreProducto");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nombreProducto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombreProducto";

	
	
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

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=30";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataproducto["nombreProducto"] = $fdata;
//	precio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "precio";
	$fdata["GoodName"] = "precio";
	$fdata["ownerTable"] = "producto";
	$fdata["Label"] = GetFieldLabel("producto","precio");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "precio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "precio";

	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataproducto["precio"] = $fdata;
//	cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cantidad";
	$fdata["GoodName"] = "cantidad";
	$fdata["ownerTable"] = "producto";
	$fdata["Label"] = GetFieldLabel("producto","cantidad");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cantidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cantidad";

	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataproducto["cantidad"] = $fdata;


$tables_data["producto"]=&$tdataproducto;
$field_labels["producto"] = &$fieldLabelsproducto;
$fieldToolTips["producto"] = &$fieldToolTipsproducto;
$page_titles["producto"] = &$pageTitlesproducto;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["producto"] = array();
//	producto_has_ventas
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="producto_has_ventas";
		$detailsParam["dOriginalTable"] = "producto_has_ventas";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "producto_has_ventas";
	$detailsParam["dCaptionTable"] = GetTableCaption("producto_has_ventas");
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
		
	$detailsTablesData["producto"][$dIndex] = $detailsParam;

	
		$detailsTablesData["producto"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["producto"][$dIndex]["masterKeys"][]="idproducto";

				$detailsTablesData["producto"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["producto"][$dIndex]["detailKeys"][]="producto_idproducto";

// tables which are master tables for current table (detail)
$masterTablesData["producto"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_producto()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "nombreProducto,  precio,  cantidad";
$proto0["m_strFrom"] = "FROM producto";
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
	"m_strName" => "nombreProducto",
	"m_strTable" => "producto",
	"m_srcTableName" => "producto"
));

$proto6["m_sql"] = "nombreProducto";
$proto6["m_srcTableName"] = "producto";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "precio",
	"m_strTable" => "producto",
	"m_srcTableName" => "producto"
));

$proto8["m_sql"] = "precio";
$proto8["m_srcTableName"] = "producto";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad",
	"m_strTable" => "producto",
	"m_srcTableName" => "producto"
));

$proto10["m_sql"] = "cantidad";
$proto10["m_srcTableName"] = "producto";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "producto";
$proto13["m_srcTableName"] = "producto";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "idproducto";
$proto13["m_columns"][] = "nombreProducto";
$proto13["m_columns"][] = "precio";
$proto13["m_columns"][] = "cantidad";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "producto";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "producto";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="producto";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_producto = createSqlQuery_producto();


	
		;

			

$tdataproducto[".sqlquery"] = $queryData_producto;

$tableEvents["producto"] = new eventsBase;
$tdataproducto[".hasEvents"] = false;

?>