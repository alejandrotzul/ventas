<?php
require_once(getabspath("classes/cipherer.php"));




$tdataventas = array();
	$tdataventas[".truncateText"] = true;
	$tdataventas[".NumberOfChars"] = 80;
	$tdataventas[".ShortName"] = "ventas";
	$tdataventas[".OwnerID"] = "";
	$tdataventas[".OriginalTable"] = "ventas";

//	field labels
$fieldLabelsventas = array();
$fieldToolTipsventas = array();
$pageTitlesventas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsventas["Spanish"] = array();
	$fieldToolTipsventas["Spanish"] = array();
	$pageTitlesventas["Spanish"] = array();
	$fieldLabelsventas["Spanish"]["idventas"] = "Idventas";
	$fieldToolTipsventas["Spanish"]["idventas"] = "";
	$fieldLabelsventas["Spanish"]["producto"] = "Producto";
	$fieldToolTipsventas["Spanish"]["producto"] = "";
	$fieldLabelsventas["Spanish"]["cantidad"] = "Cantidad";
	$fieldToolTipsventas["Spanish"]["cantidad"] = "";
	$fieldLabelsventas["Spanish"]["fechaVenta"] = "Fecha Venta";
	$fieldToolTipsventas["Spanish"]["fechaVenta"] = "";
	if (count($fieldToolTipsventas["Spanish"]))
		$tdataventas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsventas[""] = array();
	$fieldToolTipsventas[""] = array();
	$pageTitlesventas[""] = array();
	if (count($fieldToolTipsventas[""]))
		$tdataventas[".isUseToolTips"] = true;
}


	$tdataventas[".NCSearch"] = true;



$tdataventas[".shortTableName"] = "ventas";
$tdataventas[".nSecOptions"] = 0;
$tdataventas[".recsPerRowPrint"] = 1;
$tdataventas[".mainTableOwnerID"] = "";
$tdataventas[".moveNext"] = 1;
$tdataventas[".entityType"] = 0;

$tdataventas[".strOriginalTableName"] = "ventas";

	



$tdataventas[".showAddInPopup"] = false;

$tdataventas[".showEditInPopup"] = false;

$tdataventas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataventas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataventas[".fieldsForRegister"] = array();

$tdataventas[".listAjax"] = false;

	$tdataventas[".audit"] = false;

	$tdataventas[".locking"] = false;

$tdataventas[".edit"] = true;
$tdataventas[".afterEditAction"] = 1;
$tdataventas[".closePopupAfterEdit"] = 1;
$tdataventas[".afterEditActionDetTable"] = "";

$tdataventas[".add"] = true;
$tdataventas[".afterAddAction"] = 1;
$tdataventas[".closePopupAfterAdd"] = 1;
$tdataventas[".afterAddActionDetTable"] = "";

$tdataventas[".list"] = true;

$tdataventas[".view"] = true;

$tdataventas[".import"] = true;

$tdataventas[".exportTo"] = true;

$tdataventas[".printFriendly"] = true;

$tdataventas[".delete"] = true;

$tdataventas[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataventas[".searchSaving"] = false;
//

$tdataventas[".showSearchPanel"] = true;
		$tdataventas[".flexibleSearch"] = true;

$tdataventas[".isUseAjaxSuggest"] = true;

$tdataventas[".rowHighlite"] = true;



$tdataventas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataventas[".isUseTimeForSearch"] = false;





$tdataventas[".allSearchFields"] = array();
$tdataventas[".filterFields"] = array();
$tdataventas[".requiredSearchFields"] = array();

$tdataventas[".allSearchFields"][] = "idventas";
	$tdataventas[".allSearchFields"][] = "producto";
	$tdataventas[".allSearchFields"][] = "cantidad";
	$tdataventas[".allSearchFields"][] = "fechaVenta";
	

$tdataventas[".googleLikeFields"] = array();
$tdataventas[".googleLikeFields"][] = "idventas";
$tdataventas[".googleLikeFields"][] = "producto";
$tdataventas[".googleLikeFields"][] = "cantidad";
$tdataventas[".googleLikeFields"][] = "fechaVenta";


$tdataventas[".advSearchFields"] = array();
$tdataventas[".advSearchFields"][] = "idventas";
$tdataventas[".advSearchFields"][] = "producto";
$tdataventas[".advSearchFields"][] = "cantidad";
$tdataventas[".advSearchFields"][] = "fechaVenta";

$tdataventas[".tableType"] = "list";

$tdataventas[".printerPageOrientation"] = 0;
$tdataventas[".nPrinterPageScale"] = 100;

$tdataventas[".nPrinterSplitRecords"] = 40;

$tdataventas[".nPrinterPDFSplitRecords"] = 40;



$tdataventas[".geocodingEnabled"] = false;





$tdataventas[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataventas[".pageSize"] = 20;

$tdataventas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataventas[".strOrderBy"] = $tstrOrderBy;

$tdataventas[".orderindexes"] = array();

$tdataventas[".sqlHead"] = "SELECT idventas,  	producto,  	cantidad,  	fechaVenta";
$tdataventas[".sqlFrom"] = "FROM ventas";
$tdataventas[".sqlWhereExpr"] = "";
$tdataventas[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataventas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataventas[".arrGroupsPerPage"] = $arrGPP;

$tdataventas[".highlightSearchResults"] = true;

$tableKeysventas = array();
$tableKeysventas[] = "idventas";
$tdataventas[".Keys"] = $tableKeysventas;

$tdataventas[".listFields"] = array();
$tdataventas[".listFields"][] = "idventas";
$tdataventas[".listFields"][] = "producto";
$tdataventas[".listFields"][] = "cantidad";
$tdataventas[".listFields"][] = "fechaVenta";

$tdataventas[".hideMobileList"] = array();


$tdataventas[".viewFields"] = array();
$tdataventas[".viewFields"][] = "idventas";
$tdataventas[".viewFields"][] = "producto";
$tdataventas[".viewFields"][] = "cantidad";
$tdataventas[".viewFields"][] = "fechaVenta";

$tdataventas[".addFields"] = array();
$tdataventas[".addFields"][] = "idventas";
$tdataventas[".addFields"][] = "producto";
$tdataventas[".addFields"][] = "cantidad";
$tdataventas[".addFields"][] = "fechaVenta";

$tdataventas[".masterListFields"] = array();
$tdataventas[".masterListFields"][] = "idventas";
$tdataventas[".masterListFields"][] = "producto";
$tdataventas[".masterListFields"][] = "cantidad";
$tdataventas[".masterListFields"][] = "fechaVenta";

$tdataventas[".inlineAddFields"] = array();

$tdataventas[".editFields"] = array();
$tdataventas[".editFields"][] = "idventas";
$tdataventas[".editFields"][] = "producto";
$tdataventas[".editFields"][] = "cantidad";
$tdataventas[".editFields"][] = "fechaVenta";

$tdataventas[".inlineEditFields"] = array();

$tdataventas[".exportFields"] = array();
$tdataventas[".exportFields"][] = "idventas";
$tdataventas[".exportFields"][] = "producto";
$tdataventas[".exportFields"][] = "cantidad";
$tdataventas[".exportFields"][] = "fechaVenta";

$tdataventas[".importFields"] = array();
$tdataventas[".importFields"][] = "idventas";
$tdataventas[".importFields"][] = "producto";
$tdataventas[".importFields"][] = "cantidad";
$tdataventas[".importFields"][] = "fechaVenta";

$tdataventas[".printFields"] = array();
$tdataventas[".printFields"][] = "idventas";
$tdataventas[".printFields"][] = "producto";
$tdataventas[".printFields"][] = "cantidad";
$tdataventas[".printFields"][] = "fechaVenta";

//	idventas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idventas";
	$fdata["GoodName"] = "idventas";
	$fdata["ownerTable"] = "ventas";
	$fdata["Label"] = GetFieldLabel("ventas","idventas");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "idventas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idventas";

	
	
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




	$tdataventas["idventas"] = $fdata;
//	producto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "producto";
	$fdata["GoodName"] = "producto";
	$fdata["ownerTable"] = "ventas";
	$fdata["Label"] = GetFieldLabel("ventas","producto");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "producto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "producto";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdataventas["producto"] = $fdata;
//	cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cantidad";
	$fdata["GoodName"] = "cantidad";
	$fdata["ownerTable"] = "ventas";
	$fdata["Label"] = GetFieldLabel("ventas","cantidad");
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




	$tdataventas["cantidad"] = $fdata;
//	fechaVenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fechaVenta";
	$fdata["GoodName"] = "fechaVenta";
	$fdata["ownerTable"] = "ventas";
	$fdata["Label"] = GetFieldLabel("ventas","fechaVenta");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fechaVenta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fechaVenta";

	
	
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




	$tdataventas["fechaVenta"] = $fdata;


$tables_data["ventas"]=&$tdataventas;
$field_labels["ventas"] = &$fieldLabelsventas;
$fieldToolTips["ventas"] = &$fieldToolTipsventas;
$page_titles["ventas"] = &$pageTitlesventas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ventas"] = array();
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
		
	$detailsTablesData["ventas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["ventas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["ventas"][$dIndex]["masterKeys"][]="idventas";

				$detailsTablesData["ventas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["ventas"][$dIndex]["detailKeys"][]="ventas_idventas";
//	producto_has_ventas
	
	

		$dIndex = 1;
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
	$detailsParam["dispChildCount"] = "0";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["ventas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["ventas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["ventas"][$dIndex]["masterKeys"][]="idventas";

				$detailsTablesData["ventas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["ventas"][$dIndex]["detailKeys"][]="ventas_idventas";

// tables which are master tables for current table (detail)
$masterTablesData["ventas"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ventas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idventas,  	producto,  	cantidad,  	fechaVenta";
$proto0["m_strFrom"] = "FROM ventas";
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
	"m_strName" => "idventas",
	"m_strTable" => "ventas",
	"m_srcTableName" => "ventas"
));

$proto6["m_sql"] = "idventas";
$proto6["m_srcTableName"] = "ventas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "producto",
	"m_strTable" => "ventas",
	"m_srcTableName" => "ventas"
));

$proto8["m_sql"] = "producto";
$proto8["m_srcTableName"] = "ventas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad",
	"m_strTable" => "ventas",
	"m_srcTableName" => "ventas"
));

$proto10["m_sql"] = "cantidad";
$proto10["m_srcTableName"] = "ventas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fechaVenta",
	"m_strTable" => "ventas",
	"m_srcTableName" => "ventas"
));

$proto12["m_sql"] = "fechaVenta";
$proto12["m_srcTableName"] = "ventas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "ventas";
$proto15["m_srcTableName"] = "ventas";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "idventas";
$proto15["m_columns"][] = "producto";
$proto15["m_columns"][] = "cantidad";
$proto15["m_columns"][] = "fechaVenta";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "ventas";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "ventas";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ventas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ventas = createSqlQuery_ventas();


	
		;

				

$tdataventas[".sqlquery"] = $queryData_ventas;

$tableEvents["ventas"] = new eventsBase;
$tdataventas[".hasEvents"] = false;

?>