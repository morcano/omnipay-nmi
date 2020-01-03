<?php

namespace Omnipay\NMI\Message\DirectPost;

/**
* NMI Direct Post Create Card Request
*/
class CreateCardRequest extends DirectPostAbstractRequest
{
    protected $customer_vault = 'add_customer';

    /**
     * @return array|mixed
     * @throws \Omnipay\Common\Exception\InvalidCreditCardException
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData()
    {
        $this->validate('card');
        $this->getCard()->validate();

        $data = $this->getBaseData();

        $data['ccnumber'] = $this->getCard()->getNumber();
        $data['ccexp'] = $this->getCard()->getExpiryDate('my');
        $data['payment'] = 'creditcard';

        if ('update_customer' === $this->customer_vault) {
            $data['customer_vault_id'] = $this->getCardReference();
        }

        return array_merge(
            $data,
            $this->getBillingData(),
            $this->getShippingData()
        );
    }
}
