<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\InventoryApi\Api;

/**
 * Assign Sources to Stock
 *
 * Used fully qualified namespaces in annotations for proper work of WebApi request parser
 *
 * @api
 */
interface AssignSourcesToStockInterface
{
    /**
     * Assign Sources to Stock
     *
     * If one of the Sources or Stock with given id don't exist then exception will be throw
     *
     * @param int[] $sourceIds
     * @param int $stockId
     * @return void
     * @throws \Magento\Framework\Exception\InputException
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     */
    public function execute(array $sourceIds, int $stockId);
}
