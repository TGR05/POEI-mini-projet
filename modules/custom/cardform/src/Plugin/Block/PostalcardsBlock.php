<?php

namespace Drupal\cardform\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'previewpostalcards' block.
 *
 * @Block(
 *   id = "previewpostalcards_block",
 *   admin_label = @Translation("previewpostalcards"),
 *   category = @Translation("previewpostalcards")
 * )
 */
class PostalcardsBlock extends BlockBase {

    public function build() {
        return array(
        '#title' => '',
        '#theme' => 'postal_cards',
            '#ptimodou' => '',
            '#recto' => '',
            '#verso' => '',
            '#nouvelles' => '',
            '#nom' => '',
            '#prenom' => '',
            '#addresse' => '',
        );
    }
}
