<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if(!CModule::IncludeModule("catalog"))
	return;

if(COption::GetOptionString("redsign.flyaway", "wizard_installed", "N", WIZARD_SITE_ID) == "Y" && !WIZARD_INSTALL_DEMO_DATA)
	return;

//offers iblock import
$shopLocalization = $wizard->GetVar("shopLocalization");
/*
$iblockXMLFileOffers = "/bitrix/modules/redsign.flyaway/install/public/xml/".LANGUAGE_ID."/catalog_sku.xml";
if ($shopLocalization == "ua")
	$iblockXMLFilePricesOffers = "/bitrix/modules/redsign.flyaway/install/public/xml/".LANGUAGE_ID."/catalog_prices_sku_ua.xml";
elseif ($shopLocalization == "bl")
	$iblockXMLFilePricesOffers = "/bitrix/modules/redsign.flyaway/install/public/xml/".LANGUAGE_ID."/catalog_prices_sku_bl.xml";
else
	$iblockXMLFilePricesOffers = "/bitrix/modules/redsign.flyaway/install/public/xml/".LANGUAGE_ID."/catalog_prices_sku.xml";
*/
$iblockXMLFileOffers		= WIZARD_SERVICE_RELATIVE_PATH.'/xml/ru/catalog/offers.xml';
$iblockXMLFilePricesOffers	= WIZARD_SERVICE_RELATIVE_PATH.'/xml/ru/catalog/offers_prices.xml'; 

if (WIZARD_THEME_ID != 'default' && file_exists(WIZARD_SERVICE_ABSOLUTE_PATH.'/xml/ru/theme/'.WIZARD_THEME_ID.'/offers.xml')) {
	$iblockXMLFileOffers			= WIZARD_SERVICE_RELATIVE_PATH.'/xml/ru/theme/'.WIZARD_THEME_ID.'/offers.xml';
	$iblockXMLFilePricesOffers		= WIZARD_SERVICE_RELATIVE_PATH.'/xml/ru/theme/'.WIZARD_THEME_ID.'/offers_prices.xml';
}

$iblockCodeOffers = "flyaway_offers_".WIZARD_SITE_ID;
$iblockTypeOffers = "offers";

$rsIBlock = CIBlock::GetList(array(), array("XML_ID" => $iblockCodeOffers, "TYPE" => $iblockTypeOffers));
$IBLOCK_OFFERS_ID = false;
if ($arIBlock = $rsIBlock->Fetch())
{
	$IBLOCK_OFFERS_ID = $arIBlock["ID"];
	if (WIZARD_INSTALL_DEMO_DATA)
	{
		CIBlock::Delete($arIBlock["ID"]);
		$IBLOCK_OFFERS_ID = false;
	}
}
//--offers

if($IBLOCK_OFFERS_ID == false)
{
	$permissions = Array(
			"1" => "X",
			"2" => "R"
		);
	$dbGroup = CGroup::GetList($by = "", $order = "", Array("STRING_ID" => "sale_administrator"));
	if($arGroup = $dbGroup -> Fetch())
	{
		$permissions[$arGroup["ID"]] = 'W';
	}
	$dbGroup = CGroup::GetList($by = "", $order = "", Array("STRING_ID" => "content_editor"));
	if($arGroup = $dbGroup -> Fetch())
	{
		$permissions[$arGroup["ID"]] = 'W';
	}

	\Bitrix\Catalog\Product\Sku::disableUpdateAvailable();
	$IBLOCK_OFFERS_ID = WizardServices::ImportIBlockFromXML(
		$iblockXMLFileOffers,
		"offers",
		$iblockTypeOffers,
		WIZARD_SITE_ID,
		$permissions
	);
	$iblockID1 = WizardServices::ImportIBlockFromXML(
		$iblockXMLFilePricesOffers,
		"offers",
		$iblockTypeOffers."_prices",
		WIZARD_SITE_ID,
		$permissions
	);
	\Bitrix\Catalog\Product\Sku::enableUpdateAvailable();

	if ($IBLOCK_OFFERS_ID < 1)
		return;

	$_SESSION["WIZARD_OFFERS_IBLOCK_ID"] = $IBLOCK_OFFERS_ID;
}
else
{
	$arSites = array();
	$db_res = CIBlock::GetSite($IBLOCK_OFFERS_ID);
	while ($res = $db_res->Fetch())
		$arSites[] = $res["LID"];
	if (!in_array(WIZARD_SITE_ID, $arSites))
	{
		$arSites[] = WIZARD_SITE_ID;
		$iblock = new CIBlock;
		$iblock->Update($IBLOCK_OFFERS_ID, array("LID" => $arSites));
	}
}
