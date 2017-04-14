 Быстро и просто поменяет размер картинок

 <? $renderImage = CFile::ResizeImageGet($arElement["DETAIL_PICTURE"], Array("width" => 330, "height" => 187), BX_RESIZE_IMAGE_EXACT, false); ?>
<img src="<?=$renderImage['src']?>" alt="<?=$arElement['NAME']?>" />

<!-- // -->
BX_RESIZE_IMAGE_EXACT - масштабирует в прямоугольник $arSize c сохранением пропорций, обрезая лишнее;
BX_RESIZE_IMAGE_PROPORTIONAL - масштабирует с сохранением пропорций, размер ограничивается $arSize;
BX_RESIZE_IMAGE_PROPORTIONAL_ALT - масштабирует с сохранением пропорций за ширину при этом принимается максимальное значение из высоты/ширины, размер ограничивается $arSize, улучшенная обработка вертикальных картинок.

<!-- // -->

С помощью данной функции можно вывести картинку раздела.
Этот пример выводит изображение без ресайз функции:

<? $arSection["PICTURE"] = CFile::GetFileArray($arSection["PICTURE"]) ?>
<img src="<?= $arSection["PICTURE"]["SRC"] ?>" alt="<?= $arSection["NAME"] ?>"/>

<!-- // -->

Этот метод с ресайз функцией

<? $file = CFile::ResizeImageGet($arSection['PICTURE'], array('width' => 150, 'height' => 150), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
<img src="<?= $file['src'] ?>"/>
