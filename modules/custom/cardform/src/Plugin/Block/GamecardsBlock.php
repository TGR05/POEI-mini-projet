<?php

namespace Drupal\cardform\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'previewgamecards' block.
 *
 * @Block(
 *   id = "previewgamecards_block",
 *   admin_label = @Translation("previewgamecards"),
 *   category = @Translation("previewgamecards")
 * )
 */
class GamecardsBlock extends BlockBase {

    public function build() {
        return array(
        '#title' => '',
        '#theme' => 'game_cards',
            '#cardname' => '',
            '#carac1' => '',
            '#carac2' => '',
            '#carac3' => '',
            '#carac4' => '',
            '#skill' => '',
            '#question' => '',
            '#answer' => '',
            '#gameimg' => '',
            '#behindimg' => '',
        );
    }
}
