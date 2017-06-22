<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacliente = array();
	$tdatacliente[".truncateText"] = true;
	$tdatacliente[".NumberOfChars"] = 80;
	$tdatacliente[".ShortName"] = "cliente";
	$tdatacliente[".OwnerID"] = "";
	$tdatacliente[".OriginalTable"] = "cliente";

//	field labels
$fieldLabelscliente = array();
$fieldToolTipscliente = array();
$pageTitlescliente = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscliente["Spanish"] = array();
	$fieldToolTipscliente["Spanish"] = array();
	$pageTitlescliente["Spanish"] = array();
	$fieldLabelscliente["Spanish"]["nit"] = "Nit";
	$fieldToolTipscliente["Spanish"]["nit"] = "";
	$fieldLabelscliente["Spanish"]["nombres"] = "Nombres";
	$fieldToolTipscliente["Spanish"]["nombres"] = "";
	$fieldLabelscliente["Spanish"]["apellidos"] = "Apellidos";
	$fieldToolTipscliente["Spanish"]["apellidos"] = "";
	$fieldLabelscliente["Spanish"]["direccion"] = "Direccion";
	$fieldToolTipscliente["Spanish"]["direccion"] = "";
	$fieldLabelscliente["Spanish"]["email"] = "Email";
	$fieldToolTipscliente["Spanish"]["email"] = "";
	$fieldLabelscliente["Spanish"]["telefono"] = "Telefono";
	$fieldToolTipscliente["Spanish"]["telefono"] = "";
	if (count($fieldToolTipscliente["Spanish"]))
		$tdatacliente[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscliente[""] = array();
	$fieldToolTipscliente[""] = array();
	$pageTitlescliente[""] = array();
	if (count($fieldToolTipscliente[""]))
		$tdatacliente[".isUseToolTips"] = true;
}


	$tdatacliente[".NCSearch"] = true;



$tdatacliente[".shortTableName"] = "cliente";
$tdatacliente[".nSecOptions"] = 0;
$tdatacliente[".recsPerRowPrint"] = 1;
$tdatacliente[".mainTableOwnerID"] = "";
$tdatacliente[".moveNext"] = 1;
$tdatacliente[".entityType"] = 0;

$tdatacliente[".strOriginalTableName"] = "cliente";

	



$tdatacliente[".showAddInPopup"] = false;

$tdatacliente[".showEditInPopup"] = false;

$tdatacliente[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacliente[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacliente[".fieldsForRegister"] = array();

$tdatacliente[".listAjax"] = false;

	$tdatacliente[".audit"] = false;

	$tdatacliente[".locking"] = false;


$tdatacliente[".add"] = true;
$tdatacliente[".afterAddAction"] = 1;
$tdatacliente[".closePopupAfterAdd"] = 1;
$tdatacliente[".afterAddActionDetTable"] = "";

$tdatacliente[".list"] = true;


$tdatacliente[".import"] = true;

$tdatacliente[".exportTo"] = true;

$tdatacliente[".printFriendly"] = true;


$tdatacliente[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacliente[".searchSaving"] = false;
//

$tdatacliente[".showSearchPanel"] = true;
		$tdatacliente[".flexibleSearch"] = true;

$tdatacliente[".isUseAjaxSuggest"] = true;

$tdatacliente[".rowHighlite"] = true;



$tdatacliente[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacliente[".isUseTimeForSearch"] = false;



$tdatacliente[".badgeColor"] = "3CB371";


$tdatacliente[".allSearchFields"] = array();
$tdatacliente[".filterFields"] = array();
$tdatacliente[".requiredSearchFields"] = array();

$tdatacliente[".allSearchFields"][] = "nit";
	$tdatacliente[".allSearchFields"][] = "nombres";
	$tdatacliente[".allSearchFields"][] = "apellidos";
	$tdatacliente[".allSearchFields"][] = "direccion";
	$tdatacliente[".allSearchFields"][] = "email";
	$tdatacliente[".allSearchFields"][] = "telefono";
	

$tdatacliente[".googleLikeFields"] = array();
$tdatacliente[".googleLikeFields"][] = "nit";
$tdatacliente[".googleLikeFields"][] = "nombres";
$tdatacliente[".googleLikeFields"][] = "apellidos";
$tdatacliente[".googleLikeFields"][] = "direccion";
$tdatacliente[".googleLikeFields"][] = "email";
$tdatacliente[".googleLikeFields"][] = "telefono";


$tdatacliente[".advSearchFields"] = array();
$tdatacliente[".advSearchFields"][] = "nit";
$tdatacliente[".advSearchFields"][] = "nombres";
$tdatacliente[".advSearchFields"][] = "apellidos";
$tdatacliente[".advSearchFields"][] = "direccion";
$tdatacliente[".advSearchFields"][] = "email";
$tdatacliente[".advSearchFields"][] = "telefono";

$tdatacliente[".tableType"] = "list";

$tdatacliente[".printerPageOrientation"] = 0;
$tdatacliente[".nPrinterPageScale"] = 100;

$tdatacliente[".nPrinterSplitRecords"] = 40;

$tdatacliente[".nPrinterPDFSplitRecords"] = 40;



$tdatacliente[".geocodingEnabled"] = false;





$tdatacliente[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatacliente[".pageSize"] = 20;

$tdatacliente[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacliente[".strOrderBy"] = $tstrOrderBy;

$tdatacliente[".orderindexes"] = array();

$tdatacliente[".sqlHead"] = "SELECT nit,  nombres,  apellidos,  direccion,  email,  telefono";
$tdatacliente[".sqlFrom"] = "FROM cliente";
$tdatacliente[".sqlWhereExpr"] = "";
$tdatacliente[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacliente[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacliente[".arrGroupsPerPage"] = $arrGPP;

$tdatacliente[".highlightSearchResults"] = true;

$tableKeyscliente = array();
$tdatacliente[".Keys"] = $tableKeyscliente;

$tdatacliente[".listFields"] = array();
$tdatacliente[".listFields"][] = "nit";
$tdatacliente[".listFields"][] = "nombres";
$tdatacliente[".listFields"][] = "apellidos";
$tdatacliente[".listFields"][] = "direccion";
$tdatacliente[".listFields"][] = "email";
$tdatacliente[".listFields"][] = "telefono";

$tdatacliente[".hideMobileList"] = array();


$tdatacliente[".viewFields"] = array();

$tdatacliente[".addFields"] = array();
$tdatacliente[".addFields"][] = "nit";
$tdatacliente[".addFields"][] = "nombres";
$tdatacliente[".addFields"][] = "apellidos";
$tdatacliente[".addFields"][] = "direccion";
$tdatacliente[".addFields"][] = "email";
$tdatacliente[".addFields"][] = "telefono";

$tdatacliente[".masterListFields"] = array();
$tdatacliente[".masterListFields"][] = "nit";
$tdatacliente[".masterListFields"][] = "nombres";
$tdatacliente[".masterListFields"][] = "apellidos";
$tdatacliente[".masterListFields"][] = "direccion";
$tdatacliente[".masterListFields"][] = "email";
$tdatacliente[".masterListFields"][] = "telefono";

$tdatacliente[".inlineAddFields"] = array();

$tdatacliente[".editFields"] = array();

$tdatacliente[".inlineEditFields"] = array();

$tdatacliente[".exportFields"] = array();
$tdatacliente[".exportFields"][] = "nit";
$tdatacliente[".exportFields"][] = "nombres";
$tdatacliente[".exportFields"][] = "apellidos";
$tdatacliente[".exportFields"][] = "direccion";
$tdatacliente[".exportFields"][] = "email";
$tdatacliente[".exportFields"][] = "telefono";

$tdatacliente[".importFields"] = array();
$tdatacliente[".importFields"][] = "nit";
$tdatacliente[".importFields"][] = "nombres";
$tdatacliente[".importFields"][] = "apellidos";
$tdatacliente[".importFields"][] = "direccion";
$tdatacliente[".importFields"][] = "email";
$tdatacliente[".importFields"][] = "telefono";

$tdatacliente[".printFields"] = array();
$tdatacliente[".printFields"][] = "nit";
$tdatacliente[".printFields"][] = "nombres";
$tdatacliente[".printFields"][] = "apellidos";
$tdatacliente[".printFields"][] = "direccion";
$tdatacliente[".printFields"][] = "email";
$tdatacliente[".printFields"][] = "telefono";

//	nit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nit";
	$fdata["GoodName"] = "nit";
	$fdata["ownerTable"] = "cliente";
	$fdata["Label"] = GetFieldLabel("cliente","nit");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
	
	
	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nit";

	
	
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




	$tdatacliente["nit"] = $fdata;
//	nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombres";
	$fdata["GoodName"] = "nombres";
	$fdata["ownerTable"] = "cliente";
	$fdata["Label"] = GetFieldLabel("cliente","nombres");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
	
	
	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nombres";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombres";

	
	
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




	$tdatacliente["nombres"] = $fdata;
//	apellidos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "apellidos";
	$fdata["GoodName"] = "apellidos";
	$fdata["ownerTable"] = "cliente";
	$fdata["Label"] = GetFieldLabel("cliente","apellidos");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
	
	
	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "apellidos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "apellidos";

	
	
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




	$tdatacliente["apellidos"] = $fdata;
//	direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "direccion";
	$fdata["GoodName"] = "direccion";
	$fdata["ownerTable"] = "cliente";
	$fdata["Label"] = GetFieldLabel("cliente","direccion");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
	
	
	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "direccion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direccion";

	
	
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
			$edata["EditParams"].= " maxlength=25";

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




	$tdatacliente["direccion"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "cliente";
	$fdata["Label"] = GetFieldLabel("cliente","email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
	
	
	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "email";

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




	$tdatacliente["email"] = $fdata;
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "cliente";
	$fdata["Label"] = GetFieldLabel("cliente","telefono");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
	
	
	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "telefono";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "telefono";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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




	$tdatacliente["telefono"] = $fdata;


$tables_data["cliente"]=&$tdatacliente;
$field_labels["cliente"] = &$fieldLabelscliente;
$fieldToolTips["cliente"] = &$fieldToolTipscliente;
$page_titles["cliente"] = &$pageTitlescliente;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cliente"] = array();
//	facturas
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="facturas";
		$detailsParam["dOriginalTable"] = "facturas";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "facturas";
	$detailsParam["dCaptionTable"] = GetTableCaption("facturas");
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
		
	$detailsTablesData["cliente"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cliente"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cliente"][$dIndex]["masterKeys"][]="idcliente";

				$detailsTablesData["cliente"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cliente"][$dIndex]["detailKeys"][]="cliente_idcliente";

// tables which are master tables for current table (detail)
$masterTablesData["cliente"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cliente()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "nit,  nombres,  apellidos,  direccion,  email,  telefono";
$proto0["m_strFrom"] = "FROM cliente";
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
	"m_strName" => "nit",
	"m_strTable" => "cliente",
	"m_srcTableName" => "cliente"
));

$proto6["m_sql"] = "nit";
$proto6["m_srcTableName"] = "cliente";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombres",
	"m_strTable" => "cliente",
	"m_srcTableName" => "cliente"
));

$proto8["m_sql"] = "nombres";
$proto8["m_srcTableName"] = "cliente";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "apellidos",
	"m_strTable" => "cliente",
	"m_srcTableName" => "cliente"
));

$proto10["m_sql"] = "apellidos";
$proto10["m_srcTableName"] = "cliente";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "cliente",
	"m_srcTableName" => "cliente"
));

$proto12["m_sql"] = "direccion";
$proto12["m_srcTableName"] = "cliente";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "cliente",
	"m_srcTableName" => "cliente"
));

$proto14["m_sql"] = "email";
$proto14["m_srcTableName"] = "cliente";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono",
	"m_strTable" => "cliente",
	"m_srcTableName" => "cliente"
));

$proto16["m_sql"] = "telefono";
$proto16["m_srcTableName"] = "cliente";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cliente";
$proto19["m_srcTableName"] = "cliente";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "idcliente";
$proto19["m_columns"][] = "nit";
$proto19["m_columns"][] = "nombres";
$proto19["m_columns"][] = "apellidos";
$proto19["m_columns"][] = "direccion";
$proto19["m_columns"][] = "email";
$proto19["m_columns"][] = "telefono";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cliente";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cliente";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cliente";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cliente = createSqlQuery_cliente();


	
		;

						

$tdatacliente[".sqlquery"] = $queryData_cliente;

$tableEvents["cliente"] = new eventsBase;
$tdatacliente[".hasEvents"] = false;

?>