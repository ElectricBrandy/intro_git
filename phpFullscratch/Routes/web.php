<?php

$url_text = $_GET['url'];
$params = explode("/", $url_text);

// var_dump ($params."<br>");
// var_dump ($params[0]."<br>");
// var_dump ($params[1]."<br>");

$webroot = $_SERVER['DOCUMENT_ROOT'];
include($webroot."/../app/HTTP/Controllers/PostsController.php");
$postsController = new PostsController();

switch ($params[0]){
    case"":
        $postsController->index();
        break;
    case "create":
        $postsController->create();  
        break;
}