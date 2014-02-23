<?php
namespace Application\Model\Entity;

use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class Post
{
    public $postId;
    public $postAuthor;
    public $postDate;
    public $postContent;
    public $postTitle;
    public $postStatus;
    public $postType;
    /**
     * Used by ResultSet to pass each database row to the entity
     */
    public function exchangeArray($data)
    {
        $this->postId = (isset($data['ID'])) ? $data['ID'] : null;
        $this->postAuthor = (isset($data['post_author'])) ? $data['post_author'] : null;
        $this->postDate = (isset($data['post_date'])) ? $data['post_date'] : null;
        $this->postContent = (isset($data['post_content'])) ? $data['post_content'] : null;
        $this->postTitle = (isset($data['post_title'])) ? $data['post_title'] : null;
        $this->postStatus = (isset($data['post_status'])) ? $data['post_status'] : null;
        $this->postType = (isset($data['post_type'])) ? $data['post_type'] : null;
    }

    public function getArrayCopy()
    {
        return get_object_vars($this);
    }

    public function getId()
    {
        return $this->postId;
    }
    
    public function setId($value)
    {
        $this->postId = $value;
        return $this;   
    }
    
    public function getAuthorId()
    {
        return $this->postAuthor;
    }
    
    public function setAuthorId($value)
    {
        $this->postAuthor = $value;
        return $this;
    }
    
    public function getPostDate()
    {
        return $this->postDate;
    }
    
    public function setPostDate($value)
    {
        $this->postDate = $value;
        return $this;
    }
    
    public function getPostContent()
    {
        return $this->postContent;
    }
    
    public function setPostContent($value)
    {
        $this->postContent = $value;
        return $this;
    }
    
    public function getPostTitle()
    {
        return $this->postTitle;
    }
    
    public function setPostTitle($value)
    {
        $this->postTitle = $value;
        return $this;
    }
    
    public function getPostStatus()
    {
        return $this->postStatus;
    }
    
    public function setPostStatus($value)
    {
        $this->postStatus = $value;
        return $this;
    }
    
        public function getPostType()
    {
        return $this->postType;
    }
    
    public function setPostType($value)
    {
        $this->postType = $value;
        return $this;
    }

}
