<?php


namespace admin\Controllers;


use Engine\AbstractController;

class LogoutController extends AbstractController
{
 function index()
 {
     session_destroy();
     header('Location: /admin/login');
 }
}