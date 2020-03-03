<?php


namespace CMS\Models;


use Engine\AbstractModel;
use Engine\Core\Database\QueryBuilder;

class Comments extends AbstractModel
{
    public function __construct($di)
    {
        $this->queryBuilder = new QueryBuilder();
        $this->di      = $di;
        $this->db      = $this->di->get('db');
    }

    /**
     * @param $post
     * @return mixed
     */
    function getComments($post){
        $sql = $this->queryBuilder->select()
            ->from('comments')
            ->where('post', $post)
            ->orderBy('id', 'ASC')
            ->sql();

        return $this->db->query($sql, $this->queryBuilder->values);
    }
    function getRecentComments($num){
        $sql = $this->queryBuilder->select()
            ->from('comments')
            ->orderBy('date', 'DESC')
            ->limit($num)
            ->sql();

        return $this->db->query($sql);
    }
    /**
     * @param $id
     * @return mixed
     */
    function getComment($id){
        $sql = $this->queryBuilder->select()
            ->from('comments')
            ->where('id', $id)
            ->limit('1')
            ->sql();
        return $this->db->query($sql, $this->queryBuilder->values)[0];
    }

    /**
     * @param $author
     * @param $text
     * @param $post
     * @return mixed
     */
    function addComment($author, $post, $text){
        $comment = new Comment();
        $comment->setAuthor($author);
        $comment->setPost($post);
        $comment->setText($text);
        $comment->setDate(date("Y-m-d h:i:s"));
        return $comment->save();
    }
}