<?php
// src/Hursit/BlogBundle/Entity/Category.php/**
namespace Hursit\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
*@ORM\Entity(repositoryClass="Hursit\BlogBundle\Entity\CategoryRepository")
*@ORM\Table(name="category")
*@ORM\HasLifecycleCallbacks()
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;
    
    
    /**
     * @ORM\OneToMany(targetEntity="Post", mappedBy="category")
     */
    protected $posts;

    public function __construct()
    {
        $this->posts = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add posts
     *
     * @param \Hursit\BlogBundle\Entity\Post $posts
     * @return Category
     */
    public function addPost(\Hursit\BlogBundle\Entity\Post $posts)
    {
        $this->posts[] = $posts;

        return $this;
    }

    /**
     * Remove posts
     *
     * @param \Hursit\BlogBundle\Entity\Post $posts
     */
    public function removePost(\Hursit\BlogBundle\Entity\Post $posts)
    {
        $this->posts->removeElement($posts);
    }

    /**
     * Get posts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPosts()
    {
        return $this->posts;
    }
    /**
     * Get category
     *
     * @return string 
     */
    public function __toString() {
        return $this->name;
    }
}
