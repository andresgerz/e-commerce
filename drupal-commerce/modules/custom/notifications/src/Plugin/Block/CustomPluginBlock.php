<?php

namespace Drupal\notifications\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'custom plugin block' Block.
 *
 * @Block(
 *   id = "custom_plugin_block",
 *   admin_label = @Translation("custom plugin block"),
 *   category = @Translation("Our example custom plugin block"),
 * )
 */
class CustomPluginBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => 'Today are there many discountings!',
      '#cache' => [
        'max-age' => 0
      ],
    ];
  }

}