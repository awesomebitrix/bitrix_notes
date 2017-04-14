<?function setSimCode(&$arFields)
{
	if ((int)$arFields['ID'] > 0){
		$CIBlockElement = new CIBlockElement();
		$element = $CIBlockElement->GetList(
			array(),
			array('=ID' => $arFields['ID']),
			false,
			array('nTopCount' => 1),
			array('ID', 'IBLOCK_ID', 'NAME', 'CODE')
		)->Fetch();
		if(strlen($element['CODE']) == 0){
			$code = CUtil::translit($element['NAME'], 'ru');
			$CIBlockElement->Update($element['ID'], ['CODE' => $code]);
		}
	}
}
AddEventHandler('iblock', 'OnAfterIBlockElementUpdate', 'setSimCode');
AddEventHandler('iblock', 'OnAfterIBlockElementAdd', 'setSimCode');?>
