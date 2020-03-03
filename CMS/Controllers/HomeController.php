<?php


namespace CMS\Controllers;


use Engine\AbstractController;

class HomeController extends AbstractController
{
    protected $data = [];
    function index(){
        $posts = $this->load->model('posts');
        $data['recentPosts'] = $posts->getRecentPosts(3);
        $comments = $this->load->model('comments');
        $data['recentComments'] = $comments->getRecentComments(3);
        $data['categories'] = $posts->getCategories();
        $this->view->render('index', $data);
    }
}