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
class CardformBlock extends BlockBase {

 /*  protected function blockAccess(AccountInterface $account) {
    return AccessResult::allowedIfHasPermission($account, 'search content');
  }

  public function build() {
    return \Drupal::formBuilder()->getForm('Drupal\search\Form\SearchBlockForm');
  }
 */
 
/*    public function build() {
    return array(
      '#markup' => $this->t('Hello, World!'),
    );
	
	return array(
      '#theme' => 'node--business-cards--full',
    );
	
	
  } */
  
  public function build() {
  return array(
		'#title' => 'PREVIEW',
		'#theme' => 'business_cards',
			'#company' => 'company',
			'#job' => 'job',
			'#name' => 'name',
			'#lastname' => 'lastname',
			'#address' => $field_adress,
			'#num' => 'num',
			'#email' => 'email',
    );
  }
 
 
}
