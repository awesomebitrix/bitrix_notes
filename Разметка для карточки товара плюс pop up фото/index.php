Слайдер карточки товара с увеличением фото
Перед этим нужно подключить fancyBox3
<!-- 1. Add latest jQuery and fancyBox files -->

<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>

<!-- Разметка слайдера -->
<!--Big img-->
 <div id="sync1" class="owl-carousel owl-theme">
     <?foreach ($arResult['PROPERTIES']['MORE_PHOTO']['VALUE'] as $photo){
         $renderImage = CFile::ResizeImageGet($photo, Array("width" => 350, "height" => 350), BX_RESIZE_IMAGE_ALT, false); ?>
        <?$realPath = CFile::GetFileArray($photo); ?>
         <div class="item">
             <a data-fancybox="gallery" href="<?=$realPath['SRC']?>"><img src="<?=$renderImage['src']?>"></a>
         </div>
    <? }?>
 </div>
 <!--Small img-->
 <div id="sync2" class="owl-carousel owl-theme">
     <?foreach ($arResult['PROPERTIES']['MORE_PHOTO']['VALUE'] as $photo){
         $smallImage = CFile::ResizeImageGet($photo, Array("width" => 90, "height" => 90), BX_RESIZE_IMAGE_ALT, false); ?>
         <div class="item">
             <img src="<?=$smallImage['src']?>" alt="img">
         </div>
     <?}?>
 </div>

<!-- // -->

Если нужно, чтобы детальная картинка и превью была так же в слайдере то в начале шаблона нужно добавить:

<?
$detailImg = $arResult['DETAIL_PICTURE'];
if(empty($detailImg)){
    $detailImg = $arResult['PREVIEW_PICTURE'];
}
if(!empty($detailImg)){
    $arResult['PROPERTIES']['MORE_PHOTO']['VALUE'] = array_merge([$detailImg['ID']], $arResult['PROPERTIES']['MORE_PHOTO']['VALUE']);
}
?>
