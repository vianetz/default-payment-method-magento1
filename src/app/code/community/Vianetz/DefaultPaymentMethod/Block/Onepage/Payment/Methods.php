<?php
declare(strict_types=1);

/**
 * @package Vianetz\DefaultPaymentMethod
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU GENERAL PUBLIC LICENSE
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