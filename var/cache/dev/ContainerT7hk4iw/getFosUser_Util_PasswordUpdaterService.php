<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_user.util.password_updater' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Util/PasswordUpdaterInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Util/PasswordUpdater.php';

return $this->services['fos_user.util.password_updater'] = new \FOS\UserBundle\Util\PasswordUpdater(${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->load('getSecurity_EncoderFactoryService.php')) && false ?: '_'});
