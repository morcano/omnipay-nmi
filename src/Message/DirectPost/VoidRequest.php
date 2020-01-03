<?php

namespace Omnipay\NMI\Message\DirectPost;

class VoidRequest extends DirectPostAbstractRequest
{
    protected $type = 'void';

    /**
     * @return array|mixed
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData()
    {
        $this->validate('transactionReference');

        $data = $this->getBaseData();
        $data['transactionid'] = $this->getTransactionReference();

        return $data;
    }
}
