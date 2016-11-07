<?php
/**
 * @file
 * Contains \Drupal\locationmap\Controller\LocationMapController.
 */

namespace Drupal\locationmap\Controller;

use Drupal\Core\Controller\ControllerBase;

class LocationMapController extends ControllerBase {
  public function content() {
    return array(
        '#type' => 'markup',
        '#markup' => $this->t('Location Map'),
    );
  }
}
