<?php


namespace app\controllers;


use app\models\Comments;
use app\models\Single;

class SingleController extends AppController
{
    public function indexAction()
    {
		$active = 'news';
        $this->setVars(['active' => $active]);
        $id = intval($this->rout['id']);
        $single = new Single();
        $com = new Comments();
        if(isset($_POST['name'], $_POST['text'])) {
            if($this->is_ajax()){
                $this->layout = false;
                $name = htmlspecialchars($_POST['name']);
                $text = htmlspecialchars($_POST['text']);
                $com->setComments($name, $text, $id);
                //echo json_encode(['success'=>true, 'mess'=>'Ваш комментарий добавлен']);

            }




        }
        $result = $single->findOne($id);
        $arrCom = $com->findOne($id, 'id_news');
        if(!empty($result)){
            $this->setVars(['detail' => $result[0], 'com' => $arrCom, 'active' => $active]);
        }



    }
}