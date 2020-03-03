<?php


namespace CMS\Controllers;


use Engine\AbstractController;

class SearchController extends AbstractController
{
    function redirect(){
        header('Location: /search/' . $_POST['s']);
    }
    function search($s){
        $posts = $this->load->model('posts');
        $searchRes = $posts->searchPosts($s);
        $data['recentPosts'] = $posts->getRecentPosts(3);
        $comments = $this->load->model('comments');
        $data['recentComments'] = $comments->getRecentComments(3);
        $data['categories'] = $posts->getCategories();
        $data['searchResult'] = $searchRes;
        $this->view->render('search', $data);
    }
    function category($category){
        $posts = $this->load->model('posts');
        $data['recentPosts'] = $posts->getRecentPosts(3);
        $comments = $this->load->model('comments');
        $data['recentComments'] = $comments->getRecentComments(3);
        $data['categories'] = $posts->getCategories();
        $posts = $posts->getPostsWithCategory($category);
        $data['searchResult'] = $posts;
        $this->view->render('search', $data);
    }
}