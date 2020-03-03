<?php
namespace admin\Controllers;

use Engine\AbstractController;

class DashboardController extends AbstractController
{
    function index(){
        if ($_SESSION['user']->role != 'admin') {
            header('Location: /admin/login');
        }
        $this->view->render('Dashboard');
    }
}