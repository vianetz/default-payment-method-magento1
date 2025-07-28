<?php
declare(strict_types=1);

/**
 * @package Vianetz\DefaultPaymentMethod
 * @copyright Copyright (c) 2016 - 2025 vianetz - Dipl.-Ing. C. Massmann (https://www.vianetz.com)
 * @license https://opensource.org/license/osl-3 Open Software License (OSL 3.0)
 */
final class Vianetz_DefaultPaymentMethod_Block_Onepage_Payment_Methods extends Mage_Checkout_Block_Onepage_Payment_Methods
{
    #[Override]
    public function getSelectedMethodCode(): false|string
    {
        $method = parent::getSelectedMethodCode();
        if (empty($method)) {
            $method = $this->helper('vianetz_defaultpaymentmethod')->getDefaultPaymentMethodCode();
        }

        return $method ?? false;
    }
}