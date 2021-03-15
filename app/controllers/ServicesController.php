<?php

namespace app\controllers;

class ServicesController extends AppController
{
    public function indexAction()
    {
		$active = 'servises';
        
        $this->setVars(['active' => $active]);

    }
}