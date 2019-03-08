<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'Activites' => [[], ['_controller' => 'App\\Controller\\ActivitesController::index'], [], [['text', '/activites']], [], []],
        'activites_create' => [[], ['_controller' => 'App\\Controller\\ActivitesController::form'], [], [['text', '/activites/new']], [], []],
        'activites_edit' => [['id'], ['_controller' => 'App\\Controller\\ActivitesController::form'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/activites']], [], []],
        'activites_show' => [['id'], ['_controller' => 'App\\Controller\\ActivitesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/activites']], [], []],
        'agasso' => [['id'], ['_controller' => 'App\\Controller\\AgassoController::index'], [], [['text', '/agasso'], ['variable', '/', '[^/]++', 'id', true]], [], []],
        'edit_agasso' => [['id'], ['_controller' => 'App\\Controller\\AgassoController::modifierAgasso'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/agasso']], [], []],
        'new_agasso' => [['id'], ['_controller' => 'App\\Controller\\AgassoController::newAgasso'], [], [['text', '/agasso/new'], ['variable', '/', '[^/]++', 'id', true]], [], []],
        'agassos' => [['id'], ['_controller' => 'App\\Controller\\AgassoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/agasso']], [], []],
        'assos' => [['id'], ['_controller' => 'App\\Controller\\AssosController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/assos']], [], []],
        'modif_asso' => [['id'], ['_controller' => 'App\\Controller\\AssosController::aditAsso'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/assos']], [], []],
        'new_assos' => [[], ['_controller' => 'App\\Controller\\AssosController::newAsso'], [], [['text', '/assos/new']], [], []],
        'admin_page' => [[], ['_controller' => 'App\\Controller\\DefaultController::adminPageAction'], [], [['text', '/admin/']], [], []],
        'user_info' => [[], ['_controller' => 'App\\Controller\\DefaultController::showUserAction'], [], [['text', '/user']], [], []],
        'events' => [[], ['_controller' => 'App\\Controller\\EventsController::index'], [], [['text', '/events']], [], []],
        'modif_event' => [['id'], ['_controller' => 'App\\Controller\\EventsController::modifierProduit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/events']], [], []],
        'new_event' => [[], ['_controller' => 'App\\Controller\\EventsController::newEvent'], [], [['text', '/admin/events/new']], [], []],
        'event' => [['id'], ['_controller' => 'App\\Controller\\EventsController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/events']], [], []],
        'home' => [[], ['_controller' => 'App\\Controller\\HomeController::contact'], [], [['text', '/']], [], []],
        'inscription_event' => [['id'], ['_controller' => 'App\\Controller\\InscriptionEventController::index'], [], [['text', '/inscription/event'], ['variable', '/', '[^/]++', 'id', true]], [], []],
        'new_inscription' => [['id'], ['_controller' => 'App\\Controller\\InscriptionEventController::newInscription'], [], [['text', '/inscription/event/new'], ['variable', '/', '[^/]++', 'id', true]], [], []],
        'security_registration' => [[], ['_controller' => 'App\\Controller\\SecurityController::registration'], [], [['text', '/security']], [], []],
        'security_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], []],
        'security_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], []],
        'users_index' => [[], ['_controller' => 'App\\Controller\\UsersController::index'], [], [['text', '/users/']], [], []],
        'users_new' => [['id'], ['_controller' => 'App\\Controller\\UsersController::new'], [], [['text', '/users/new'], ['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], []],
        'users_show' => [['id'], ['_controller' => 'App\\Controller\\UsersController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], []],
        'users_edit' => [['id'], ['_controller' => 'App\\Controller\\UsersController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], []],
        'users_delete' => [['id'], ['_controller' => 'App\\Controller\\UsersController::delete'], [], [['text', '/users'], ['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], []],
        'easyadmin' => [[], ['_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], [], [['text', '/administration/']], [], []],
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        'fos_user_security_login' => [[], ['_controller' => 'fos_user.security.controller:loginAction'], [], [['text', '/login']], [], []],
        'fos_user_security_check' => [[], ['_controller' => 'fos_user.security.controller:checkAction'], [], [['text', '/login_check']], [], []],
        'fos_user_security_logout' => [[], ['_controller' => 'fos_user.security.controller:logoutAction'], [], [['text', '/logout']], [], []],
        'fos_user_profile_show' => [[], ['_controller' => 'fos_user.profile.controller:showAction'], [], [['text', '/profile/']], [], []],
        'fos_user_profile_edit' => [[], ['_controller' => 'fos_user.profile.controller:editAction'], [], [['text', '/profile/edit']], [], []],
        'fos_user_registration_register' => [[], ['_controller' => 'fos_user.registration.controller:registerAction'], [], [['text', '/register/']], [], []],
        'fos_user_registration_check_email' => [[], ['_controller' => 'fos_user.registration.controller:checkEmailAction'], [], [['text', '/register/check-email']], [], []],
        'fos_user_registration_confirm' => [['token'], ['_controller' => 'fos_user.registration.controller:confirmAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/register/confirm']], [], []],
        'fos_user_registration_confirmed' => [[], ['_controller' => 'fos_user.registration.controller:confirmedAction'], [], [['text', '/register/confirmed']], [], []],
        'fos_user_resetting_request' => [[], ['_controller' => 'fos_user.resetting.controller:requestAction'], [], [['text', '/resetting/request']], [], []],
        'fos_user_resetting_send_email' => [[], ['_controller' => 'fos_user.resetting.controller:sendEmailAction'], [], [['text', '/resetting/send-email']], [], []],
        'fos_user_resetting_check_email' => [[], ['_controller' => 'fos_user.resetting.controller:checkEmailAction'], [], [['text', '/resetting/check-email']], [], []],
        'fos_user_resetting_reset' => [['token'], ['_controller' => 'fos_user.resetting.controller:resetAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/resetting/reset']], [], []],
        'fos_user_change_password' => [[], ['_controller' => 'fos_user.change_password.controller:changePasswordAction'], [], [['text', '/profile/change-password']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
