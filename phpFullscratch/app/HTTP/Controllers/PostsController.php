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
        $values = $this->init();
        include($this->views."posts/create.php");
   }
   public function store()
   {
        $values = $this->init();
            
        include($this->models.'Post.php');
        $postmodel = new Post();
        $result = $postmodel->store();
        
        include($this->views."posts/create.php");
   }

   public function show($article_id)
   {
        $values = $this->init();
        
        include($this->models.'Post.php');
        $postmodel = new Post();
        $result = $postmodel->show($article_id);
        
        $post = $result[0];

        include($this->views."posts/show.php");
   }
   public function edit()
   {
        $values = $this->init();
        include($this->views."posts/edit.php");
   }

}




// $postmodel = new Post();
// $result = $postmodel->index();
// $posts = $result;

?>