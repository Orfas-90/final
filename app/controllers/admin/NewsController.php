<?php


namespace app\controllers\admin;
use app\models\News;
use app\models\User;

class NewsController extends AppController
{
    public function indexAction()
    {
		$active = 'news';
		$this->setVars(['active' => $active]);
		$newNews = new News();
        if(isset($_POST['title'], $_POST['text'], $_POST['detail'], $_POST['author'])) {
            $title = htmlspecialchars($_POST['title']);
            $text = htmlspecialchars($_POST['text']);
            $detail = htmlspecialchars($_POST['detail']);
            $author = htmlspecialchars($_POST['author']);
            if(isset($_FILES['immg'])){
                if($_FILES['immg']['error'] == 0){
                    $tmp_name = $_FILES["immg"]["tmp_name"];
                  
                    $uploads_dir = ROOT . '/public/images';
                    $name = time() . '_' . basename($_FILES["immg"]["name"]);
                    $img = "/public/images/$name";
                    move_uploaded_file($tmp_name, "$uploads_dir/$name");

                }
            }else{
                $img = '/images/noimage.jpg';
            }

			

		$newNews->setNews($title, $text, $detail, $author, $img);

        }
		$user = new User();
		if(isset($_POST['ex'])){
			$user->ex();
            header("Location: /admin/main");
			
		}

    }
}