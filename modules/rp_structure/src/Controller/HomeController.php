<?php

namespace Drupal\rp_structure\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\RedirectResponse;
/**
 * Controller routines for page example routes.
 */
class HomeController extends ControllerBase {

  /**
   * {@inheritdoc}
   */
  protected function getModuleName() {
    return 'rp_structure';
  }

  public function front() {
    return array(
      '#markup' => '',
    );
  }


  public function cheatsheet() {
    return [
      '#theme' => 'cheatsheet',
    ];
  }

  public function settings() {
    $user = \Drupal::currentUser()->id();
    $url = \Drupal::url('entity.user.edit_form', ['user' => $user]);
    return new RedirectResponse($url);
  }

}
