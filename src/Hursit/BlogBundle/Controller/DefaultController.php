<?php

namespace Hursit\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $post_Rep = $this->getDoctrine()->getRepository('HursitBlogBundle:Post');
        $posts = $post_Rep->getNews(20);
        return $this->render('HursitBlogBundle:Default/Static_Pages:index.html.twig', array('posts' => $posts));
    }
    public function aboutAction(){
        return $this->render('HursitBlogBundle:Default/Static_Pages:about.html.twig');
    }
    public function contactAction(){
        return $this->render('HursitBlogBundle:Default/Static_Pages:contact.html.twig');
    }
    public function loginAction(){
        return $this->render('HursitBlogBundle:Default/Static_Pages:login.html.twig');
    }
}
