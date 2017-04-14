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
