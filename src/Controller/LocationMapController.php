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
        '#markup' => '<h2>Location Map</h2><div id="locationmap"></div>',
        '#attached' => array (
          'library' => array ('locationmap/locationmap', 'locationmap/google.mapsapi')
        ),
    );
  }
}
