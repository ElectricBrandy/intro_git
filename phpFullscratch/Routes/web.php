<?php

$url_text = $_GET['url'];
$params = explode("/", $url_text);

// var_dump ($params."<br>");
// var_dump ($params[0]."<br>");
// var_dump ($params[1]."<br>");

$webroot = $_SERVER['DOCUMENT_ROOT'];
$models = $webroot."/../app/";
$views = $webroot."/../resources/views/";

include($webroot."/../app/Http/Controllers/PostsController.php");
$postsController = new PostsController($models, $views);

switch ($params[0]){
    case "":
        $postsController->index();
        break;
    case "index":
        $postsController->index();
        break;
    case "create":
        $postsController->create();  
        break;
    case "store":
        $postsController->store();  
        break;
    case "show":
        $postsController->show($params[1]);  
        break;
    case "edit":
        $postsController->edit();  
        break;
}