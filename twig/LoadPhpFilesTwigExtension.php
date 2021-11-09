<?php
namespace Grav\Plugin;

class LoadPhpFilesTwigExtension extends \Twig_Extension
{
  public function getName()
  {
    return 'LoadPhpFilesTwigExtension';
  }

  public function getFunctions()
  {
    return [
      new \Twig_SimpleFunction('loadPHP', [$this, 'loadPHP'])
    ];
  }

  public function loadPHP($path)
  {
    ob_start();
    include (GRAV_ROOT . '/user/data/load-php-files/' . $path . '.php');
    return ob_get_clean();
  }
}