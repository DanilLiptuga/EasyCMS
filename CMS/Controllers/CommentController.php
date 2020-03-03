<?php


namespace CMS\Controllers;


use Engine\AbstractController;

class CommentController extends AbstractController
{
    protected $data;
    public function add()
    {
       $comments = $this->load->model('comments');
       $comment = $comments->addComment($_POST['author'], $_POST['post_id'], $_POST['text']);
       header('Location: /post/' . $_POST['post_id']);
    }
}