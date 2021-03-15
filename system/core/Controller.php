<?php


namespace system\core;


abstract class Controller
{
    protected $rout;
    protected $layout;
    protected $view;
    public $vars = [];
    public function __construct($rout, $view = '')
    {
        $this->rout = $rout;
        $this->view = $view ?: $rout['action'];
    }



    public function getView()
    {
        $objView = new View($this->rout, $this->layout, $this->view);
        $objView->render($this->vars);
    }

    public function setVars($vars)
    {
        $this->vars = $vars;
    }
    public function is_ajax() {
        return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower(getenv('HTTP_X_REQUESTED_WITH')) === 'xmlhttprequest'));
    }

}