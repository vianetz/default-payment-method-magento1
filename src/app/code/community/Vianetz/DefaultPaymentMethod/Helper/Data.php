<?php
declare(strict_types=1);

/**
 * @package Vianetz\DefaultPaymentMethod
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU GENERAL PUBLIC LICENSE
 */
final class Vianetz_DefaultPaymentMethod_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getDefaultPaymentMethodCode(): string
    {
        return Mage::getStoreConfig('vianetz_defaultpaymentmethod/general/default_payment_method');
    }
}