<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadetallefactura = array();
	$tdatadetallefactura[".truncateText"] = true;
	$tdatadetallefactura[".NumberOfChars"] = 80;
	$tdatadetallefactura[".ShortName"] = "detallefactura";
	$tdatadetallefactura[".OwnerID"] = "";
	$tdatadetallefactura[".OriginalTable"] = "detallefactura";

//	field labels
$fieldLabelsdetallefactura = array();
$fieldToolTipsdetallefactura = array();
$pageTitlesdetallefactura = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdetallefactura["Spanish"] = array();
	$fieldToolTipsdetallefactura["Spanish"] = array();
	$pageTitlesdetallefactura["Spanish"] = array();
	$fieldLabelsdetallefactura["Spanish"]["cantidad"] = "Cantidad";
	$fieldToolTipsdetallefactura["Spanish"]["cantidad"] = "";
	$fieldLabelsdetallefactura["Spanish"]["precio"] = "Precio";
	$fieldToolTipsdetallefactura["Spanish"]["precio"] = "";
	if (count($fieldToolTipsdetallefactura["Spanish"]))
		$tdatadetallefactura[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdetallefactura[""] = array();
	$fieldToolTipsdetallefactura[""] = array();
	$pageTitlesdetallefactura[""] = array();
	if (count($fieldToolTipsdetallefactura[""]))
		$tdatadetallefactura[".isUseToolTips"] = true;
}


	$tdatadetallefactura[".NCSearch"] = true;



$tdatadetallefactura[".shortTableName"] = "detallefactura";
$tdatadetallefactura[".nSecOptions"] = 0;
$tdatadetallefactura[".recsPerRowPrint"] = 1;
$tdatadetallefactura[".mainTableOwnerID"] = "";
$tdatadetallefactura[".moveNext"] = 1;
$tdatadetallefactura[".entityType"] = 0;

$tdatadetallefactura[".strOriginalTableName"] = "detallefactura";

	



$tdatadetallefactura[".showAddInPopup"] = false;

$tdatadetallefactura[".showEditInPopup"] = false;

$tdatadetallefactura[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadetallefactura[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadetallefactura[".fieldsForRegister"] = array();

$tdatadetallefactura[".listAjax"] = false;

	$tdatadetallefactura[".audit"] = false;

	$tdatadetallefactura[".locking"] = false;


$tdatadetallefactura[".add"] = true;
$tdatadetallefactura[".afterAddAction"] = 1;
$tdatadetallefactura[".closePopupAfterAdd"] = 1;
$tdatadetallefactura[".afterAddActionDetTable"] = "";

$tdatadetallefactura[".list"] = true;


$tdatadetallefactura[".import"] = true;

$tdatadetallefactura[".exportTo"] = true;

$tdatadetallefactura[".printFriendly"] = true;


$tdatadetallefactura[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatadetallefactura[".searchSaving"] = false;
//

$tdatadetallefactura[".showSearchPanel"] = true;
		$tdatadetallefactura[".flexibleSearch"] = true;

$tdatadetallefactura[".isUseAjaxSuggest"] = true;

$tdatadetallefactura[".rowHighlite"] = true;



$tdatadetallefactura[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadetallefactura[".isUseTimeForSearch"] = false;



$tdatadetallefactura[".badgeColor"] = "4169E1";


$tdatadetallefactura[".allSearchFields"] = array();
$tdatadetallefactura[".filterFields"] = array();
$tdatadetallefactura[".requiredSearchFields"] = array();

$tdatadetallefactura[".allSearchFields"][] = "cantidad";
	$tdatadetallefactura[".allSearchFields"][] = "precio";
	

$tdatadetallefactura[".googleLikeFields"] = array();
$tdatadetallefactura[".googleLikeFields"][] = "cantidad";
$tdatadetallefactura[".googleLikeFields"][] = "precio";


$tdatadetallefactura[".advSearchFields"] = array();
$tdatadetallefactura[".advSearchFields"][] = "cantidad";
$tdatadetallefactura[".advSearchFields"][] = "precio";

$tdatadetallefactura[".tableType"] = "list";

$tdatadetallefactura[".printerPageOrientation"] = 0;
$tdatadetallefactura[".nPrinterPageScale"] = 100;

$tdatadetallefactura[".nPrinterSplitRecords"] = 40;

$tdatadetallefactura[".nPrinterPDFSplitRecords"] = 40;



$tdatadetallefactura[".geocodingEnabled"] = false;





$tdatadetallefactura[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatadetallefactura[".pageSize"] = 20;

$tdatadetallefactura[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadetallefactura[".strOrderBy"] = $tstrOrderBy;

$tdatadetallefactura[".orderindexes"] = array();

$tdatadetallefactura[".sqlHead"] = "SELECT cantidad,  precio";
$tdatadetallefactura[".sqlFrom"] = "FROM detallefactura";
$tdatadetallefactura[".sqlWhereExpr"] = "";
$tdatadetallefactura[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadetallefactura[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadetallefactura[".arrGroupsPerPage"] = $arrGPP;

$tdatadetallefactura[".highlightSearchResults"] = true;

$tableKeysdetallefactura = array();
$tdatadetallefactura[".Keys"] = $tableKeysdetallefactura;

$tdatadetallefactura[".listFields"] = array();
$tdatadetallefactura[".listFields"][] = "cantidad";
$tdatadetallefactura[".listFields"][] = "precio";

$tdatadetallefactura[".hideMobileList"] = array();


$tdatadetallefactura[".viewFields"] = array();
$tdatadetallefactura[".viewFields"][] = "cantidad";
$tdatadetallefactura[".viewFields"][] = "precio";

$tdatadetallefactura[".addFields"] = array();
$tdatadetallefactura[".addFields"][] = "cantidad";
$tdatadetallefactura[".addFields"][] = "precio";

$tdatadetallefactura[".masterListFields"] = array();
$tdatadetallefactura[".masterListFields"][] = "cantidad";
$tdatadetallefactura[".masterListFields"][] = "precio";

$tdatadetallefactura[".inlineAddFields"] = array();
$tdatadetallefactura[".inlineAddFields"][] = "cantidad";
$tdatadetallefactura[".inlineAddFields"][] = "precio";

$tdatadetallefactura[".editFields"] = array();
$tdatadetallefactura[".editFields"][] = "cantidad";
$tdatadetallefactura[".editFields"][] = "precio";

$tdatadetallefactura[".inlineEditFields"] = array();
$tdatadetallefactura[".inlineEditFields"][] = "cantidad";
$tdatadetallefactura[".inlineEditFields"][] = "precio";

$tdatadetallefactura[".exportFields"] = array();
$tdatadetallefactura[".exportFields"][] = "cantidad";
$tdatadetallefactura[".exportFields"][] = "precio";

$tdatadetallefactura[".importFields"] = array();
$tdatadetallefactura[".importFields"][] = "cantidad";
$tdatadetallefactura[".importFields"][] = "precio";

$tdatadetallefactura[".printFields"] = array();
$tdatadetallefactura[".printFields"][] = "cantidad";
$tdatadetallefactura[".printFields"][] = "precio";

//	cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cantidad";
	$fdata["GoodName"] = "cantidad";
	$fdata["ownerTable"] = "detallefactura";
	$fdata["Label"] = GetFieldLabel("detallefactura","cantidad");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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




	$tdatadetallefactura["cantidad"] = $fdata;
//	precio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "precio";
	$fdata["GoodName"] = "precio";
	$fdata["ownerTable"] = "detallefactura";
	$fdata["Label"] = GetFieldLabel("detallefactura","precio");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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




	$tdatadetallefactura["precio"] = $fdata;


$tables_data["detallefactura"]=&$tdatadetallefactura;
$field_labels["detallefactura"] = &$fieldLabelsdetallefactura;
$fieldToolTips["detallefactura"] = &$fieldToolTipsdetallefactura;
$page_titles["detallefactura"] = &$pageTitlesdetallefactura;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["detallefactura"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["detallefactura"] = array();


	
				$strOriginalDetailsTable="facturas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="facturas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "facturas";
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
					$masterTablesData["detallefactura"][0] = $masterParams;
				$masterTablesData["detallefactura"][0]["masterKeys"] = array();
	$masterTablesData["detallefactura"][0]["masterKeys"][]="numeroFactura";
				$masterTablesData["detallefactura"][0]["detailKeys"] = array();
	$masterTablesData["detallefactura"][0]["detailKeys"][]="facturas_numeroFactura";
		
	
				$strOriginalDetailsTable="ventas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="ventas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ventas";
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
					$masterTablesData["detallefactura"][1] = $masterParams;
				$masterTablesData["detallefactura"][1]["masterKeys"] = array();
	$masterTablesData["detallefactura"][1]["masterKeys"][]="idventas";
				$masterTablesData["detallefactura"][1]["detailKeys"] = array();
	$masterTablesData["detallefactura"][1]["detailKeys"][]="ventas_idventas";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_detallefactura()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cantidad,  precio";
$proto0["m_strFrom"] = "FROM detallefactura";
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
	"m_strName" => "cantidad",
	"m_strTable" => "detallefactura",
	"m_srcTableName" => "detallefactura"
));

$proto6["m_sql"] = "cantidad";
$proto6["m_srcTableName"] = "detallefactura";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "precio",
	"m_strTable" => "detallefactura",
	"m_srcTableName" => "detallefactura"
));

$proto8["m_sql"] = "precio";
$proto8["m_srcTableName"] = "detallefactura";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "detallefactura";
$proto11["m_srcTableName"] = "detallefactura";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ventas_idventas";
$proto11["m_columns"][] = "facturas_numeroFactura";
$proto11["m_columns"][] = "cantidad";
$proto11["m_columns"][] = "precio";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "detallefactura";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "detallefactura";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="detallefactura";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_detallefactura = createSqlQuery_detallefactura();


	
		;

		

$tdatadetallefactura[".sqlquery"] = $queryData_detallefactura;

$tableEvents["detallefactura"] = new eventsBase;
$tdatadetallefactura[".hasEvents"] = false;

?>