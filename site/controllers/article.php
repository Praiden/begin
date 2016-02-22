<?php

class Article extends Controller{

    // шаблон
    public $layouts = "layout";


    // экшен
    public function index() {

        $model = new Article_Model(["WHERE" => 1 ]); // создаем объект модели
        $article = $model->getAllRows(); // получаем стать



        $this->template->vars('article', $article);
        $this->template->view('index');
    }

    public function create(){
        if(isset($_REQUEST['name']) && isset($_REQUEST['review']){

        }
    }



}