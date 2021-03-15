<?php


namespace app\controllers\admin;


use system\core\Controller;

class AppController extends Controller
{
    protected $layout = 'admin';
    public function __construct($rout, $view = '')
    {
        parent::__construct($rout, $view);
        if(!isset($_SESSION['is_admin']) && $this->rout['action'] != 'login'){
            header('Location: /admin/main/login');
            die();
        }
    }
}