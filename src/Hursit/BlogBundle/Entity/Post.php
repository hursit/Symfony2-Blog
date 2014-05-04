<?php
// src/Hursit/BlogBundle/Entity/Post.php
namespace Hursit\BlogBundle\Entity;
 

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity(repositoryClass="Hursit\BlogBundle\Entity\PostRepository")
* @ORM\Table(name="post")
* @ORM\HasLifecycleCallbacks()
*/
class Post {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $title;

    /**
     * @ORM\Column(type="text")
     */
    protected $detail;


    /**
     * @ORM\Column(type="string")
     */
    public $created;

    /**
     * @ORM\Column(type="text")
     */
    
    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="posts")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    public $category_id;
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set detail
     *
     * @param string $detail
     * @return Post
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get detail
     *
     * @return string 
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @ORM\PrePersist()
     */
    public function setCreated() {
        $this->created = date('Y-m-d H:m:s');
        return $this;
    }
    /**
     * Get created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set category_id
     *
     * @param \Hursit\BlogBundle\Entity\Category $categoryId
     * @return Post
     */
    public function setCategoryId(\Hursit\BlogBundle\Entity\Category $categoryId = null)
    {
        $this->category_id = $categoryId;

        return $this;
    }

    /**
     * Get category_id
     *
     * @return \Hursit\BlogBundle\Entity\Category 
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }
}
