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
            'onPluginsInitialized' => ['onPluginsInitialized', 0],
            'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0]
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

        $event->types->register(
            'modular/display-php-content-modular',
            'plugins://load-php-files/blueprints/pages/modular/display-php-content.yaml'
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
        $this->grav['twig']->twig->addExtension(new LoadPhpFilesTwigExtension());
    }

    public function onTwigTemplatePaths(): void
    {
        $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
    }
}
