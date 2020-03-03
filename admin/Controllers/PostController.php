<?php


namespace admin\Controllers;


use Engine\AbstractController;

class PostController extends AbstractController
{
    public function index()
    {
        $posts = $this->load->model('posts');
        $data['posts'] = $posts->getPosts();
        $this->view->render('posts/list', $data);
    }
    public function create()
    {
        $posts = $this->load->model('posts');
        $data['categories'] = $posts->getCategories();
        $this->view->render('posts/create', $data);
    }
    public function add()
    {
        $posts = $this->load->model('posts');
        $destFile = ROOT_PATH."/content/uploads/".$_FILES['image']['name'];
        move_uploaded_file( $_FILES['image']['tmp_name'], $destFile );
        $post = $posts->addPost($_POST['title'], $_POST['content'], "/content/uploads/".$_FILES['image']['name'], $_POST['description'], $_POST['category']);
        return $post;
    }
    public function addCategory()
    {
        $posts = $this->load->model('posts');
        $categoryId = $posts->addCategory($_POST['category']);
        $category = $posts->getCategory($categoryId);
        echo json_encode($category);
    }
    public function edit($id)
    {
        $posts = $this->load->model('posts');
        $post = $posts->getPost($id);
        $data['categories'] = $posts->getCategories();
        $data['post'] = $post;
        $this->view->render('posts/edit', $data);
    }
    public function update($id)
    {
        $posts = $this->load->model('posts');
        $destFile = ROOT_PATH."/content/uploads/".$_FILES['image']['name'];
        move_uploaded_file( $_FILES['image']['tmp_name'], $destFile );
        $post = $posts->updatePost($id, $_POST['title'], $_POST['content'], "/content/uploads/".$_FILES['image']['name'], $_POST['description'], $_POST['category']);
        return $post;
    }
    public function delete($id)
    {
        $posts = $this->load->model('posts');
        $post = $posts->deletePost($id);
        header('Location: /admin/posts');
    }
}