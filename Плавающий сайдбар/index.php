Плавающий сайдбар
Разметка:

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <!--контент-->
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="sidebar_wr">
                <div class="sidebar">
                    <!--тут пишем разметку-->
                </div>
            </div>
        </div>
    </div>
</div>

Далее качаем архив и подключаем его в header

После чего вызываем плагин в footer или в шаблоне компонента

<script type="text/javascript">
    //плавоющий сайдбар
    //настройки высоты
    $('.sidebar_wr').height(
        $('.container').height() - 200
    );
    //вызов плагина
    $('.sidebar').stickyfloat({duration: 350});
</script>


container - данный класс нужно вешать на тот контейнер который оборачивает весь контент на страницы.

sidebar_wr - данный класс вешаем на тот контейнер который оборачивает именно сам сайдбар.


//вызов плагина

sidebar - данный класс вызывает плагин и задает анимацию появления.


PS

Классы можем обзывать как угодно.
