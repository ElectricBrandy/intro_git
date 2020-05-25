<?php


// $a = "index";

// if($a == "index"){
//    echo "トップページです<br>";
// } else if($a =="create") {
//    echo "新規投稿ページです<br>";
// } else if($a == "show") {
//    echo "詳細表示ページです<br>";
// } else if($a == "edit") {
//    echo "編集画面です<br>";
// } else {
//    echo "該当しませんでした<br>";
// }    


$b = "sho";

switch ($b) {
    case "index":
        echo "トップページです<br>";
        break;
    case "create": 
        echo "新規投稿ページです<br>";
        break;
    case"show":
        echo "詳細表示ページです<br>";
        break;
    case "edit":
        echo "編集画面です<br>";
        break;
    default:
        echo "該当しませんでした";
}

?>