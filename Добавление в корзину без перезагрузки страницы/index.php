создать файл /local/ajax/basket_add.php
в него положить
<?php require_once($_SERVER["DOCUMENT_ROOT"].'/bitrix/modules/main/include/prolog_before.php');?>
скопировать вызов компонента корзины из хедера и вставить ниже
скрипт вставить где подключаются все скрипты


'use strict';
$(function () {
	//корзина
	$('.basket_add_btn').click(function (ev) {
		ev.preventDefault();
		var url = $(this).attr('href') + '&ajax_basket=Y';

		$.get(url, function (data) {
			data = data.replace(/\'/g,'\"');
			var res = JSON.parse(data);
			if(res.STATUS == 'OK'){
				$.get('/local/ajax/basket_add.php').then(function (htmlBasket) {
					$('#update_basket_top').html(htmlBasket);
				});
				swal('', res.MESSAGE, 'success');
			} else {
				swal('', res.MESSAGE, 'error');
			}

		});
	});
});


 На кнопку повесить класс - basket_add_btn
 Весь вызов шаблона корзины обернуть в - id="update_basket_top" 
