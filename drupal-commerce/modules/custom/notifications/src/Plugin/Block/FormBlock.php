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
    $today = date("Y-m-d");

    if (!empty($config['from'] <= $today and $config['to'] >= $today)) {
      $notification = $config['notification'];

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
    }
    else {
      $notification = $this->t('');
    }


    
  
    

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
    $form['from'] = [
      '#type' => 'date',
      '#title' => $this->t('From date'),
      '#default_value' => $config["from"],    
    ];

    #dd($form);
    $form['to'] = [
      '#type' => 'date',
      '#title' => $this->t('to date'),
      '#default_value' => $config["to"],
    ];

 
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['notification'] = $form_state->getValue('notification');

    $this->configuration['from'] = $form_state->getValue('from');
    $this->configuration['to'] = $form_state->getValue('to');
  }

}