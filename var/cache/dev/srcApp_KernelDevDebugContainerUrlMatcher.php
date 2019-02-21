<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/activites' => [[['_route' => 'Activites', '_controller' => 'App\\Controller\\ActivitesController::index'], null, null, null, false, false, null]],
            '/activites/new' => [[['_route' => 'activites_create', '_controller' => 'App\\Controller\\ActivitesController::form'], null, null, null, false, false, null]],
            '/assos' => [[['_route' => 'assos', '_controller' => 'App\\Controller\\AssosController::index'], null, null, null, false, false, null]],
            '/assos/new' => [[['_route' => 'new_assos', '_controller' => 'App\\Controller\\AssosController::newAsso'], null, null, null, false, false, null]],
            '/events' => [[['_route' => 'events', '_controller' => 'App\\Controller\\EventsController::index'], null, null, null, false, false, null]],
            '/events/new' => [[['_route' => 'new_event', '_controller' => 'App\\Controller\\EventsController::newEvent'], null, null, null, false, false, null]],
            '/security' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
            '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
            '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
            '/users' => [[['_route' => 'users_index', '_controller' => 'App\\Controller\\UsersController::index'], null, ['GET' => 0], null, true, false, null]],
            '/users/new' => [[['_route' => 'users_new', '_controller' => 'App\\Controller\\UsersController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/administration' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/activites/([^/]++)(?'
                        .'|/edit(*:34)'
                        .'|(*:41)'
                    .')'
                    .'|/([^/]++)/agasso(?'
                        .'|(*:68)'
                        .'|/new(*:79)'
                    .')'
                    .'|/agasso/([^/]++)(*:103)'
                    .'|/events/([^/]++)(?'
                        .'|/edit(*:135)'
                        .'|(*:143)'
                    .')'
                    .'|/users/([^/]++)(?'
                        .'|(*:170)'
                        .'|/edit(*:183)'
                        .'|(*:191)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:231)'
                        .'|wdt/([^/]++)(*:251)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:297)'
                                .'|router(*:311)'
                                .'|exception(?'
                                    .'|(*:331)'
                                    .'|\\.css(*:344)'
                                .')'
                            .')'
                            .'|(*:354)'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            34 => [[['_route' => 'activites_edit', '_controller' => 'App\\Controller\\ActivitesController::form'], ['id'], null, null, false, false, null]],
            41 => [[['_route' => 'activites_show', '_controller' => 'App\\Controller\\ActivitesController::show'], ['id'], null, null, false, true, null]],
            68 => [[['_route' => 'agasso', '_controller' => 'App\\Controller\\AgassoController::index'], ['id'], null, null, false, false, null]],
            79 => [[['_route' => 'new_agasso', '_controller' => 'App\\Controller\\AgassoController::newAgasso'], ['id'], null, null, false, false, null]],
            103 => [[['_route' => 'agassos', '_controller' => 'App\\Controller\\AgassoController::show'], ['id'], null, null, false, true, null]],
            135 => [[['_route' => 'modif_event', '_controller' => 'App\\Controller\\EventsController::modifierProduit'], ['id'], null, null, false, false, null]],
            143 => [[['_route' => 'event', '_controller' => 'App\\Controller\\EventsController::show'], ['id'], null, null, false, true, null]],
            170 => [[['_route' => 'users_show', '_controller' => 'App\\Controller\\UsersController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            183 => [[['_route' => 'users_edit', '_controller' => 'App\\Controller\\UsersController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            191 => [[['_route' => 'users_delete', '_controller' => 'App\\Controller\\UsersController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            231 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            251 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            297 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            311 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            331 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            344 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            354 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        ];
    }
}
