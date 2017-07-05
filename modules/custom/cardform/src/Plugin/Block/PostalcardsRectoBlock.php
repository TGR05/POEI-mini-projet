<?php

namespace Drupal\cardform\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'previewpostalrectocards' block.
 *
 * @Block(
 *   id = "previewpostalcardsrecto_block",
 *   admin_label = @Translation("previewpostalcardsrecto"),
 *   category = @Translation("previewpostalcardsrecto")
 * )
 */
class PostalcardsRectoBlock extends BlockBase {

  public function build() {
  return array(
		'#title' => '',
		'#theme' => 'postal_cards_recto',
			'#ptimodou' => '',
			'#recto' => '',
    );
  }
}
