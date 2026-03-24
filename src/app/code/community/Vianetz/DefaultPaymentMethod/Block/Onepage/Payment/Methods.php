<?php
declare(strict_types=1);

/**
 * @package Vianetz\DefaultPaymentMethod
 * @copyright Copyright (c) 2016-2026 vianetz - Dipl.-Ing. C. Massmann (https://www.vianetz.com)
 * @license https://opensource.org/license/osl-3 Open Software License (OSL 3.0)
 */
final class Vianetz_DefaultPaymentMethod_Block_Onepage_Payment_Methods extends Mage_Checkout_Block_Onepage_Payment_Methods
{
    #[Override]
    protected function _prepareLayout(): self
    {
        parent::_prepareLayout();

        if (count($this->getActiveMethods()) <= 1) {
            return $this;
        }

        $defaultCode = $this->helper('vianetz_defaultpaymentmethod')->getDefaultPaymentMethodCode();
        $formBlock = $this->getChild('payment.method.' . $defaultCode);
        if ($formBlock === false) {
            return $this;
        }

        $formBlock->setMethodLabelAfterHtml($this->helper('vianetz_defaultpaymentmethod')->getLabelText());

        return $this;
    }

    #[Override]
    public function getSelectedMethodCode(): false|string
    {
        $method = parent::getSelectedMethodCode();
        if (empty($method)) {
            $method = $this->helper('vianetz_defaultpaymentmethod')->getDefaultPaymentMethodCode();
        }

        return $method ?? false;
    }

    private function getActiveMethods(): array
    {
        return array_filter($this->getMethods(), static fn ($method) => ! $method->getData('disabled'));
    }
}