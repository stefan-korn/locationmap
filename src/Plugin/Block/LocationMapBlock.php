<?php

namespace Drupal\locationmap\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block
 *
 * @Block(
 *   id = "locationmap_block",
 *   admin_label = @Translation("Location Map Block"),
 * )
 */
class LocationMapBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t('Location Map Block!'),
    );
  }
}
