<?php


namespace CMS\Controllers;


use Engine\AbstractController;

class PageController extends AbstractController
{
    public function page($link)
    {
        $pages = $this->load->model('pages');
        $page = $pages->getPage($link);
        $data['page'] = $page;
        if ($page->Template != 'Default') $this->view->render('templates/'.$page->Template, $data);
        else $this->view->render('page', $data);
    }
}