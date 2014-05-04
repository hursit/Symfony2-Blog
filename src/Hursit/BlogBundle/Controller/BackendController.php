<?php

namespace Hursit\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackendController extends Controller
{
    public function indexAction(){
        $post_Rep = $this->getDoctrine()->getRepository('HursitBlogBundle:Post');
        $posts = $post_Rep->getNews(20);
        return $this->render('HursitBlogBundle:Backend/Pages:index.html.twig', array('posts' => $posts));
    }
    public function postsAction(){
        $postRepository = $this->getDoctrine()->getRepository('HursitBlogBundle:Post');
        $posts = $postRepository->findBy(array(),array('id' => 'desc'));
        return $this->render('HursitBlogBundle:Backend/Pages:posts.html.twig',array('posts' => $posts));
    }
    public function categoriesAction(){
        $categoryRepository = $this->getDoctrine()->getRepository('HursitBlogBundle:Category');
        $categories = $categoryRepository->findBy(array(),array('name' => 'asc'));
        return $this->render('HursitBlogBundle:Backend/Pages:categories.html.twig',array('categories' => $categories));    
    }
    public function newCategoryAction(\Symfony\Component\HttpFoundation\Request $request){
        $category = new \Hursit\BlogBundle\Form\CategoryType();
        $form = $this->createForm($category);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $cr = $this->getDoctrine()->getManager();
            $cr->persist($category);
            echo "bitti";
        }
        return $this->render('HursitBlogBundle:Backend/Pages:new_category.html.twig',array('form' => $form->createView()));
    }
    public function newPostAction(){
        
    }
    public function editCategoryAction(){
        
    }
    public function editPostAction(){
        
    }
    public function deleteCategoryAction(){
        
    }
    public function deletePostAction(){
        
    }
}
