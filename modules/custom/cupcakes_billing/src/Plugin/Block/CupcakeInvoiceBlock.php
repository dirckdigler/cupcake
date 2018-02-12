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
    $config = \Drupal::config('cupcakes_billing.settings');
    $variable_one = $config->get('field_sale_name');
    $build['markup'] = array(
      '#theme'        => 'cupcake_invoice',
      '#mama'         => $config->get('field_sale_name'),
      '#papa'         => 'papa',
    );
    return $build;
  }
}
