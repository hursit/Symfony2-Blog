<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // blog_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'blog_homepage');
            }

            return array (  '_controller' => 'Hursit\\BlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'blog_homepage',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Hursit\\BlogBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
        }

        // contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Hursit\\BlogBundle\\Controller\\DefaultController::contactAction',  '_route' => 'contact',);
        }

        // about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'Hursit\\BlogBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'about',);
        }

        // post_show
        if (0 === strpos($pathinfo, '/show') && preg_match('#^/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_show')), array (  '_controller' => 'Hursit\\BlogBundle\\Controller\\PostController::showPostAction',));
        }

        // category_show
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'Hursit\\BlogBundle\\Controller\\PostController::showCategoryAction',));
        }

        // all_posts
        if ($pathinfo === '/posts') {
            return array (  '_controller' => 'Hursit\\BlogBundle\\Controller\\PostController::allPostsAction',  '_route' => 'all_posts',);
        }

        // news
        if ($pathinfo === '/news') {
            return array (  '_controller' => 'Hursit\\BlogBundle\\Controller\\PostController::newsPostsAction',  '_route' => 'news',);
        }

        // categories
        if ($pathinfo === '/categories') {
            return array (  '_controller' => 'Hursit\\BlogBundle\\Controller\\PostController::getCategoriesAction',  '_route' => 'categories',);
        }

        if (0 === strpos($pathinfo, '/backend')) {
            // backend
            if ($pathinfo === '/backend') {
                return array (  '_controller' => 'Hursit\\BlogBundle\\Controller\\BackendController::indexAction',  '_route' => 'backend',);
            }

            // backend_posts
            if ($pathinfo === '/backend/posts') {
                return array (  '_controller' => 'Hursit\\BlogBundle\\Controller\\BackendController::postsAction',  '_route' => 'backend_posts',);
            }

            if (0 === strpos($pathinfo, '/backend/categor')) {
                // backend_categories
                if ($pathinfo === '/backend/categories') {
                    return array (  '_controller' => 'Hursit\\BlogBundle\\Controller\\BackendController::categoriesAction',  '_route' => 'backend_categories',);
                }

                // backend_new_category
                if ($pathinfo === '/backend/category/new') {
                    return array (  '_controller' => 'Hursit\\BlogBundle\\Controller\\BackendController::newCategoryAction',  '_route' => 'backend_new_category',);
                }

            }

            // backend_new_post
            if ($pathinfo === '/backend/post/new') {
                return array (  '_controller' => 'Hursit\\BlogBundle\\Controller\\BackendController::newPostAction',  '_route' => 'backend_new_post',);
            }

            // backend_edit_category
            if (0 === strpos($pathinfo, '/backend/category/edit') && preg_match('#^/backend/category/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_edit_category')), array (  '_controller' => 'Hursit\\BlogBundle\\Controller\\BackendController::editCategoryAction',));
            }

            // backend_edit_post
            if (0 === strpos($pathinfo, '/backend/post/edit') && preg_match('#^/backend/post/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_edit_post')), array (  '_controller' => 'Hursit\\BlogBundle\\Controller\\BackendController::editPostAction',));
            }

            // backend_delete_category
            if (0 === strpos($pathinfo, '/backend/category/delete') && preg_match('#^/backend/category/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_delete_category')), array (  '_controller' => 'Hursit\\BlogBundle\\Controller\\BackendController::deleteCategoryAction',));
            }

            // backend_delete_post
            if (0 === strpos($pathinfo, '/backend/post/delete') && preg_match('#^/backend/post/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_delete_post')), array (  '_controller' => 'Hursit\\BlogBundle\\Controller\\BackendController::deletePostAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
