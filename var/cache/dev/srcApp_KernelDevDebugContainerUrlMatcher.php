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
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/([^/]++)/agasso(?'
                        .'|(*:26)'
                        .'|/new(*:37)'
                    .')'
                    .'|/a(?'
                        .'|gasso/([^/]++)(*:64)'
                        .'|dmin/core/get\\-short\\-object\\-description(?:\\.(html|json))?(*:130)'
                    .')'
                    .'|/events/([^/]++)(?'
                        .'|/edit(*:163)'
                        .'|(*:171)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:211)'
                        .'|wdt/([^/]++)(*:231)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:277)'
                                .'|router(*:291)'
                                .'|exception(?'
                                    .'|(*:311)'
                                    .'|\\.css(*:324)'
                                .')'
                            .')'
                            .'|(*:334)'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            26 => [[['_route' => 'agasso', '_controller' => 'App\\Controller\\AgassoController::index'], ['id'], null, null, false, false, null]],
            37 => [[['_route' => 'new_agasso', '_controller' => 'App\\Controller\\AgassoController::newAgasso'], ['id'], null, null, false, false, null]],
            64 => [[['_route' => 'agassos', '_controller' => 'App\\Controller\\AgassoController::show'], ['id'], null, null, false, true, null]],
            130 => [[['_route' => 'sonata_admin_short_object_information', '_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'], ['_format'], null, null, false, true, null]],
            163 => [[['_route' => 'modif_event', '_controller' => 'App\\Controller\\EventsController::modifierProduit'], ['id'], null, null, false, false, null]],
            171 => [[['_route' => 'event', '_controller' => 'App\\Controller\\EventsController::show'], ['id'], null, null, false, true, null]],
            211 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            231 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            277 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            291 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            311 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            324 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            334 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        ];
    }
}
