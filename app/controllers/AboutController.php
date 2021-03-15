<?php


namespace app\controllers;


class AboutController extends AppController
{
    public function indexAction()
    {
		$active = 'about';
        
        $this->setVars(['active' => $active]);

    }
}