<?php


namespace app\controllers;


use app\models\News;
use system\libs\Pagination;

class BlogController extends AppController
{
    public function indexAction()
    {
        $per_page = 6;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;

		$active = 'news';
        $news = new News();
        $total = $news->getTotal();
        $pagination = new Pagination($page, $per_page, $total);

        $start = $pagination->getStart();

        $arrNews = $news->findLimit($start,  $per_page);

        $this->setVars(['news' => $arrNews, 'pagination' => $pagination, 'active' => $active]);

    }
}