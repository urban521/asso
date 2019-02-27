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
            '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
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
            '/login' => [[['_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/login_check' => [[['_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'], null, ['POST' => 0], null, false, false, null]],
            '/logout' => [[['_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/profile' => [[['_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction'], null, ['GET' => 0], null, true, false, null]],
            '/profile/edit' => [[['_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/register' => [[['_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
            '/register/check-email' => [[['_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
            '/register/confirmed' => [[['_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'], null, ['GET' => 0], null, false, false, null]],
            '/resetting/request' => [[['_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'], null, ['GET' => 0], null, false, false, null]],
            '/resetting/send-email' => [[['_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'], null, ['POST' => 0], null, false, false, null]],
            '/resetting/check-email' => [[['_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
            '/profile/change-password' => [[['_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/activites/([^/]++)(?'
                        .'|/edit(*:34)'
                        .'|(*:41)'
                    .')'
                    .'|/([^/]++)/agasso(*:65)'
                    .'|/agasso/([^/]++)/edit(*:93)'
                    .'|/([^/]++)/agasso/new(*:120)'
                    .'|/agasso/([^/]++)(*:144)'
                    .'|/events/([^/]++)(?'
                        .'|/edit(*:176)'
                        .'|(*:184)'
                    .')'
                    .'|/users/([^/]++)(?'
                        .'|(*:211)'
                        .'|/edit(*:224)'
                        .'|(*:232)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:272)'
                        .'|wdt/([^/]++)(*:292)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:338)'
                                .'|router(*:352)'
                                .'|exception(?'
                                    .'|(*:372)'
                                    .'|\\.css(*:385)'
                                .')'
                            .')'
                            .'|(*:395)'
                        .')'
                    .')'
                    .'|/re(?'
                        .'|gister/confirm/([^/]++)(*:434)'
                        .'|setting/reset/([^/]++)(*:464)'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            34 => [[['_route' => 'activites_edit', '_controller' => 'App\\Controller\\ActivitesController::form'], ['id'], null, null, false, false, null]],
            41 => [[['_route' => 'activites_show', '_controller' => 'App\\Controller\\ActivitesController::show'], ['id'], null, null, false, true, null]],
            65 => [[['_route' => 'agasso', '_controller' => 'App\\Controller\\AgassoController::index'], ['id'], null, null, false, false, null]],
            93 => [[['_route' => 'edit_agasso', '_controller' => 'App\\Controller\\AgassoController::modifierAgasso'], ['id'], null, null, false, false, null]],
            120 => [[['_route' => 'new_agasso', '_controller' => 'App\\Controller\\AgassoController::newAgasso'], ['id'], null, null, false, false, null]],
            144 => [[['_route' => 'agassos', '_controller' => 'App\\Controller\\AgassoController::show'], ['id'], null, null, false, true, null]],
            176 => [[['_route' => 'modif_event', '_controller' => 'App\\Controller\\EventsController::modifierProduit'], ['id'], null, null, false, false, null]],
            184 => [[['_route' => 'event', '_controller' => 'App\\Controller\\EventsController::show'], ['id'], null, null, false, true, null]],
            211 => [[['_route' => 'users_show', '_controller' => 'App\\Controller\\UsersController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            224 => [[['_route' => 'users_edit', '_controller' => 'App\\Controller\\UsersController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            232 => [[['_route' => 'users_delete', '_controller' => 'App\\Controller\\UsersController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            272 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            292 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            338 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            352 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            372 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            385 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            395 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            434 => [[['_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'], ['token'], ['GET' => 0], null, false, true, null]],
            464 => [[['_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        ];
    }
}
