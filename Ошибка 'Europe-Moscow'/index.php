При установки системы выдает ошибку, как исправить.

[Bitrix\Main\DB\SqlQueryException]  Mysql query error: (1298) Unknown or incorrect time zone: 'Europe/Moscow' (400)

Лечение.

Нудно открыть папку:

Bitrix > php_interface > after_connect_d7.php - открыть данный файл.

Bitrix > php_interface > after_connect.php - открыть данный файл.

Заменить строки

$connection->queryExecute("SET LOCAL time_zone='Europe/Moscow'");
на

$connection->queryExecute("SET LOCAL time_zone='".date('P')."'");
