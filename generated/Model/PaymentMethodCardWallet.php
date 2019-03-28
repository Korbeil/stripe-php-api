<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class PaymentMethodCardWallet
{
    /**
     * @var PaymentMethodCardWalletAmexExpressCheckout
     */
    protected $amexExpressCheckout;
    /**
     * @var PaymentMethodCardWalletApplePay
     */
    protected $applePay;
    /**
     * (For tokenized numbers only.) The last four digits of the device account number.
     *
     * @var string
     */
    protected $dynamicLast4;
    /**
     * @var PaymentMethodCardWalletGooglePay
     */
    protected $googlePay;
    /**
     * @var PaymentMethodCardWalletMasterpass
     */
    protected $masterpass;
    /**
     * @var PaymentMethodCardWalletSamsungPay
     */
    protected $samsungPay;
    /**
     * The type of the card wallet, one of `amex_express_checkout`, `apple_pay`, `google_pay`, `masterpass`, `samsung_pay`, or `visa_checkout`. An additional hash is included on the Wallet subhash with a name matching this value. It contains additional information specific to the card wallet type.
     *
     * @var string
     */
    protected $type;
    /**
     * @var PaymentMethodCardWalletVisaCheckout
     */
    protected $visaCheckout;

    /**
     * @return PaymentMethodCardWalletAmexExpressCheckout
     */
    public function getAmexExpressCheckout(): ?PaymentMethodCardWalletAmexExpressCheckout
    {
        return $this->amexExpressCheckout;
    }

    /**
     * @param PaymentMethodCardWalletAmexExpressCheckout $amexExpressCheckout
     *
     * @return self
     */
    public function setAmexExpressCheckout(?PaymentMethodCardWalletAmexExpressCheckout $amexExpressCheckout): self
    {
        $this->amexExpressCheckout = $amexExpressCheckout;

        return $this;
    }

    /**
     * @return PaymentMethodCardWalletApplePay
     */
    public function getApplePay(): ?PaymentMethodCardWalletApplePay
    {
        return $this->applePay;
    }

    /**
     * @param PaymentMethodCardWalletApplePay $applePay
     *
     * @return self
     */
    public function setApplePay(?PaymentMethodCardWalletApplePay $applePay): self
    {
        $this->applePay = $applePay;

        return $this;
    }

    /**
     * (For tokenized numbers only.) The last four digits of the device account number.
     *
     * @return string
     */
    public function getDynamicLast4(): ?string
    {
        return $this->dynamicLast4;
    }

    /**
     * (For tokenized numbers only.) The last four digits of the device account number.
     *
     * @param string $dynamicLast4
     *
     * @return self
     */
    public function setDynamicLast4(?string $dynamicLast4): self
    {
        $this->dynamicLast4 = $dynamicLast4;

        return $this;
    }

    /**
     * @return PaymentMethodCardWalletGooglePay
     */
    public function getGooglePay(): ?PaymentMethodCardWalletGooglePay
    {
        return $this->googlePay;
    }

    /**
     * @param PaymentMethodCardWalletGooglePay $googlePay
     *
     * @return self
     */
    public function setGooglePay(?PaymentMethodCardWalletGooglePay $googlePay): self
    {
        $this->googlePay = $googlePay;

        return $this;
    }

    /**
     * @return PaymentMethodCardWalletMasterpass
     */
    public function getMasterpass(): ?PaymentMethodCardWalletMasterpass
    {
        return $this->masterpass;
    }

    /**
     * @param PaymentMethodCardWalletMasterpass $masterpass
     *
     * @return self
     */
    public function setMasterpass(?PaymentMethodCardWalletMasterpass $masterpass): self
    {
        $this->masterpass = $masterpass;

        return $this;
    }

    /**
     * @return PaymentMethodCardWalletSamsungPay
     */
    public function getSamsungPay(): ?PaymentMethodCardWalletSamsungPay
    {
        return $this->samsungPay;
    }

    /**
     * @param PaymentMethodCardWalletSamsungPay $samsungPay
     *
     * @return self
     */
    public function setSamsungPay(?PaymentMethodCardWalletSamsungPay $samsungPay): self
    {
        $this->samsungPay = $samsungPay;

        return $this;
    }

    /**
     * The type of the card wallet, one of `amex_express_checkout`, `apple_pay`, `google_pay`, `masterpass`, `samsung_pay`, or `visa_checkout`. An additional hash is included on the Wallet subhash with a name matching this value. It contains additional information specific to the card wallet type.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * The type of the card wallet, one of `amex_express_checkout`, `apple_pay`, `google_pay`, `masterpass`, `samsung_pay`, or `visa_checkout`. An additional hash is included on the Wallet subhash with a name matching this value. It contains additional information specific to the card wallet type.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return PaymentMethodCardWalletVisaCheckout
     */
    public function getVisaCheckout(): ?PaymentMethodCardWalletVisaCheckout
    {
        return $this->visaCheckout;
    }

    /**
     * @param PaymentMethodCardWalletVisaCheckout $visaCheckout
     *
     * @return self
     */
    public function setVisaCheckout(?PaymentMethodCardWalletVisaCheckout $visaCheckout): self
    {
        $this->visaCheckout = $visaCheckout;

        return $this;
    }
}