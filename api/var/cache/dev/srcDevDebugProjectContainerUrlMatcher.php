<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/cart')) {
            // app_cart_cart
            if ('/cart' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\CartController::cart',  '_route' => 'app_cart_cart',);
            }

            // app_cart_checkout
            if ('/cart/checkout' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\CartController::checkout',  '_route' => 'app_cart_checkout',);
            }

        }

        // app_home_index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\HomeController::index',  '_route' => 'app_home_index',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_app_home_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'app_home_index'));
            }

            return $ret;
        }
        not_app_home_index:

        // app_home_persist
        if ('/persist' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\HomeController::persist',  '_route' => 'app_home_persist',);
        }

        if (0 === strpos($pathinfo, '/product')) {
            // app_product_index
            if ('/products' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\ProductController::index',  '_route' => 'app_product_index',);
            }

            // app_product_details
            if (preg_match('#^/product/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_product_details')), array (  '_controller' => 'App\\Controller\\ProductController::details',));
            }

        }

        // app_product_admin
        if ('/admin' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\ProductController::admin',  '_route' => 'app_product_admin',);
        }

        if (0 === strpos($pathinfo, '/api')) {
            // api_entrypoint
            if (preg_match('#^/api(?:/(?P<index>index)(?:\\.(?P<_format>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_entrypoint')), array (  '_controller' => 'api_platform.action.entrypoint',  '_format' => '',  '_api_respond' => '1',  'index' => 'index',));
            }

            // api_doc
            if (0 === strpos($pathinfo, '/api/docs') && preg_match('#^/api/docs(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_doc')), array (  '_controller' => 'api_platform.action.documentation',  '_api_respond' => '1',  '_format' => '',));
            }

            // api_graphql_entrypoint
            if ('/api/graphql' === $pathinfo) {
                return array (  '_controller' => 'api_platform.graphql.action.entrypoint',  '_graphql' => true,  '_route' => 'api_graphql_entrypoint',);
            }

            // api_jsonld_context
            if (0 === strpos($pathinfo, '/api/contexts') && preg_match('#^/api/contexts/(?P<shortName>.+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_jsonld_context')), array (  '_controller' => 'api_platform.jsonld.action.context',  '_api_respond' => '1',  '_format' => 'jsonld',));
            }

            if (0 === strpos($pathinfo, '/api/products')) {
                // api_products_get_collection
                if (preg_match('#^/api/products(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_products_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Product\\Product',  '_api_collection_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_products_get_collection;
                    }

                    return $ret;
                }
                not_api_products_get_collection:

                // api_products_post_collection
                if (preg_match('#^/api/products(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_products_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Product\\Product',  '_api_collection_operation_name' => 'post',));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_api_products_post_collection;
                    }

                    return $ret;
                }
                not_api_products_post_collection:

                // api_products_get_item
                if (preg_match('#^/api/products/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_products_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Product\\Product',  '_api_item_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_products_get_item;
                    }

                    return $ret;
                }
                not_api_products_get_item:

                // api_products_delete_item
                if (preg_match('#^/api/products/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_products_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Product\\Product',  '_api_item_operation_name' => 'delete',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_api_products_delete_item;
                    }

                    return $ret;
                }
                not_api_products_delete_item:

                // api_products_put_item
                if (preg_match('#^/api/products/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_products_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Product\\Product',  '_api_item_operation_name' => 'put',));
                    if (!in_array($requestMethod, array('PUT'))) {
                        $allow = array_merge($allow, array('PUT'));
                        goto not_api_products_put_item;
                    }

                    return $ret;
                }
                not_api_products_put_item:

            }

        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SecurityController::login',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
