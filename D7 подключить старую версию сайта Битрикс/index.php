D7 подключить старую версию сайта Битрикс на седьмое окружение

в dbconn заменить
define("BX_USE_MYSQLI", false);
на
define("BX_USE_MYSQLI", true);

в .settings заменить
'className' => '\\Bitrix\\Main\\DB\\MysqlConnection',
на
'className' => '\\Bitrix\\Main\\DB\\MysqliConnection',
