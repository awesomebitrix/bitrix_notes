Ключ для вывода конкретного раздела (для комплексного компонента)

"PARENT_SECTION" => "пишем тут ID раздела",

<!-- // -->

Выключить раздел или включить из цепочки навигации

"ADD_SECTIONS_CHAIN" => "выкл - N вкл - Y",

<!-- // -->

Данный пример выведет количество просмотров статей, часто используется для блогов к постам.

<?=$arItem ['SHOW_COUNTER'];?>


<!-- // -->

С помощью данного кода можно вывести вывод кнопки на скачивание доп. материалов к посту. Перед эти конечно же нужно создать свойство ATT_DOUNLOAD в настройках информационного блока.

<?if ($arResult["DISPLAY_PROPERTIES"]["ATT_DOUNLOAD"]["FILE_VALUE"]["SRC"]):?>
  <div class="dop_file_detelca">
    <a href="<?=$arResult["DISPLAY_PROPERTIES"]["ATT_DOUNLOAD"]["FILE_VALUE"]["SRC"]?>"><?=$arResult["DISPLAY_PROPERTIES"]["ATT_DOUNLOAD"]["~NAME"]?></a>
  </div>
<?else:?>
<?endif;?>

<!-- // -->

result_modifier.php - Данный код нужен для вывода категорий через newe_list. Этот файл нужно закинуть в корень шаблона компонента newe_list и работать с $arResult['SECTION_ITEMS']

<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$oSection = Bitrix\Iblock\SectionTable::getList([
	'select' => array('ID','NAME'),
	'filter' => array('IBLOCK_ID' => $arParams['IBLOCK_ID'], 'ACTIVE' => 'Y'),
	'order' => array('SORT'=>'ASC')
]);

$arResult['SECTION_ITEMS'] = [];
while ($section = $oSection->fetch()){
	foreach ($arResult['ITEMS'] as $item) {
		if($item['IBLOCK_SECTION_ID'] == $section['ID']){
			$section['ITEMS'][] = $item;
		}
	}
	$arResult['SECTION_ITEMS'][$section['ID']] = $section;
}
?>


<!-- // -->

Шаблон для списка новостей, чтобы первый элемент был активным, удобно использовать для аккордеонов на сайте.

<? foreach ($arResult["ITEMS"] as $k => $arItem): ?>

class="my_class <?=($k ==0 ? ' active' : false)?>"

<? endforeach; ?>

пример шаблона табов на основе ньюс лист

<div class="accordion-container">
    <? foreach ($arResult["ITEMS"] as $k => $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="set">
            <a href="javascript:" class="my_class <?=($k ==0 ? ' active' : false)?>">
                <? echo $arItem["NAME"] ?>
                <i class="fa <?=($k ==0 ? 'fa-minus' : 'fa-plus')?>" aria-hidden="true"></i>
            </a>

            <div class="content"  style="<?=($k ==0 ? 'display: block;' : false)?>">
                <p><? echo $arItem["PREVIEW_TEXT"]; ?></p>
            </div>
        </div>
    <? endforeach; ?>
</div> 
