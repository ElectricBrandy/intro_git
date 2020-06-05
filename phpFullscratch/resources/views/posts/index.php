<!DOCTYPE html>
<html lang="jn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hacks</title>
</head>
<!--VIEWの部分-->
<body>
    <?php foreach($posts as $post):?> 
        <div>
            <h1><?php echo $post["title"];?></h1>
        </div>
        <div>
            <p><?php echo $post["body"];?></p>
        </div>
    <?php endforeach; ?> 
</body>
</html>