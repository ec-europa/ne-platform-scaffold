<?php

namespace NextEuropa\PlatformScaffold;

use Composer\Composer;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\IO\IOInterface;
use Composer\Plugin\Capable;
use Composer\Plugin\PluginInterface;
use Composer\Plugin\Capability\CommandProvider as CommandProviderCapability;
use Composer\Script\Event;
use Composer\Script\ScriptEvents;

/**
 * Composer plugin handling Drupal component scaffolding.
 */
class Plugin implements PluginInterface
{

  /**
   * {@inheritdoc}
   */
    public function activate(Composer $composer, IOInterface $io)
    {
    }
}
