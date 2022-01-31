<?php

namespace Drupal\my_example\TwigExtension;

use Drupal;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Some twig functions.
 */
class AdobeLaunchExtension extends AbstractExtension {

  public function getFunctions(): array {
    return [
      new TwigFunction('adobe_launch', [$this, 'AdobeLaunch']),
    ];
  }

  /**
   * Helper for retreiving adobe launch file url settings
   */
  public function AdobeLaunch():string {
    $config = Drupal::config('my_example.settings');
    $adobe_launch_url = $config->get('adobe_launch_tool');
    $file_url = '';
    if (isset($adobe_launch_url)) {
      $file_url = $adobe_launch_url;
    }
    return $file_url;
  }

}