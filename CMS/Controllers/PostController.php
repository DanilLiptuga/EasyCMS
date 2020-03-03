<?php


namespace CMS\Controllers;


use Engine\AbstractController;

class PostController extends AbstractController
{
    public function post($id)
    {
        $posts = $this->load->model('posts');
        $comments = $this->load->model('comments');
        $post = $posts->getPost($id);
        $data['recentPosts'] = $posts->getRecentPosts(3);
        $data['recentComments'] = $comments->getRecentComments(3);
        $data['categories'] = $posts->getCategories();
        $data['comments'] = $comments->getComments($post->id);
        $data['post'] = $post;
        $this->view->render('post', $data);
    }
}