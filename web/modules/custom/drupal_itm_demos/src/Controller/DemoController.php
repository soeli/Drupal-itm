<?php

namespace Drupal\drupal_itm_demos\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DemoController.
 */
class DemoController extends ControllerBase {

  /**
   * Testtheme.
   *
   * @return string
   *   Return Hello string.
   */




   public function testTheme() {
     $items = [
       [
         'title' => $this->t('title 1'),
         'description'=> $this->t('description 1'),
       ],
       [
         'title' => $this->t('title 2'),
         'description'=> $this->t('description 2'),
       ],
       [
         'title' => $this->t('title 3'),
         'description'=> $this->t('description 3'),
       ],
   ];
   $build = [
       'items' => [],
       '#prefix' => '<div id="accordion">',
       '#suffix' => '</div>',
       '#attached' => [
         'library' => [
           'core/jquery.ui.accordion',
           'drupal_itm_demos/demo',
         ],
       ],
   ];
   foreach ($items as $item){
     $build['items'][] = [ //corchetes vacios es agregarlo a un indice nuevo
       '#theme' => 'item_accordion',
       '#title' => $item['title'],
       '#description' => $item['description'],
     ];
   }
   ksm($build);//para imprimir lo que hay dentro de la variable
     return $build;
   }

}
