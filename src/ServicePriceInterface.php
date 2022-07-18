<?php

namespace Drupal\section_price;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining a service-price entity type.
 */
interface ServicePriceInterface extends ContentEntityInterface, EntityOwnerInterface {

  /**
   * Gets the service-price title.
   *
   * @return string
   *   Title of the service-price.
   */
  public function getTitle();

  /**
   * Sets the service-price title.
   *
   * @param string $title
   *   The service-price title.
   *
   * @return \Drupal\section_price\ServicePriceInterface
   *   The called service-price entity.
   */
  public function setTitle($title);

}
