<?php

namespace Drupal\notifications\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'Form' Block.
 *
 * @Block(
 *   id = "form_block",
 *   admin_label = @Translation("Form block"),
 *   category = @Translation("Forms"),
 * )
 */
class FormBlock extends BlockBase {

    /**
   * {@inheritdoc}
   */  
  public function build() {
    $config = $this->getConfiguration();

    if (!empty($config['notification'])) {
      $notification = $config['notification'];
    }
    else {
      $notification = $this->t('');
    }


    $block = [
			'notification' => [
        '#attached' => [
          'library' => [
            'notifications/form-block',
          ],
        ],
			 '#prefix' => '<div class="notification"><p>', 
			 '#suffix' => '</p></div>',
			 '#markup' => $this->t('@notification',['@notification' => $notification,]
       ),
    ]
  ];
    return $block;
  }


  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form = parent::blockForm($form, $form_state);
    
    $config = $this->getConfiguration();
    #dd($config);
    $form['notification'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Notification'),
      '#description' => $this->t('Add a notification in grid products page'),
      '#default_value' => $config['notification'] ?? '',
    ];
    $from = explode("-", $config["from"]);
    #dd($from);
    $form['from'] = [
      '#type' => 'date',
      '#title' => $this->t('From date'),
      '#default_value' => $config["from"],  
     
    ];
   /*  $form['to'] = [
      '#type' => 'date',
      '#title' => $this->t('to date'),
      '#default_value' => array(
        'year' => 2022,
        'month' => 2,
        'day' => 15,
      ),

    ];
 */
 
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['notification'] = $form_state->getValue('notification');

    $this->configuration['from'] = $form_state->getValue('from');
  }

}