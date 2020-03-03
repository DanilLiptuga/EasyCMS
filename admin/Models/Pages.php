<?php


namespace admin\Models;


use Engine\AbstractModel;
use Engine\Core\Database\QueryBuilder;

class Pages extends AbstractModel
{
    /**
     * Pages constructor.
     * @param $di
     */
    public function __construct($di)
    {
        $this->queryBuilder = new QueryBuilder();
        $this->di      = $di;
        $this->db      = $this->di->get('db');
    }

    /**
     * @return mixed
     */
    function getPages(){
        $sql = $this->queryBuilder->select()
            ->from('pages')
            ->orderBy('id', 'ASC')
            ->sql();

        return $this->db->query($sql);
    }

    /**
     * @param $id
     * @return mixed
     */
    function getPage($id){
        $sql = $this->queryBuilder->select()
            ->from('pages')
            ->where('id', $id)
            ->limit('1')
            ->sql();
        return $this->db->query($sql, $this->queryBuilder->values)[0];
    }

    /**
     * @param $title
     * @param $content
     * @return mixed
     */
    function addPage($title, $content, $template, $link){
        $page = new Page();
        $page->setTitle($title);
        $page->setContent($content);
        $page->setTemplate($template);
        $page->setLink($link);
        $page->setDate(date('Y-m-d'));
        return $page->save();
    }

    /**
     * @param $id
     * @param $title
     * @param $content
     * @return mixed
     */
    function updatePage($id, $title, $content, $template, $link){
        $page = new Page($id);
        $page->setTitle($title);
        $page->setContent($content);
        $page->setTemplate($template);
        $page->setLink($link);
        $page->setDate(date('Y-m-d'));
        return $page->save();
    }

    /**
     * @param $id
     */
    function deletePage($id){
        $sql = $this->queryBuilder->delete()
            ->from('pages')
            ->where('id', $id)
            ->sql();

        $this->db->execute($sql, $this->queryBuilder->values);
    }
}