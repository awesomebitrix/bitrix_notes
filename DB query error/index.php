Выводит ошибки на экран, при подключение БД

1) Открой файл /bitrix/php_interface/dbconn.php и вставь в самый низ файла строку $DBDebug=true;
2) После этого открой ту страницу где происходит "DB query error". На экране кроме этой надписи будет выведен полный текст ошибки.
