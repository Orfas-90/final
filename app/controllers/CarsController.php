<?php


namespace app\controllers;


use app\models\Car;
use system\libs\Pagination;

class CarsController extends AppController
{
    public function indexAction()
    {

        $per_page = 6;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
		$active = 'cars';
        $car = new Car();
        $total = $car->getTotal();
        $pagination = new Pagination($page, $per_page, $total);

        $start = $pagination->getStart();

        $arrCar = $car->findLimit($start,  $per_page);

        $this->setVars(['car' => $arrCar, 'pagination' => $pagination, 'active' => $active]);

    }
}