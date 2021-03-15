<?php

namespace app\controllers;
use app\models\Car;
use system\core\Controller;

class MainController extends AppController
{



    public function indexAction()
    {
		$active = 'main';
        $car = new Car();
        $arrCar = $car->findAll();

        $this->setVars(['car' => $arrCar, 'title' => $arrCar[0], 'active' => $active]);
    }

    public function testAction()
    {

    }
    public function check()
    {

    }
}