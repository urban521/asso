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
        'agasso' => [['id'], ['_controller' => 'App\\Controller\\AgassoController::index'], [], [['text', '/agasso'], ['variable', '/', '[^/]++', 'id', true]], [], []],
        'new_agasso' => [['id'], ['_controller' => 'App\\Controller\\AgassoController::newAgasso'], [], [['text', '/agasso/new'], ['variable', '/', '[^/]++', 'id', true]], [], []],
        'agassos' => [['id'], ['_controller' => 'App\\Controller\\AgassoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/agasso']], [], []],
        'assos' => [[], ['_controller' => 'App\\Controller\\AssosController::index'], [], [['text', '/assos']], [], []],
        'new_assos' => [[], ['_controller' => 'App\\Controller\\AssosController::newAsso'], [], [['text', '/assos/new']], [], []],
        'events' => [[], ['_controller' => 'App\\Controller\\EventsController::index'], [], [['text', '/events']], [], []],
        'modif_event' => [['id'], ['_controller' => 'App\\Controller\\EventsController::modifierProduit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/events']], [], []],
        'new_event' => [[], ['_controller' => 'App\\Controller\\EventsController::newEvent'], [], [['text', '/events/new']], [], []],
        'event' => [['id'], ['_controller' => 'App\\Controller\\EventsController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/events']], [], []],
        'security_registration' => [[], ['_controller' => 'App\\Controller\\SecurityController::registration'], [], [['text', '/security']], [], []],
        'security_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], []],
        'security_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], []],
        'users_index' => [[], ['_controller' => 'App\\Controller\\UsersController::index'], [], [['text', '/users/']], [], []],
        'users_new' => [[], ['_controller' => 'App\\Controller\\UsersController::new'], [], [['text', '/users/new']], [], []],
        'users_show' => [['id'], ['_controller' => 'App\\Controller\\UsersController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], []],
        'users_edit' => [['id'], ['_controller' => 'App\\Controller\\UsersController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], []],
        'users_delete' => [['id'], ['_controller' => 'App\\Controller\\UsersController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], []],
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
