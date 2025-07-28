<?php
declare(strict_types=1);

/**
 * @package Vianetz\DefaultPaymentMethod
 * @copyright Copyright (c) 2016 - 2025 vianetz - Dipl.-Ing. C. Massmann (https://www.vianetz.com)
 * @license https://opensource.org/license/osl-3 Open Software License (OSL 3.0)
 */
final class Vianetz_DefaultPaymentMethod_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getDefaultPaymentMethodCode(): string
    {
        return Mage::getStoreConfig('vianetz_defaultpaymentmethod/general/default_payment_method');
    }
}