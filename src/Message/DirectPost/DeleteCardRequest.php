<?php

namespace Omnipay\NMI\Message\DirectPost;

/**
* NMI Direct Post Delete Card Request
*/
class DeleteCardRequest extends DirectPostAbstractRequest
{
    protected $customer_vault = 'delete_customer';

    /**
     * @return array|mixed
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData()
    {
        $this->validate('cardReference');

        $data = $this->getBaseData();

        $data['customer_vault_id'] = $this->getCardReference();

        return $data;
    }
}
