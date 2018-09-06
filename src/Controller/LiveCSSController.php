<?php
/**
 * @file
 * Contains \Drupal\acro_live_css\Controller\LiveCSSController.
 */

namespace Drupal\acro_live_css\Controller;

use Drupal\Core\Controller\ControllerBase;

class LiveCSSController extends ControllerBase {
  public function content() {
    $page = [
      '#type' => 'page',
      '#theme' => 'live_css',
    ];

    return $page;
  }
}
