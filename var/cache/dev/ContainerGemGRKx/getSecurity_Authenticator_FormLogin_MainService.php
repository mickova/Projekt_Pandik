<?php

namespace ContainerGemGRKx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_FormLogin_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.form_login.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authenticator'.\DIRECTORY_SEPARATOR.'AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authenticator'.\DIRECTORY_SEPARATOR.'AbstractAuthenticator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'EntryPoint'.\DIRECTORY_SEPARATOR.'AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authenticator'.\DIRECTORY_SEPARATOR.'InteractiveAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authenticator'.\DIRECTORY_SEPARATOR.'AbstractLoginFormAuthenticator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authenticator'.\DIRECTORY_SEPARATOR.'FormLoginAuthenticator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'DefaultAuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'DefaultAuthenticationFailureHandler.php';

        $a = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));
        $b = ($container->privates['logger'] ?? $container->getLoggerService());

        $c = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, [], $b);
        $c->setOptions(['login_path' => 'login', 'default_target_path' => 'homepage', 'always_use_default_target_path' => false, 'target_path_parameter' => '_target_path', 'use_referer' => false]);
        $c->setFirewallName('main');
        $d = ($container->services['http_kernel'] ?? $container->getHttpKernelService());

        if (isset($container->privates['security.authenticator.form_login.main'])) {
            return $container->privates['security.authenticator.form_login.main'];
        }

        $e = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($d, $a, [], $b);
        $e->setOptions(['login_path' => 'login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

        return $container->privates['security.authenticator.form_login.main'] = new \Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator($a, ($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService')), $c, $e, ['login_path' => 'login', 'check_path' => 'login', 'username_parameter' => 'login_form[email]', 'password_parameter' => 'login_form[password]', 'use_forward' => false, 'require_previous_session' => false, 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'enable_csrf' => false, 'post_only' => true, 'form_only' => false]);
    }
}
