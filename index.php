<?php

$data1 = [
    "title" => "skillhacks",
    "body" => "Web開発",
];

$data2 = [
    "title" => "bloghacks",
    "body" => "ブログ開発",
];

$data3 = [
    "title" => "moviehacks",
    "body" => "映像開発",
];

$data4 = [
    "title" => "designhacks",
    "body" => "デザイン開発",
];

$data5 = [
    "title" => "frontskillhacks",
    "body" => "フロントエンド開発",
];

$hacks = [$data1, $data2, $data3, $data4, $data5];

// echo $hacks;
// echo "<br>";
// var_dump($hacks);
// echo "<br>";

// foreach($hacks as $hack){
//     echo $hack["title"]."<br>";
//     echo $hack["body"]."<br>";
// }

?>

<!DOCTYPE html>
<html lang="jn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($hacks as $hack): ?>
    <div>
        <div>
        <h1><?php echo $hack["title"] ;?></h1>
        </div>
        <div>
        <p><?php echo $hack["body"] ;?></p>
        </div>
    </div>
    <?php endforeach;?>
</html>