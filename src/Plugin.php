<?php

namespace NextEuropa\PlatformScaffold;

use Composer\Composer;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Script\Event;
use Composer\Script\ScriptEvents;

/**
 * Composer plugin handling Drupal component scaffolding.
 *
 * @package NextEuropa\PlatformScaffold
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
class Plugin implements PluginInterface, EventSubscriberInterface
{

  /**
   * @var \NextEuropa\PlatformScaffold\Handler
   */
    protected $handler;

    /**
     * {@inheritdoc}
     */
    public function activate(Composer $composer, IOInterface $io)
    {
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
        ScriptEvents::POST_INSTALL_CMD => 'postCommand',
        ScriptEvents::POST_UPDATE_CMD => 'postCommand',
        ];
    }

    /**
     * Post package event behaviour.
     *
     * @param Event $event
     */
    public function postCommand(Event $event)
    {
        $handler = new Handler($event->getComposer(), $event->getIO());
        $handler->scaffoldPlatform();
    }
}
