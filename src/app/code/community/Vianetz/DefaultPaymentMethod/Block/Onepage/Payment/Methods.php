<?php
/**
 * DefaultPaymentMethod Payment Methods Block Rewrite
 *
 * @section LICENSE
 * This file is created by vianetz <info@vianetz.com>.
 * The Magento module is distributed under a commercial license.
 * Any redistribution, copy or direct modification is explicitly not allowed.
 *
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@vianetz.com so we can send you a copy immediately.
 *
 * @category    Vianetz
 * @package     Vianetz_DefaultPaymentMethod
 * @author      Christoph Massmann, <C.Massmann@vianetz.com>
 * @link        http://www.vianetz.com
 * @copyright   Copyright (c) 2006-16 vianetz - C. Massmann (http://www.vianetz.com)
 * @license     http://www.vianetz.com/license Commercial Software License
 * @version     %%MODULE_VERSION%%
 */
class Vianetz_DefaultPaymentMethod_Block_Onepage_Payment_Methods extends Mage_Checkout_Block_Onepage_Payment_Methods
{
    /**
     * Retrieve code of current payment method or the configured one by default.
     *
     * @return string the payment method code.
     */
    public function getSelectedMethodCode()
    {
        $method = parent::getSelectedMethodCode();
        if (empty($method) === true) {
            $method = Mage::getStoreConfig('vianetz_defaultpaymentmethod/general/default_payment_method');
        }
        
        return $method;
    }
}