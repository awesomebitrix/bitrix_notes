Подключение стилей и js файлов к шаблону Битрикс

<?$Asset = \Bitrix\Main\Page\Asset::getInstance();
$Asset->addCss("/local/src/css/normalize.css");
$Asset->addCss("/local/src/css/main.css");
$Asset->addJs("/local/src/js/main.js");
$Asset->addJs("/local/src/js/scripts.js");
$Asset->addString("https://fonts.googleapis.com/css?famil...-ext,latin' rel='stylesheet' type='text/css'>");
$Asset->addString("http://fonts.googleapis.com/css?famil...llic,latin' rel='stylesheet' type='text/css'/>");
$Asset->addString("https://fonts.googleapis.com/css?famil...,400italic' rel='stylesheet' type='text/css'>");
$Asset->addString("https://fonts.googleapis.com/css?famil...,700italic' rel='stylesheet' type='text/css'>");?> 
