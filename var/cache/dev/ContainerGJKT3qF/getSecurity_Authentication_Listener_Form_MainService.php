<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.form.main' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Session\\SessionAuthenticationStrategyInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Session\\SessionAuthenticationStrategy.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Authentication\\AuthenticationSuccessHandlerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Util\\TargetPathTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Authentication\\AuthenticationFailureHandlerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Authentication\\DefaultAuthenticationFailureHandler.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Firewall\\ListenerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Firewall\\AbstractAuthenticationListener.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener.php';

$a = ($this->privates['security.http_utils'] ?? $this->load('getSecurity_HttpUtilsService.php'));
$b = ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php'));

$c = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, array());
$c->setOptions(array('login_path' => 'login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false));
$c->setProviderKey('main');

$d = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler(($this->services['http_kernel'] ?? $this->getHttpKernelService()), $a, array(), $b);
$d->setOptions(array('login_path' => 'login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

return $this->privates['security.authentication.listener.form.main'] = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener(($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'), $a, 'main', $c, $d, array('check_path' => 'login', 'use_forward' => false, 'require_previous_session' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true), $b, ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), NULL);
