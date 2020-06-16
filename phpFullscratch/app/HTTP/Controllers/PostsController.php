<?php

class PostsController
{
    //コンストラクタの定義
    public function __construct($models, $views)
    {
        $this->models = $models;
        $this->views = $views;
    }
    //layoutsのファイルパスを教えてあげる記述
    public function init() {
        $values = array(
            "layouts" => $this->views."layouts/",
        );
        return $values;
    }
    public function index()
   {
        $values = $this->init();
        //postmodelを呼び出すための前一文は。　
        include($this->models.'Post.php');
        $postmodel = new Post();
        $result = $postmodel->index();
        
        $posts = $result;
        //viewを呼び出す
        include($this->views."posts/index.php");

   }
   public function create()
   {
       echo "This is Create Page.";
   }
}



// $postmodel = new Post();
// $result = $postmodel->index();
// $posts = $result;

?>