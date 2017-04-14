Ссылка на выход с сайта

<a href="/?logout=Y"></a>

в хедере нужно вставить условие
<?
    if($USER->IsAuthorized() && $_GET['logout'] == 'Y'){
        $USER->Logout();
        LocalRedirect('/');
    }
?>
