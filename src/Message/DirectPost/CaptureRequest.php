<?php

namespace Omnipay\NMI\Message\DirectPost;

/**
* NMI Direct Post Capture Request
*/
class CaptureRequest extends DirectPostAbstractRequest
{
    protected $type = 'capture';

    /**
     * @return array|mixed
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData()
    {
        $this->validate('transactionReference');

        $data = $this->getBaseData();
        $data['transactionid'] = $this->getTransactionReference();

        if ($this->getAmount() > 0) {
            $data['amount'] = $this->getAmount();
        }

        return $data;
    }
}
