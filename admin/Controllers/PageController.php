<?php


namespace admin\Controllers;


use Engine\AbstractController;

class PageController extends AbstractController
{
 public function index()
 {
     $pages = $this->load->model('pages');
     $data['pages'] = $pages->getPages();
     $this->view->render('pages/list', $data);
 }
    public function create()
    {
        $this->view->render('pages/create');
    }
    public function add()
    {
        $pages = $this->load->model('pages');
        $page = $pages->addPage($_POST['title'], $_POST['content'], trim($_POST['Template']), $_POST['link']);
        return $page;
    }
    public function edit($id)
    {
        $pages = $this->load->model('pages');
        $page = $pages->getPage($id);
        $data['page'] = $page;
        $this->view->render('pages/edit', $data);
    }
    public function update($id)
    {
        $pages = $this->load->model('pages');
        $page = $pages->updatePage($id, $_POST['title'], $_POST['content'], trim($_POST['Template']), $_POST['link']);
        return $page;
    }
    public function delete($id)
    {
        $pages = $this->load->model('pages');
        $page = $pages->deletePage($id);
        header('Location: /admin/pages');
    }
}