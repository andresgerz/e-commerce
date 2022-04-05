<?php

namespace Drupal\commerce_couching\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements an example form.
 */
class CustomForm extends ConfigFormBase {


  
  /** 
   * Config settings.
   *
   * @var string
   */
  const SETTINGS = 'example.settings';

  /** 
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'example_admin_settings';
  }

  /** 
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      static::SETTINGS,
    ];
  }

  /** 
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config(static::SETTINGS);

    $form['student_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Student name'),
      '#default_value' => $config->get('student_name'),
      '#required' => TRUE,
    ];  

    $form['mentor_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Mentor name'),
      '#default_value' => $config->get('mentor_name'),
      '#required' => TRUE,
    ];  

    return parent::buildForm($form, $form_state);
  }

/** 
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    /*  if (strlen($form_state->getValue('phone_number')) < 3) {
       $form_state->setErrorByName('phone_number', $this->t('The phone number is too short. Please enter a full phone number.'));
     } */
   }
  
  /** 
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Retrieve the configuration.
    $this->configFactory->getEditable(static::SETTINGS)
      // Set the submitted configuration setting.
      ->set('student_name', $form_state->getValue('student_name'))
      // You can set multiple configurations at once by making
      // multiple calls to set().
      ->set('mentor_name', $form_state->getValue('mentor_name'))
      ->save();

    parent::submitForm($form, $form_state);
  }
}