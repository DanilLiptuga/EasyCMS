<?php


namespace admin\Controllers;


use Engine\AbstractController;

class LoginController extends AbstractController
{
    function index()
    {
        if (!isset($_SESSION['user'])){
            $this->data = [];
            $this->login();
            $this->view->render('Login',  $this->data);
        }
        else header('Location: /admin');
    }
    private function login(){
        if (isset($_POST['login_button'])){
            $sql = $this->queryBuilder->select()
                ->from('users')
                ->where('role','admin')
                ->where('email', $_POST['email'])
                ->sql();
            $admin = $this->db->query($sql, $this->queryBuilder->values);
            if ($admin){
                if (password_verify($_POST['password'], $admin[0]->password)){
                    $_SESSION['user'] = $admin[0];
                    header('Location: /admin/');
                }
                else   $this->data['error'] = 'Wrong password for ' . $_POST['email'];
            }
            else  $this->data['error'] = 'No user with such login';
        }
    }
}