<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

if( is_array($arResult['ITEMS']) && count($arResult['ITEMS'])>0 ) {
	if( $arParams['RSMONOPOLY_SHOW_BLOCK_NAME']=='Y' ) {
		?><h2 class="coolHeading"><span class="secondLine"><?
			if( $arParams['RSMONOPOLY_BLOCK_NAME_IS_LINK']=='Y' && $arResult['LIST_PAGE_URL']!='' ) {
				?><a href="<?=( str_replace('//','/', str_replace('#SITE_DIR#',SITE_DIR,$arResult['LIST_PAGE_URL']) ) )?>"><?=$arResult["NAME"]?></a><?
			} else {
				?><?=$arResult["NAME"]?><?
			}
		?></span></h2><?
	}
	?><div class="<?if($arParams['RSMONOPOLY_USE_OWL']=='Y'):?>owl<?else:?>row<?endif;?> customerreviews" <?
		?>data-changespeed="<?if(IntVal($arParams["RSMONOPOLY_OWL_CHANGE_SPEED"])<1):?>2000<?else:?><?=$arParams["RSMONOPOLY_OWL_CHANGE_SPEED"]?><?endif;?>" <?
		?>data-changedelay="<?if(IntVal($arParams["RSMONOPOLY_OWL_CHANGE_DELAY"])<1):?>8000<?else:?><?=$arParams["RSMONOPOLY_OWL_CHANGE_DELAY"]?><?endif;?>" <?
		?>data-margin="35" <?
		?>data-responsive='{"0":{"items":"<?=(IntVal($arParams['RSMONOPOLY_OWL_PHONE'])>0?$arParams['RSMONOPOLY_OWL_PHONE']:1)?>"},"768":{"items":"<?=(IntVal($arParams['RSMONOPOLY_OWL_TABLET'])>0?$arParams['RSMONOPOLY_OWL_TABLET']:1)?>"},"991":{"items":"<?=(IntVal($arParams['RSMONOPOLY_OWL_PC'])>0?$arParams['RSMONOPOLY_OWL_PC']:1)?>"}}'<?
		?>><?
		foreach($arResult["ITEMS"] as $arItem) {

			if( $arItem['PREVIEW_TEXT']=='' ) {
				continue;
			}

			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

			?><div class="item<?if($arParams['RSMONOPOLY_USE_OWL']!='Y'):?> col col-md-<?=$arParams['RSMONOPOLY_COLS_IN_ROW']?><?endif;?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>"><?
				?><div class="row"><?
					?><div class="col col-md-12"><?
						?><div class="review"><div class="in"><?=$arItem['PREVIEW_TEXT']?></div><div class="arrow"><span></span></div></div><?
						?><div class="author"><?
							?><div class="image"><?
								if( $arItem['PREVIEW_PICTURE']['SRC']!='' ) {
									?><img u="image" border="0" <?
										?>src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" <?
										?>alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>" <?
										?>title="<?=$arItem['PREVIEW_PICTURE']['TITLE']?>" <?
									?>/><?
								} else {
									?><img u="image" border="0" <?
										?>src="<?=$templateFolder."/img/nopic.jpg"?>" <?
										?>alt="<?=$arItem['NAME']?>" <?
										?>title="<?=$arItem['NAME']?>" <?
									?>/><?
								}
							?></div><?
							?><div class="text"><?
								if($arItem['DISPLAY_PROPERTIES'][$arParams['RSMONOPOLY_AUTHOR_NAME']]['DISPLAY_VALUE']!='') {
									?><div class="name aprimary robotolight"><?=$arItem['DISPLAY_PROPERTIES'][$arParams['RSMONOPOLY_AUTHOR_NAME']]['DISPLAY_VALUE']?></div><?
								}
								if($arItem['DISPLAY_PROPERTIES'][$arParams['RSMONOPOLY_AUTHOR_JOB']]['DISPLAY_VALUE']!='') {
									?><div class="job"><?=$arItem['DISPLAY_PROPERTIES'][$arParams['RSMONOPOLY_AUTHOR_JOB']]['DISPLAY_VALUE']?></div><?
								}
							?></div><?
						?></div><?
					?></div><?
				?></div><?
			?></div><?
		}
	?></div><?
	if($arParams["DISPLAY_BOTTOM_PAGER"]) {
		echo $arResult["NAV_STRING"];
	}
}