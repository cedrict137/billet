<?php

class Post
{
    private $postId;
    private $postName;
    private $postDate;
    private $postContent;

    public function getPostName()
    {
        echo $this->postName;
    }

    public function getPostDate()
    {
        echo $this->postDate;
    }

    public function getPostContent()
    {
        echo $this->postContent;
    }

    public function setPostName($postName)

    {
        $this->postName = $postName;    
    }

    public function setPostContent($postContent)

    {
        $this->postContent = $postContent;    
    }

    public function createPost()
    {

    }

    public function editPost()
    {

    }

    public function deletePost()
    {
        
    }


}

$article1 = new Post();
$article1->setPostName("<p>article 1</p>");
$article1->setPostContent("<p>contenu article 1</p>");
$article1->getPostName();
$article1->getPostContent();












?>