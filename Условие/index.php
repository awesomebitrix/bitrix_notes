Простое условие которое рассчитано для решения простой задачи.
В данном пример показано, что если скидка есть то выводим цену со скидкой, если же скидки нет то выводим цену без скидки.

<? if ($arElement["OFFERS"]["0"]['PRICES']['BASE']['DISCOUNT_DIFF'] > 0): ?>
<div class="b-item__price b-item__price_old"><?= $arElement["OFFERS"]["0"]["PRICES"]["BASE"]["VALUE"] ?>
<sup>₽</sup></div>
<div class="b-item__price b-item__price_red"><?= $arElement["OFFERS"]["0"]["PRICES"]["BASE"]["DISCOUNT_VALUE"] ?>
<sup>₽</sup></div>
<? else: ?>
<div class="b-item__price b-item__price_red"><?= $arElement["OFFERS"]["0"]["PRICES"]["BASE"]["VALUE"] ?>
<sup>₽</sup></div>
<? endif; ?>


<!-- // -->

Простое условия но пользуюсь довольно часто, если нужно скрыть какой-то элемент только на главной страницы, а на других показывать.

<?if($APPLICATION->GetCurDir() != '/'){?>
  Тут пишем, что нужно скрыть
<?}?>

<!-- // -->

Простое условия но пользуюсь довольно часто, если нужно показать какой-то элемент только на главной страницы, а на других скрыть.

<?if($APPLICATION->GetCurDir() == '/'){?>
  тут то, что нужно показать
<?}?>

<!-- // -->

Условие если админ то применяем вот такие стили. Пишем в head

<?if($USER->IsAdmin()):?>
  <style>.header{top:auto !important;}</style>
<?endif?>

<!-- // -->

Условие когда нам нужно что то не показывать на главной и еще на определенной внутренней страницы.

<?if($APPLICATION->GetCurDir() != '/' && $APPLICATION->GetCurDir() != '/URL_СТРАНИЦЫ/' ){?>
    .......
<?}?>
