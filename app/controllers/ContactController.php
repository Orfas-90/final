<?php


namespace app\controllers;


use app\models\Comments;
use app\models\Contact;


class ContactController extends AppController
{
    public function indexAction()
    {
        $id = intval($this->rout['id']);
        $com = new Contact();
        if(isset($_POST['name'], $_POST['email'], $_POST['text'])) {
            $name = htmlspecialchars($_POST['name']);
            $text = htmlspecialchars($_POST['text']);
            $email = htmlspecialchars($_POST['email']);

            $com->setComments($name, $email, $text, $id);

        }


    }
}