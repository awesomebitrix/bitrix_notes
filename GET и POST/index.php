Подключает метод GET и POST

/* *@var \Bitrix\Main\HttpRequest $request */
$request = \Bitrix\Main\Context::getCurrent()->getRequest();
$post = $request->getPostList()->toArray();
