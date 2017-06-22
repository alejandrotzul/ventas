<?php
require_once(getabspath("classes/cipherer.php"));




$tdataproducto_has_ventas = array();
	$tdataproducto_has_ventas[".truncateText"] = true;
	$tdataproducto_has_ventas[".NumberOfChars"] = 80;
	$tdataproducto_has_ventas[".ShortName"] = "producto_has_ventas";
	$tdataproducto_has_ventas[".OwnerID"] = "";
	$tdataproducto_has_ventas[".OriginalTable"] = "producto_has_ventas";

//	field labels
$fieldLabelsproducto_has_ventas = array();
$fieldToolTipsproducto_has_ventas = array();
$pageTitlesproducto_has_ventas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsproducto_has_ventas["Spanish"] = array();
	$fieldToolTipsproducto_has_ventas["Spanish"] = array();
	$pageTitlesproducto_has_ventas["Spanish"] = array();
	$fieldLabelsproducto_has_ventas["Spanish"]["producto_idproducto"] = "Producto Idproducto";
	$fieldToolTipsproducto_has_ventas["Spanish"]["producto_idproducto"] = "";
	$fieldLabelsproducto_has_ventas["Spanish"]["ventas_idventas"] = "Ventas Idventas";
	$fieldToolTipsproducto_has_ventas["Spanish"]["ventas_idventas"] = "";
	if (count($fieldToolTipsproducto_has_ventas["Spanish"]))
		$tdataproducto_has_ventas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsproducto_has_ventas[""] = array();
	$fieldToolTipsproducto_has_ventas[""] = array();
	$pageTitlesproducto_has_ventas[""] = array();
	if (count($fieldToolTipsproducto_has_ventas[""]))
		$tdataproducto_has_ventas[".isUseToolTips"] = true;
}


	$tdataproducto_has_ventas[".NCSearch"] = true;



$tdataproducto_has_ventas[".shortTableName"] = "producto_has_ventas";
$tdataproducto_has_ventas[".nSecOptions"] = 0;
$tdataproducto_has_ventas[".recsPerRowPrint"] = 1;
$tdataproducto_has_ventas[".mainTableOwnerID"] = "";
$tdataproducto_has_ventas[".moveNext"] = 1;
$tdataproducto_has_ventas[".entityType"] = 0;

$tdataproducto_has_ventas[".strOriginalTableName"] = "producto_has_ventas";

	



$tdataproducto_has_ventas[".showAddInPopup"] = false;

$tdataproducto_has_ventas[".showEditInPopup"] = false;

$tdataproducto_has_ventas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataproducto_has_ventas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataproducto_has_ventas[".fieldsForRegister"] = array();

$tdataproducto_has_ventas[".listAjax"] = false;

	$tdataproducto_has_ventas[".audit"] = false;

	$tdataproducto_has_ventas[".locking"] = false;

$tdataproducto_has_ventas[".edit"] = true;
$tdataproducto_has_ventas[".afterEditAction"] = 1;
$tdataproducto_has_ventas[".closePopupAfterEdit"] = 1;
$tdataproducto_has_ventas[".afterEditActionDetTable"] = "";

$tdataproducto_has_ventas[".add"] = true;
$tdataproducto_has_ventas[".afterAddAction"] = 1;
$tdataproducto_has_ventas[".closePopupAfterAdd"] = 1;
$tdataproducto_has_ventas[".afterAddActionDetTable"] = "";

$tdataproducto_has_ventas[".list"] = true;

$tdataproducto_has_ventas[".view"] = true;

$tdataproducto_has_ventas[".import"] = true;

$tdataproducto_has_ventas[".exportTo"] = true;

$tdataproducto_has_ventas[".printFriendly"] = true;

$tdataproducto_has_ventas[".delete"] = true;

$tdataproducto_has_ventas[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataproducto_has_ventas[".searchSaving"] = false;
//

$tdataproducto_has_ventas[".showSearchPanel"] = true;
		$tdataproducto_has_ventas[".flexibleSearch"] = true;

$tdataproducto_has_ventas[".isUseAjaxSuggest"] = true;

$tdataproducto_has_ventas[".rowHighlite"] = true;



$tdataproducto_has_ventas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproducto_has_ventas[".isUseTimeForSearch"] = false;





$tdataproducto_has_ventas[".allSearchFields"] = array();
$tdataproducto_has_ventas[".filterFields"] = array();
$tdataproducto_has_ventas[".requiredSearchFields"] = array();

$tdataproducto_has_ventas[".allSearchFields"][] = "producto_idproducto";
	$tdataproducto_has_ventas[".allSearchFields"][] = "ventas_idventas";
	

$tdataproducto_has_ventas[".googleLikeFields"] = array();
$tdataproducto_has_ventas[".googleLikeFields"][] = "producto_idproducto";
$tdataproducto_has_ventas[".googleLikeFields"][] = "ventas_idventas";


$tdataproducto_has_ventas[".advSearchFields"] = array();
$tdataproducto_has_ventas[".advSearchFields"][] = "producto_idproducto";
$tdataproducto_has_ventas[".advSearchFields"][] = "ventas_idventas";

$tdataproducto_has_ventas[".tableType"] = "list";

$tdataproducto_has_ventas[".printerPageOrientation"] = 0;
$tdataproducto_has_ventas[".nPrinterPageScale"] = 100;

$tdataproducto_has_ventas[".nPrinterSplitRecords"] = 40;

$tdataproducto_has_ventas[".nPrinterPDFSplitRecords"] = 40;



$tdataproducto_has_ventas[".geocodingEnabled"] = false;





$tdataproducto_has_ventas[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataproducto_has_ventas[".pageSize"] = 20;

$tdataproducto_has_ventas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproducto_has_ventas[".strOrderBy"] = $tstrOrderBy;

$tdataproducto_has_ventas[".orderindexes"] = array();

$tdataproducto_has_ventas[".sqlHead"] = "SELECT producto_idproducto,  	ventas_idventas";
$tdataproducto_has_ventas[".sqlFrom"] = "FROM producto_has_ventas";
$tdataproducto_has_ventas[".sqlWhereExpr"] = "";
$tdataproducto_has_ventas[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproducto_has_ventas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproducto_has_ventas[".arrGroupsPerPage"] = $arrGPP;

$tdataproducto_has_ventas[".highlightSearchResults"] = true;

$tableKeysproducto_has_ventas = array();
$tableKeysproducto_has_ventas[] = "producto_idproducto";
$tableKeysproducto_has_ventas[] = "ventas_idventas";
$tdataproducto_has_ventas[".Keys"] = $tableKeysproducto_has_ventas;

$tdataproducto_has_ventas[".listFields"] = array();
$tdataproducto_has_ventas[".listFields"][] = "producto_idproducto";
$tdataproducto_has_ventas[".listFields"][] = "ventas_idventas";

$tdataproducto_has_ventas[".hideMobileList"] = array();


$tdataproducto_has_ventas[".viewFields"] = array();
$tdataproducto_has_ventas[".viewFields"][] = "producto_idproducto";
$tdataproducto_has_ventas[".viewFields"][] = "ventas_idventas";

$tdataproducto_has_ventas[".addFields"] = array();
$tdataproducto_has_ventas[".addFields"][] = "producto_idproducto";
$tdataproducto_has_ventas[".addFields"][] = "ventas_idventas";

$tdataproducto_has_ventas[".masterListFields"] = array();
$tdataproducto_has_ventas[".masterListFields"][] = "producto_idproducto";
$tdataproducto_has_ventas[".masterListFields"][] = "ventas_idventas";

$tdataproducto_has_ventas[".inlineAddFields"] = array();
$tdataproducto_has_ventas[".inlineAddFields"][] = "producto_idproducto";
$tdataproducto_has_ventas[".inlineAddFields"][] = "ventas_idventas";

$tdataproducto_has_ventas[".editFields"] = array();
$tdataproducto_has_ventas[".editFields"][] = "producto_idproducto";
$tdataproducto_has_ventas[".editFields"][] = "ventas_idventas";

$tdataproducto_has_ventas[".inlineEditFields"] = array();
$tdataproducto_has_ventas[".inlineEditFields"][] = "producto_idproducto";
$tdataproducto_has_ventas[".inlineEditFields"][] = "ventas_idventas";

$tdataproducto_has_ventas[".exportFields"] = array();
$tdataproducto_has_ventas[".exportFields"][] = "producto_idproducto";
$tdataproducto_has_ventas[".exportFields"][] = "ventas_idventas";

$tdataproducto_has_ventas[".importFields"] = array();
$tdataproducto_has_ventas[".importFields"][] = "producto_idproducto";
$tdataproducto_has_ventas[".importFields"][] = "ventas_idventas";

$tdataproducto_has_ventas[".printFields"] = array();
$tdataproducto_has_ventas[".printFields"][] = "producto_idproducto";
$tdataproducto_has_ventas[".printFields"][] = "ventas_idventas";

//	producto_idproducto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "producto_idproducto";
	$fdata["GoodName"] = "producto_idproducto";
	$fdata["ownerTable"] = "producto_has_ventas";
	$fdata["Label"] = GetFieldLabel("producto_has_ventas","producto_idproducto");
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

		$fdata["strField"] = "producto_idproducto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "producto_idproducto";

	
	
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




	$tdataproducto_has_ventas["producto_idproducto"] = $fdata;
//	ventas_idventas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ventas_idventas";
	$fdata["GoodName"] = "ventas_idventas";
	$fdata["ownerTable"] = "producto_has_ventas";
	$fdata["Label"] = GetFieldLabel("producto_has_ventas","ventas_idventas");
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

		$fdata["strField"] = "ventas_idventas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ventas_idventas";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ventas";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idventas";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "idventas";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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




	$tdataproducto_has_ventas["ventas_idventas"] = $fdata;


$tables_data["producto_has_ventas"]=&$tdataproducto_has_ventas;
$field_labels["producto_has_ventas"] = &$fieldLabelsproducto_has_ventas;
$fieldToolTips["producto_has_ventas"] = &$fieldToolTipsproducto_has_ventas;
$page_titles["producto_has_ventas"] = &$pageTitlesproducto_has_ventas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["producto_has_ventas"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["producto_has_ventas"] = array();


	
				$strOriginalDetailsTable="producto";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="producto";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "producto";
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
					$masterTablesData["producto_has_ventas"][0] = $masterParams;
				$masterTablesData["producto_has_ventas"][0]["masterKeys"] = array();
	$masterTablesData["producto_has_ventas"][0]["masterKeys"][]="idproducto";
				$masterTablesData["producto_has_ventas"][0]["detailKeys"] = array();
	$masterTablesData["producto_has_ventas"][0]["detailKeys"][]="producto_idproducto";
		
	
				$strOriginalDetailsTable="ventas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="ventas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ventas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
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
					$masterTablesData["producto_has_ventas"][1] = $masterParams;
				$masterTablesData["producto_has_ventas"][1]["masterKeys"] = array();
	$masterTablesData["producto_has_ventas"][1]["masterKeys"][]="idventas";
				$masterTablesData["producto_has_ventas"][1]["detailKeys"] = array();
	$masterTablesData["producto_has_ventas"][1]["detailKeys"][]="ventas_idventas";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_producto_has_ventas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "producto_idproducto,  	ventas_idventas";
$proto0["m_strFrom"] = "FROM producto_has_ventas";
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
	"m_strName" => "producto_idproducto",
	"m_strTable" => "producto_has_ventas",
	"m_srcTableName" => "producto_has_ventas"
));

$proto6["m_sql"] = "producto_idproducto";
$proto6["m_srcTableName"] = "producto_has_ventas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ventas_idventas",
	"m_strTable" => "producto_has_ventas",
	"m_srcTableName" => "producto_has_ventas"
));

$proto8["m_sql"] = "ventas_idventas";
$proto8["m_srcTableName"] = "producto_has_ventas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "producto_has_ventas";
$proto11["m_srcTableName"] = "producto_has_ventas";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "producto_idproducto";
$proto11["m_columns"][] = "ventas_idventas";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "producto_has_ventas";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "producto_has_ventas";
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
$proto0["m_srcTableName"]="producto_has_ventas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_producto_has_ventas = createSqlQuery_producto_has_ventas();


	
		;

		

$tdataproducto_has_ventas[".sqlquery"] = $queryData_producto_has_ventas;

$tableEvents["producto_has_ventas"] = new eventsBase;
$tdataproducto_has_ventas[".hasEvents"] = false;

?>