<?php

namespace Hursit\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PostController extends Controller
{
    public function showPostAction($id){
        $postRepository = $this->getDoctrine()->getRepository('HursitBlogBundle:Post');
        $post = $postRepository->find($id);
        return $this->render('HursitBlogBundle:Default/Post:show.html.twig',array('post' => $post));
    }
    public function showCategoryAction($id){
        $postRepository = $this->getDoctrine()->getRepository('HursitBlogBundle:Post');
        $posts = $postRepository->findBy(array('category_id' =>  $id), array('id' => 'desc'));
        return $this->render('HursitBlogBundle:Default/Post:categoryShow.html.twig',array('posts' => $posts));
    
    }
    public function newsPostsAction(){
        $postRepository = $this->getDoctrine()->getRepository('HursitBlogBundle:Post');
        $posts = $postRepository->findBy(array(), array('id' =>'desc'),20);
        return $this->render('HursitBlogBundle:Default/Post:news.html.twig',array('posts' => $posts));
    }
    public function allPostsAction(){
        $postRepository = $this->getDoctrine()->getRepository('HursitBlogBundle:Post');
        $posts = $postRepository->findBy(array(), array('id' =>'desc'));
        return $this->render('HursitBlogBundle:Default/Post:allPosts.html.twig',array('posts' => $posts));
    }
    public function getCategoriesAction(){
        $category_Repository = $this->getDoctrine()->getRepository('HursitBlogBundle:Category');
        $categories = $category_Repository->findBy(array(), array('name'=>'ASC'));
        return $this->render('HursitBlogBundle:Default/includes:categories.html.twig',array('categories' => $categories));
    }
}
