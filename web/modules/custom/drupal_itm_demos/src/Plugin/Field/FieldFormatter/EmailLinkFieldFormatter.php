<?php

namespace Drupal\drupal_itm_demos\Plugin\Field\FieldFormatter;

// la borramos por que no se esta usando use Drupal\Component\Utility\Html;
use Drupal\Core\Field\FieldItemInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\Core\Link;

/**
 * Plugin implementation of the 'email_link_field_formatter' formatter.
 *
 * @FieldFormatter(
 *   id = "email_link_field_formatter",
 *   label = @Translation("Email link field formatter"),
 *   field_types = {
 *     "email"
 *   }
 * )
 */
class EmailLinkFieldFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
/* No ocupamos settings entonces se borran
  public static function defaultSettings() {
    return [
      // Implement default settings.
    ] + parent::defaultSettings();
  }*/

  /*
   * {@inheritdoc}

  public function settingsForm(array $form, FormStateInterface $form_state) {
    return [
      // Implement settings form.
    ] + parent::settingsForm($form, $form_state);
  }

  /**
   * {@inheritdoc}

  public function settingsSummary() {
    $summary = [];
    // Implement settings summary.

    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];

    foreach ($items as $delta => $item) {
      $elements[$delta] = ['#markup' => $this->viewValue($item)];
    }

    return $elements;
  }

  /**
   * Generate the output appropriate for one field item.
   *
   * @param \Drupal\Core\Field\FieldItemInterface $item
   *   One field item.
   *
   * @return string
   *   The textual output generated.
   */


   //La interface es una gia, que le da todas esas funciones
   //los magic methods siempre empiezan con doble raya bajo un ejemplo es el constructor
   //regla numero uno tener devel activado
  protected function viewValue(FieldItemInterface $item) {
      $url = Url::fromUri('mailto:' . $item->value);
      $link = Link::fromTextAndUrl($this->t('Send email'), $url);
      return $link->toString();
  }

}
