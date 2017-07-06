<?php

namespace Drupal\cardform\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'cardform' block.
 *
 * @Block(
 *   id = "cardform_block",
 *   admin_label = @Translation("cardform"),
 *   category = @Translation("cardform")
 * )
 */
class BusinessCardFormBlock extends BlockBase {

  public function build() {
  return array(
		'#title' => '',
		'#theme' => 'business_cards',
			'#company' => '',
			'#job' => '',
			'#name' => '',
			'#lastname' => '',
			'#address' => '',
			'#num' => '',
			'#email' => '',
      '#pattern' => '',
    );
  }
}
