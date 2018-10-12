<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'swiftmailer.mailer.default' shared service.

include_once $this->targetDirs[3].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Spool.php';
include_once $this->targetDirs[3].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\MemorySpool.php';
include_once $this->targetDirs[3].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport.php';
include_once $this->targetDirs[3].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\SpoolTransport.php';
include_once $this->targetDirs[3].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mailer.php';
include_once $this->targetDirs[3].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Events\\EventDispatcher.php';
include_once $this->targetDirs[3].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Events\\SimpleEventDispatcher.php';

return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer(new \Swift_Transport_SpoolTransport(($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] ?? $this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher()), new \Swift_MemorySpool()));
