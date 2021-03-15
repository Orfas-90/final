<?php


namespace app\controllers\admin;



use app\models\Contact;
use app\models\User;
use system\libs\Pagination;

class MainController extends AppController
{
    public function indexAction()
    {
		$con = new Contact();
		$per_page = 3;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $total = $con->getTotal();
        $pagination = new Pagination($page, $per_page, $total);

        $start = $pagination->getStart();

        $arrCon = $con->findLimit($start,  $per_page);
		
        
		$active = 'main';
        
		
		if(isset($_POST['change'])) {
            $id = htmlspecialchars($_POST['st']);
            $con->setStatus($id);
		}
		
        $this->setVars(['con' => $arrCon, 'active' => $active, 'pagination' => $pagination]);

		$user = new User();
		if(isset($_POST['ex'])){
			$user->ex();
            header("Location: /admin/main");
			
		}
    }
	


    public function loginAction()
    {

        $this->layout = 'login';
        $user = new User();
        if(isset($_POST['login'], $_POST['password'])){
            if($_POST['login'] != '' && $_POST['password'] != ''){

                $id = $user->auth($_POST['login'], $_POST['password']);
                if(false !== $id){
                    $user->login($id);
                    header("Location: /admin");
                    die();
                }else{
                    $_SESSION['error'] = 'не верно указан логин/пароль';
                }
            }else{
                $_SESSION['error'] = 'не указан логин/пароль';
            }

        }
		
    }
}