<?php

namespace Hursit\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackendController extends Controller
{
    public function indexAction(){
        $post_Rep = $this->getDoctrine()->getRepository('HursitBlogBundle:Post');
        $posts = $post_Rep->getNews(20);
        if(!$posts){
            throw $this->createNotFoundException('Gönderim bulunamadı');
        }
        return $this->render('HursitBlogBundle:Backend/Pages/Post:index.html.twig', array('posts' => $posts));
    }
    public function postsAction(){
        $postRepository = $this->getDoctrine()->getRepository('HursitBlogBundle:Post');
        $posts = $postRepository->findBy(array(),array('id' => 'desc'));
        if(!$posts){
            throw $this->createNotFoundException('Gönderim bulunamadı');
        }return $this->render('HursitBlogBundle:Backend/Pages/Post:posts.html.twig',array('posts' => $posts));
    }
    public function categoriesAction(){
        $categoryRepository = $this->getDoctrine()->getRepository('HursitBlogBundle:Category');
        $categories = $categoryRepository->findBy(array(),array('name' => 'asc'));
        return $this->render('HursitBlogBundle:Backend/Pages/Category:categories.html.twig',array('categories' => $categories));    
    }
    public function newCategoryAction(\Symfony\Component\HttpFoundation\Request $request){
        $category = new \Hursit\BlogBundle\Entity\Category();
        $categoryType = new \Hursit\BlogBundle\Form\CategoryType();
        $form = $this->createForm($categoryType, $category);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $cr = $this->getDoctrine()->getManager();
            $cr->persist($category);
            $cr->flush();
            return $this->redirect($this->generateUrl('backend_categories'));
        }
        return $this->render('HursitBlogBundle:Backend/Pages/Category:category.html.twig',array('form' => $form->createView()));
    }
    public function newPostAction(\Symfony\Component\HttpFoundation\Request $request){
        $post = new \Hursit\BlogBundle\Entity\Post();
        $postType = new \Hursit\BlogBundle\Form\PostType();
        $form = $this->createForm($postType, $post);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $pr = $this->getDoctrine()->getManager();
            $pr->persist($post);
            $pr->flush();
            return $this->redirect($this->generateUrl('backend_posts'));
        }
        return $this->render('HursitBlogBundle:Backend/Pages/Post:post.html.twig',array('form' => $form->createView()));
    }
    public function editCategoryAction($id,  \Symfony\Component\HttpFoundation\Request $request){
        $categoryRepository = $this->getDoctrine()->getRepository('HursitBlogBundle:Category');
        $category = $categoryRepository->findOneBy(array('id' => $id));
        $form = $this->createForm($categoryType, $category);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $cr = $this->getDoctrine()->getManager();
            $cr->persist($category);
            $cr->flush();
            return $this->redirect($this->generateUrl('backend_categories'));
        }
        return $this->render('HursitBlogBundle:Backend/Pages/Category:category.html.twig',array('form' => $form->createView(),'title' => 'Kategori Düzenleme'));
    
    }
    public function editPostAction ($id, \Symfony\Component\HttpFoundation\Request $request){
        $postRepository = $this->getDoctrine()->getRepository('HursitBlogBundle:Post');
        $post = $postRepository->findOneBy(array('id' => $id));
        if(!$post){
            throw  $this->createNotFoundException('Bu gönderim bulunamadı!');
        }
        $postType = new \Hursit\BlogBundle\Form\PostType();
        $form = $this->createForm($postType, $post);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $cr = $this->getDoctrine()->getManager();
            $cr->persist($post);
            $cr->flush();
            return $this->redirect($this->generateUrl('backend_posts'));
        }
        return $this->render('HursitBlogBundle:Backend/Pages/Post:post.html.twig',array('form' => $form->createView(),'title' => 'Gönderim Düzenleme'));
    
    }
    public function deleteCategoryAction($id){
        $em = $this->getDoctrine()->getEntityManager();
        $category = $em->getRepository('HursitBlogBundle:Category')->find($id);
        $posts = $em->getRepository('HursitBlogBundle:Post')->findBy(array('category_id'=> $id));
        $em->remove($category);
        foreach($posts as $post){
            $em->remove($post);
        }
        $em->flush();
        return $this->redirect($this->generateUrl('backend_categories'));
    }
    public function deletePostAction($id){
        
        $em = $this->getDoctrine()->getEntityManager();
        $post = $em->getRepository('HursitBlogBundle:Post')->find($id);
        $em->remove($post);
        $em->flush();
        return $this->redirect($this->generateUrl('backend_posts'));
    }
    public function showCategoryAction($id){
        $category = $this->getDoctrine()->getRepository('HursitBlogBundle:Category')->find($id);
        $postRepository = $this->getDoctrine()->getRepository('HursitBlogBundle:Post');
        $posts = $postRepository->findBy(array('category_id' =>  $id), array('id' => 'desc'));
        return $this->render('HursitBlogBundle:Backend/Pages/Category:categoryPosts.html.twig',array('posts' => $posts,'category' => $category));
    }
    public function showPostAction($id){
        $postRepository = $this->getDoctrine()->getRepository('HursitBlogBundle:Post');
        $post = $postRepository->find($id);
        return $this->render('HursitBlogBundle:Backend/Pages/Post:showPost.html.twig',array('post' => $post));
    }
    public function getCategoriesAction(){
        $category_Repository = $this->getDoctrine()->getRepository('HursitBlogBundle:Category');
        $categories = $category_Repository->findBy(array(), array('name'=>'ASC'));
        return $this->render('HursitBlogBundle:Backend/includes:categories.html.twig',array('categories' => $categories));
    }
}
