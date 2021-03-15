<?php


namespace app\controllers\admin;
use app\models\Car;
use app\models\User;

class CarsController extends AppController
{
    public function indexAction()
    {
		$active = 'cars';
		$this->setVars(['active' => $active]);
		$newCar = new Car();
        if(isset($_POST['name'], $_POST['doors'], $_POST['seets'], $_POST['transm'], $_POST['year'], $_POST['prise'])) {
            $сname = htmlspecialchars($_POST['name']);
            $doors = htmlspecialchars($_POST['doors']);
            $seets = htmlspecialchars($_POST['seets']);
            $transm = htmlspecialchars($_POST['transm']);
            $year = htmlspecialchars($_POST['year']);
            $prise = htmlspecialchars($_POST['prise']);
			if(isset($_FILES['img'])){
                if($_FILES['img']['error'] == 0){
                    $tmp_name = $_FILES["img"]["tmp_name"];
                  
                    $uploads_dir = ROOT . '/public/images';
                    $name = time() . '_' . basename($_FILES["img"]["name"]);
                    $img = "/public/images/$name";
                    move_uploaded_file($tmp_name, "$uploads_dir/$name");

                }
            }else{
				$img = '/images/noimage.jpg';
			}
			

            $newCar->setCars($сname, $doors, $seets, $transm, $year, $prise, $img);

        }
		$user = new User();
		if(isset($_POST['ex'])){
			$user->ex();
            header("Location: /admin/main");
			
		}
    }
}