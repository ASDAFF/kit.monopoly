<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:catalog",
	"flyaway",
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"ALSO_BUY_ELEMENT_COUNT" => "7",
		"ALSO_BUY_MIN_BUYES" => "7",
		"BASKET_URL" => "#SITE_DIR#personal/cart/",
		"BIG_DATA_RCM_TYPE" => "bestsell",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMMON_ADD_TO_BASKET_ACTION" => "",
		"COMMON_SHOW_CLOSE_POPUP" => "N",
		"COMPARE_ELEMENT_SORT_FIELD" => "sort",
		"COMPARE_ELEMENT_SORT_ORDER" => "asc",
		"COMPARE_FIELD_CODE" => array(
			0 => "ID",
			1 => "PREVIEW_PICTURE",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
		"COMPARE_PROPERTY_CODE" => array(
			0 => "CML2_ARTICLE",
			1 => "ACTION_ITEM",
			2 => "BEST_SELLER",
			3 => "NEW_ITEM",
			4 => "BRAND",
			5 => "MOSHNOST",
			6 => "DIAMETR",
			7 => "COLOR_HL",
			8 => "PRICE",
			9 => "",
		),
		"COMPONENT_TEMPLATE" => "flyaway",
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
		"DETAIL_ADD_TO_BASKET_ACTION" => array(
			0 => "BUY",
		),
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"DETAIL_BRAND_USE" => "N",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"DETAIL_DETAIL_PICTURE_MODE" => "IMG",
		"DETAIL_DISPLAY_NAME" => "Y",
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_OFFERS_FIELD_CODE" => array(
			0 => "ID",
			1 => "PREVIEW_PICTURE",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"DETAIL_OFFERS_PROPERTY_CODE" => array(
			0 => "COLOR_DIRECTORY",
			1 => "SKU_FASOVKA",
			2 => "SKU_SIZE",
			3 => "MORE_PHOTO",
			4 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "31",
			1 => "32",
			2 => "33",
			3 => "35",
			4 => "36",
			5 => "37",
			6 => "CML2_ARTICLE",
			7 => "ACTION_ITEM",
			8 => "BEST_SELLER",
			9 => "NEW_ITEM",
			10 => "BRAND",
			11 => "MOSHNOST",
			12 => "DIAMETR",
			13 => "YOUTUBE_VIDEO",
			14 => "FORUM_MESSAGE_CNT",
			15 => "vote_count",
			16 => "HOD",
			17 => "rating",
			18 => "vote_sum",
			19 => "FORUM_TOPIC_ID",
			20 => "AKKUMULATOR",
			21 => "FOR_TAB_SOSTAV",
			22 => "ACCESSORIES",
			23 => "COLOR_HL",
			24 => "PRICE",
			25 => "CURRENCY",
			26 => "DISCOUNT",
			27 => "QUANTITY",
			28 => "DOCS",
			29 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_SHOW_BASIS_PRICE" => "Y",
		"DETAIL_SHOW_MAX_QUANTITY" => "N",
		"DETAIL_USE_COMMENTS" => "N",
		"DETAIL_USE_VOTE_RATING" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_ELEMENT_SELECT_BOX" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FIELDS" => array(
			0 => "TITLE",
			1 => "ADDRESS",
			2 => "PHONE",
			3 => "SCHEDULE",
			4 => "EMAIL",
			5 => "",
		),
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "arrFilter",
		"FILTER_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_OFFERS_PROPERTY_CODE" => array(
			0 => "COLOR_DIRECTORY",
			1 => "SKU_FASOVKA",
			2 => "SKU_SIZE",
			3 => "",
		),
		"FILTER_PRICE_CODE" => array(
			0 => "BASE",
			1 => "second",
			2 => "WHOLE",
			3 => "RETAIL",
			4 => "EXTPRICE",
			5 => "EXTPRICE2",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "ACTION_ITEM",
			1 => "BEST_SELLER",
			2 => "NEW_ITEM",
			3 => "BRAND",
			4 => "MOSHNOST",
			5 => "DIAMETR",
			6 => "FORUM_TOPIC_ID",
			7 => "",
		),
		"FILTER_VIEW_MODE" => "VERTICAL",
		"FORUM_ID" => "#FORUM_ID#",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "#IBLOCK_ID_catalog_catalog#",
		"IBLOCK_TYPE" => "catalog",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => "-",
		"LINE_ELEMENT_COUNT" => "6",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"LINK_IBLOCK_ID" => "#IBLOCK_ID_catalog_catalog#",
		"LINK_IBLOCK_TYPE" => "catalog",
		"LINK_PROPERTY_SID" => "",
		"LIST_BROWSER_TITLE" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_META_KEYWORDS" => "-",
		"LIST_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_OFFERS_LIMIT" => "0",
		"LIST_OFFERS_PROPERTY_CODE" => array(
			0 => "COLOR_DIRECTORY",
			1 => "SKU_FASOVKA",
			2 => "SKU_SIZE",
			3 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "ACTION_ITEM",
			1 => "BEST_SELLER",
			2 => "NEW_ITEM",
			3 => "",
		),
		"MAIN_TITLE" => "Наличие",
		"MESSAGES_PER_PAGE" => "4",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_COMPARE" => "Сравнение",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"MIN_AMOUNT" => "10",
		"OFFERS_CART_PROPERTIES" => array(
		),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_FIELD2" => "shows",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_ORDER2" => "asc",
		"OFFER_ADD_PICT_PROP" => "-",
		"OFFER_TREE_PROPS" => array(
			0 => "COLOR_DIRECTORY",
			1 => "SKU_FASOVKA",
		),
		"OFFER_TREE_COLOR_PROPS" => array(
			0 => "COLOR_DIRECTORY",
		),
		"OFFER_TREE_BTN_PROPS" => array(
			0 => "SKU_FASOVKA",
		),
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "flyaway",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "3",
		"PARTIAL_PRODUCT_PROPERTIES" => "Y",
		"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
		"PRICE_CODE" => array(
			0 => "BASE",
			1 => "second",
			2 => "WHOLE",
			3 => "RETAIL",
			4 => "EXTPRICE",
			5 => "EXTPRICE2",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_DISPLAY_MODE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(
		),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PROPS_TABS" => array(
			0 => "SIMILAR_PRODUCTS",
			1 => "YOUTUBE_VIDEO",
			2 => "ACCESSORIES",
		),
		"REVIEW_AJAX_POST" => "Y",
		"RSFLYAWAY_CREDIT_BTN_LINK" => "#SITE_DIR#kredit/",
		"RSFLYAWAY_PROP_ARTICLE" => "CML2_ARTICLE",
		"RSFLYAWAY_PROP_MORE_PHOTO" => "MORE_PHOTO",
		"RSFLYAWAY_PROP_SKU_ARTICLE" => "-",
		"RSFLYAWAY_PROP_SKU_MORE_PHOTO" => "MORE_PHOTO",
		"RSFLYAWAY_SHOW_CREDIT_BTN" => "Y",
		"RSFLYAWAY_SHOW_RECOMMENDED_PRODUCTS" => "Y",
		"RSFLYAWAY_SHOW_SETS" => "Y",
		"RSFLYAWAY_SHOW_SORTER" => "Y",
		"RSFLYAWAY_SHOW_VIEWED_PRODUCTS" => "Y",
		"RSFLYAWAY_SORTER_SHOW_PAGE_COUNT" => "Y",
		"RSFLYAWAY_SORTER_SHOW_SORTING" => "Y",
		"RSFLYAWAY_SORTER_SHOW_TEMPLATE" => "Y",
		"RSFLYAWAY_SORTER_TEMPLATE_DEFAULT" => "showcase",
		"SECTIONS_HIDE_SECTION_NAME" => "N",
		"SECTIONS_SHOW_PARENT_NAME" => "Y",
		"SECTIONS_VIEW_MODE" => "VIEW_ELEMENTS",
		"SECTION_ADD_TO_BASKET_ACTION" => "ADD",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"SECTION_COUNT_ELEMENTS" => "N",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_TOP_DEPTH" => "5",
		"SEF_FOLDER" => "#SITE_DIR#catalog/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_DEACTIVATED" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_EMPTY_STORE" => "Y",
		"SHOW_GENERAL_STORE_INFORMATION" => "N",
		"SHOW_LINK_TO_FORUM" => "Y",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_TOP_ELEMENTS" => "N",
		"SHOW_ERROR_EMPTY_ITEMS" => "Y",
		"SIDEBAR_DETAIL_SHOW" => "Y",
		"SIDEBAR_PATH" => "",
		"SIDEBAR_SECTION_SHOW" => "Y",
		"STORES" => array(
			0 => "1",
			1 => "2",
			2 => "3",
		),
		"STORES_FIELDS" => array(
			0 => "TITLE",
			1 => "ADDRESS",
			2 => "",
		),
		"STORE_PATH" => "#SITE_DIR#store/#store_id#",
		"TEMPLATE_THEME" => "blue",
		"TOP_ADD_TO_BASKET_ACTION" => "ADD",
		"TOP_ELEMENT_COUNT" => "9",
		"TOP_ELEMENT_SORT_FIELD" => "sort",
		"TOP_ELEMENT_SORT_FIELD2" => "id",
		"TOP_ELEMENT_SORT_ORDER" => "asc",
		"TOP_ELEMENT_SORT_ORDER2" => "desc",
		"TOP_LINE_ELEMENT_COUNT" => "3",
		"TOP_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"TOP_VIEW_MODE" => "SECTION",
		"URL_TEMPLATES_READ" => "",
		"USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"USE_ALSO_BUY" => "Y",
		"USE_BIG_DATA" => "Y",
		"USE_CAPTCHA" => "Y",
		"USE_COMMON_SETTINGS_BASKET_POPUP" => "N",
		"USE_COMPARE" => "Y",
		"USE_ELEMENT_COUNTER" => "N",
		"USE_FILTER" => "Y",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_MIN_AMOUNT" => "Y",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "Y",
		"USE_REVIEW" => "Y",
		"USE_SALE_BESTSELLERS" => "Y",
		"USE_STORE" => "Y",
		"RSFLYAWAY_USE_FAVORITE" => "Y",
		"RSFLYAWAY_PROP_OFF_POPUP" => "N",
		"SORTER_USE_AJAX" => "Y",
		"FILTER_USE_AJAX" => "Y",
		"SHOW_SECTION_URL" => "Y",
		"RSFLYAWAY_PROP_BRAND" => "BRAND",
		"DETAIL_TABS_VIEW" => "",
		"FILTER_PROP_SEARCH" => array(
			0 => "BRAND",
		),
		"COMPARE_OFFERS_FIELD_CODE" => array(
			0 => "ID",
			1 => "",
		),
		"COMPARE_OFFERS_PROPERTY_CODE" => array(
			0 => "COLOR_DIRECTORY",
			1 => "SKU_FASOVKA",
			2 => "SKU_SIZE",
			3 => "",
		),
		"COMPARE_POSITION_FIXED" => "Y",
		"COMPARE_POSITION" => "top left",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DETAIL_SET_VIEWED_IN_COMPONENT" => "N",
		"USE_BLOCK_MODS" => "Y",
		"MODS_BLOCK_NAME" => "Модификации",
		"USE_GIFTS_DETAIL" => "Y",
		"USE_GIFTS_SECTION" => "Y",
		"USE_GIFTS_MAIN_PR_SECTION_LIST" => "Y",
		"GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "3",
		"GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",
		"GIFTS_DETAIL_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "3",
		"GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",
		"GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
		"GIFTS_SHOW_OLD_PRICE" => "Y",
		"GIFTS_SHOW_NAME" => "Y",
		"GIFTS_SHOW_IMAGE" => "Y",
		"GIFTS_MESS_BTN_BUY" => "Выбрать",
		"GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "3",
		"GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "Выберите один из товаров, чтобы получить подарок",
		"RSFLYAWAY_HIDE_BASKET_POPUP" => "N",
        "RS_SORTER_OUTPUT_OF" => array(
			0 => "5",
			1 => "10",
			2 => "15",
			3 => "20",
			4 => "45",
			5 => "60",
			6 => "",
		),
		"RS_SORTER_OUTPUT_DEFAULT" => "20",
        "RS_SORTER_OUTPUT_ALL" => "N",
		"RS_SORTER_TEMPLATES" => array(
			0 => "showcase",
			1 => "list",
			2 => "list_little",
			3 => "showcase_little",
		),
        "RS_DEFAULT_SORT" => "PROPERTY_PRICE_FALSE",
		"RS_DEFAULT_SORT_TYPE" => "asc",
		"RS_SORTER_AVAILABLE_SORTS" => array(
			0 => "price",
			1 => "name",
			2 => "sort",
			3 => "",
		),
		"RS_SORTER_PRICE_USE_PROPERTY" => "N",
		"RS_SORTER_PRICE_CODE" => "PRICE_FALSE",
        "RS_SORTER_PRICE_ID" => "BASE",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"element" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
			"compare" => "compare.php?action=#ACTION_CODE#",
			"smart_filter" => "#SECTION_CODE_PATH#/filter/#SMART_FILTER_PATH#/apply/",
		),
		"VARIABLE_ALIASES" => array(
			"compare" => array(
				"ACTION_CODE" => "action",
			),
		)
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
