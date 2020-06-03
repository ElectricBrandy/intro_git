<?php

class Post {
    Private $DB_HOST ="192.168.33.10";
    private $DB_NAME ="kishi_base";
    private $DB_USER ="root";
    private $DB_PASSWORD ="Yokashita48699684@";

    protected function db_access() {
        //PHPがエラーを吐くように設定　下の一文
        error_reporting(E_ALL & ~E_NOTICE);

        //データベースへの接続 dbh　php pdoとGoogle検索　そこから引用
        try {
            $dbh = new PDO('mysql:host='.$this->DB_HOST.';dbname='.$this->DB_NAME, $this->DB_USER, $this->DB_PASSWORD);
            return $dbh;
        } catch (PDOException $e) {
            echo "エラー!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function index() {
        $dbh = $this->db_access();

        $sql = 'SELECT * FROM posts';
        $stmt = $dbh->prepare($sql);
        
        $stmt->execute();
        $result = $stmt->fetchALL(PDO::FETCH_ASSOC);
       
        return $result;
    }
}

$postmodel = new Post();
$result = $postmodel->index();
$posts = $result;

//var_dump($posts[0]["title"]);
?>

<!DOCTYPE html>
<html lang="jn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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