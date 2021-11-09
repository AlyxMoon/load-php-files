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
    return $path;
  }
}