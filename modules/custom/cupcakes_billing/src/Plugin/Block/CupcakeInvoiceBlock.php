<?php
/**
 * @file
 * Contains \Drupal\cupcakes_billing\Plugin\Block\CupcakesBillingBlock.
 */

namespace Drupal\cupcakes_billing\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'Invoice block.
 *
 * @Block(
 *   id = "cupcakes_billing_block",
 *   admin_label = @Translation("Cupcakes billing block"),
 * )
 */
class CupcakeInvoiceBlock extends BlockBase implements BlockPluginInterface {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['markup'] = array(
      '#theme'   => 'cupcake_invoice',
      '#report'  => 'Invoices by client',
      '#ranking' => 'Ranking sales',
      '#monthly' => 'Monthly sales',
    );
    return $build;
  }
}
