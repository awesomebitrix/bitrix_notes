на серваке в папку /etc/php.d
в ставь в файл 15-xdebug.ini

; Enable xdebug extension module
; see http://xdebug.org/docs/all_settings
zend_extension=xdebug.so
xdebug.var_display_max_children = -1
xdebug.var_display_max_data = -1
xdebug.var_display_max_depth = -1

и потом рестарт апача

service httpd restart
