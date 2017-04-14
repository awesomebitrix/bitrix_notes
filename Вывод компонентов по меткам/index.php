Оборачиваем нужный компонент:
<?$this->SetViewTarget('ab_smart_filter');?>
тут вызов компонента
<?$this->EndViewTarget();?>
и выводим в нужном месте:
<?$APPLICATION->ShowViewContent('ab_smart_filter');?>
Название метки может быть произвольным, в моем примере - ab_smart_filter
