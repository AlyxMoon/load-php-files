<?php
namespace Grav\Plugin;

use Composer\Autoload\ClassLoader;
use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

class LoadPhpFilesPlugin extends Plugin
{
    public static function getSubscribedEvents(): array
    {
        return [
            'onGetPageTemplates' => ['onGetPageTemplates', 0],
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    public function autoload(): ClassLoader
    {
        return require __DIR__ . '/vendor/autoload.php';
    }

    public function onGetPageTemplates(Event $event): void
    {
        $event->types->register(
            'display-php-content',
            'plugins://load-php-files/blueprints/pages/display-php-content.yaml'
        );
    }

    public function onPluginsInitialized(): void
    {
        if ($this->isAdmin()) {
            return;
        }

        $this->enable([
            'onTwigExtensions' => ['onTwigExtensions', 0]
        ]);
    }

    public function onTwigExtensions(): void
    {
        require_once(__DIR__ . '/twig/LoadPhpFilesTwigExtension.php');
        $this->grav['twig']->twig->addExtensions(new LoadPhpFilesTwigExtension());
    }
}
