<?php
//CONTROLLER

$postmodel = new Post();
$result = $postmodel->index();
$posts = $result;

?>