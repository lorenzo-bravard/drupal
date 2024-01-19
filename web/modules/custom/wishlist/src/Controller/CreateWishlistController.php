<?php

namespace Drupal\wishlist\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An example controller.
 */
class CreateWishlistController extends ControllerBase {

  /**
   * Returns a render-able array for a test page.
   */
  public function content() {
    $build = [
      '#markup' => $this->t('Hello World!'),
    ];

    $build['table']=[
      '#theme' => 'wishlist_custom_template',
      '#test_var' => 'Valeur de ma viariable',
    ];

    return $build;
  
  }
}