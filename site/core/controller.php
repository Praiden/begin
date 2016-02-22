<?php
Abstract class Controller{

    protected $template;
    protected $layouts; // шаблон

    public $vars = array();

    // в конструкторе подключаем шаблоны
    function __construct() {
        // шаблоны
        $this->template = new Template($this->layouts, get_class($this));
    }

    abstract function index();

}