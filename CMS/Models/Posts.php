<?php


namespace CMS\Models;


use admin\Models\Category;
use Engine\AbstractModel;
use Engine\Core\Database\QueryBuilder;

class Posts extends AbstractModel
{
    public function __construct($di)
    {
        $this->queryBuilder = new QueryBuilder();
        $this->di      = $di;
        $this->db      = $this->di->get('db');
    }
    function searchPosts($search){
        $sql = $this->queryBuilder->select()
            ->from('posts')
            ->where('title', '%'. $search .'%', 'LIKE')
            ->orn('description', '%'. $search .'%', 'LIKE')
            ->sql();
        return $this->db->query($sql, $this->queryBuilder->values);
    }
    function getPostsWithCategory($cat){
        $sql = $this->queryBuilder->select()
            ->from('posts')
            ->where('category', '%'. $cat .'%', 'LIKE')
            ->sql();
        return $this->db->query($sql, $this->queryBuilder->values);
    }
    /**
     * @return mixed
     */
    function getRecentPosts($num){
        $sql = $this->queryBuilder->select()
            ->from('posts')
            ->orderBy('date', 'DESC')
            ->limit($num)
            ->sql();

        return $this->db->query($sql);
    }
    function getCategories(){
        $sql = $this->queryBuilder->select()
            ->from('categories')
            ->orderBy('id', 'ASC')
            ->sql();

        return $this->db->query($sql);
    }
    function addCategory($name){
        $category = new Category();
        $category->setName($name);
        return $category->save();
    }
    function getCategory($id){
        $sql = $this->queryBuilder->select()
            ->from('categories')
            ->where('id', $id)
            ->limit('1')
            ->sql();
        return $this->db->query($sql, $this->queryBuilder->values)[0];
    }
    function deleteCategory($id){
        $sql = $this->queryBuilder->delete()
            ->from('categories')
            ->where('id', $id)
            ->sql();

        $this->db->execute($sql, $this->queryBuilder->values);
    }
    function getPosts(){
        $sql = $this->queryBuilder->select()
            ->from('posts')
            ->orderBy('id', 'ASC')
            ->sql();

        return $this->db->query($sql);
    }

    /**
     * @param $id
     * @return mixed
     */
    function getPost($id){
        $sql = $this->queryBuilder->select()
            ->from('posts')
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
    function addPost($title, $content){
        $post = new Post();
        $post->setTitle($title);
        $post->setContent($content);
        $post->setDate(date("Y-m-d h:i:s"));
        return $post->save();
    }

    /**
     * @param $id
     * @param $title
     * @param $content
     * @return mixed
     */
    function updatePost($id, $title, $content){
        $post = new Post($id);
        $post->setTitle($title);
        $post->setContent($content);
        return $post->save();
    }

    /**
     * @param $id
     */
    function deletePost($id){
        $sql = $this->queryBuilder->delete()
            ->from('posts')
            ->where('id', $id)
            ->sql();

        $this->db->execute($sql, $this->queryBuilder->values);
    }
}