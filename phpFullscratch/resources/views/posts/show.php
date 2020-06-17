<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include($values["layouts"]."meta.php");?>
</head>
<body>
    <?php include($values["layouts"]."header.php");?>
    <main>
        <div class="container">  
            <div class="my-4 text-right">
                <a href="/edit" class="btn btn-primary">
                   編集する
                </a>
                <a href="" class="btn btn-danger">
                   削除する
                </a>
            </div>
            
                <div class="card mb-4">
                    <div class="card-header">
                        <h2><?php echo "SkillHacks";?></h1>
                    </div>
                    <div class="card-body">
                        <p><?php echo "Webアプリ講座";?></p>
                    </div>
                </div>
            
        </div>        
    </main>
    <?php include($values["layouts"]."footer.php");?>
</body>
</html>