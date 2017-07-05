<?php

namespace Drupal\cardform\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'previewpostalversocards' block.
 *
 * @Block(
 *   id = "previewpostalcardsverso_block",
 *   admin_label = @Translation("previewpostalcardsverso"),
 *   category = @Translation("previewpostalcardsverso")
 * )
 */
class PostalcardsVersoBlock extends BlockBase {

  public function build() {
  return array(
		'#title' => '',
		'#theme' => 'postal_cards_verso',
			'#verso' => '',
			'#nouvelles' => '',
			'#nom' => '',
			'#prenom' => '',
			'#adresse' => '',
    );
  }
}
