<?php

/**
* @file
* Contains \Drupal\cupcakes_billing\Controller\CupcakesBillingController.
 */

namespace Drupal\cupcakes_billing\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;

/**
  * Controlador para devolver el contenido de las páginas definidas
 */
class CupcakesBillingController extends ControllerBase {

  public function reports() {

    return array(
      '#markup' => '<p>' . $this->t('') . '</p>',
    );
  }
}
