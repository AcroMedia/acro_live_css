<?php
/**
 * @file
 * Contains \Drupal\acro_live_css\Controller\LiveCSSController.
 */

namespace Drupal\acro_live_css\Controller;

use Drupal\Core\Controller\ControllerBase;

class LiveCSSController extends ControllerBase {
  public function content() {
    // Check if Orange E-Commerce Starter theme is enabled.
    $orange_ecom_starter_is_active = NULL;
    $themes_list = \Drupal::service('theme_handler')->listInfo();

    if (isset($themes_list['orange_ecom_starter']) && $themes_list['orange_ecom_starter']->status == 1) {
      $orange_ecom_starter_is_active = TRUE;
    }

    $page = [
      '#type' => 'page',
      '#theme' => 'live_css',
      '#orange_ecom_starter_is_active' => $orange_ecom_starter_is_active,
    ];

    return $page;
  }
}
