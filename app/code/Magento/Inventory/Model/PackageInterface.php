<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Inventory\Model;

interface PackageInterface
{
    /**
     * @return \Magento\InventoryApi\Api\Data\SourceInterface
     */
    public function getSource();

    public function getItems();

    public function getQty();

    public function getBaseSubtotal();

    public function getBaseSubtotalWithDiscount();

    public function getWeight();

    public function getItemQty();

    public function getPhysicalValue();
}