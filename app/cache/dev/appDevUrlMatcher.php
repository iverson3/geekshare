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

        if (0 === strpos($pathinfo, '/css/7f3c095')) {
            // _assetic_7f3c095
            if ($pathinfo === '/css/7f3c095.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7f3c095',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_7f3c095',);
            }

            if (0 === strpos($pathinfo, '/css/7f3c095_part_1_')) {
                // _assetic_7f3c095_0
                if ($pathinfo === '/css/7f3c095_part_1_bootstrap_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7f3c095',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_7f3c095_0',);
                }

                // _assetic_7f3c095_1
                if ($pathinfo === '/css/7f3c095_part_1_jianshu_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7f3c095',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_7f3c095_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/7ad47ce')) {
            // _assetic_7ad47ce
            if ($pathinfo === '/js/7ad47ce.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7ad47ce',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_7ad47ce',);
            }

            if (0 === strpos($pathinfo, '/js/7ad47ce_part_1_')) {
                // _assetic_7ad47ce_0
                if ($pathinfo === '/js/7ad47ce_part_1_bootstrap_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7ad47ce',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_7ad47ce_0',);
                }

                // _assetic_7ad47ce_1
                if ($pathinfo === '/js/7ad47ce_part_1_jianshu_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7ad47ce',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_7ad47ce_1',);
                }

            }

        }

        // _assetic_46cd357
        if ($pathinfo === '/css/46cd357.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '46cd357',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_46cd357',);
        }

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

        // admin_index_index_index
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'Admin\\IndexBundle\\Controller\\IndexController::indexAction',  '_route' => 'admin_index_index_index',);
        }

        if (0 === strpos($pathinfo, '/share')) {
            // admin_index_index_sharelist
            if (0 === strpos($pathinfo, '/sharelist') && preg_match('#^/sharelist/(?P<lang>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_index_index_sharelist')), array (  '_controller' => 'Admin\\IndexBundle\\Controller\\IndexController::sharelistAction',));
            }

            // admin_index_shareform
            if ($pathinfo === '/shareform') {
                return array (  '_controller' => 'Admin\\IndexBundle\\Controller\\IndexController::shareformAction',  '_route' => 'admin_index_shareform',);
            }

        }

        // admin_index_doshareform
        if ($pathinfo === '/do_shareform') {
            return array (  '_controller' => 'Admin\\IndexBundle\\Controller\\IndexController::do_shareformAction',  '_route' => 'admin_index_doshareform',);
        }

        // admin_index_ajaxcheck
        if ($pathinfo === '/ajaxcheck') {
            return array (  '_controller' => 'Admin\\IndexBundle\\Controller\\IndexController::ajaxcheckrepeatAction',  '_route' => 'admin_index_ajaxcheck',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // home_user_index
            if (preg_match('#^/user(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_user_index')), array (  '_controller' => 'Home\\UserBundle\\Controller\\IndexController::indexAction',  'id' => 1,));
            }

            // home_user_users
            if (0 === strpos($pathinfo, '/users') && preg_match('#^/users/(?P<userid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_user_users')), array (  '_controller' => 'Home\\UserBundle\\Controller\\IndexController::usersAction',));
            }

        }

        // home_user_edituser
        if (0 === strpos($pathinfo, '/edit') && preg_match('#^/edit/(?P<userid>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_user_edituser')), array (  '_controller' => 'Home\\UserBundle\\Controller\\IndexController::edituserAction',));
        }

        // home_user_doedituser
        if ($pathinfo === '/doedit') {
            return array (  '_controller' => 'Home\\UserBundle\\Controller\\IndexController::doedituserAction',  '_route' => 'home_user_doedituser',);
        }

        // home_index_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home_index_index');
            }

            return array (  '_controller' => 'Home\\IndexBundle\\Controller\\IndexController::indexAction',  '_route' => 'home_index_index',);
        }

        // home_index_share
        if ($pathinfo === '/share') {
            return array (  '_controller' => 'Home\\IndexBundle\\Controller\\IndexController::shareAction',  '_route' => 'home_index_share',);
        }

        // home_index_doshare
        if ($pathinfo === '/doshare') {
            return array (  '_controller' => 'Home\\IndexBundle\\Controller\\IndexController::doshareAction',  '_route' => 'home_index_doshare',);
        }

        // home_index_sharedetail
        if (0 === strpos($pathinfo, '/share') && preg_match('#^/share/(?P<shareid>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_index_sharedetail')), array (  '_controller' => 'Home\\IndexBundle\\Controller\\IndexController::sharedetailAction',));
        }

        if (0 === strpos($pathinfo, '/geek')) {
            // home_index_geekinfo
            if (preg_match('#^/geek/(?P<userid>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_index_geekinfo')), array (  '_controller' => 'Home\\IndexBundle\\Controller\\IndexController::geekinfoAction',));
            }

            // home_index_geeklist
            if ($pathinfo === '/geeks') {
                return array (  '_controller' => 'Home\\IndexBundle\\Controller\\IndexController::geeklistAction',  '_route' => 'home_index_geeklist',);
            }

        }

        // home_index_index_
        if (preg_match('#^/(?P<lang>[^/]++)(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'home_index_index_')), array (  '_controller' => 'Home\\IndexBundle\\Controller\\IndexController::sharelistAction',  'page' => 1,));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
