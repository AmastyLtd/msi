<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Inventory\Model\Stock\Validator;

use Magento\Framework\Validation\ValidationResult;
use Magento\InventoryApi\Api\Data\StockInterface;

/**
 * Responsible for Stock validation
 * Extension point for base validation
 *
 * @api
 */
interface StockValidatorInterface
{
    /**
     * @param StockInterface $stock
     * @return ValidationResult
     */
    public function validate(StockInterface $stock): ValidationResult;
}
