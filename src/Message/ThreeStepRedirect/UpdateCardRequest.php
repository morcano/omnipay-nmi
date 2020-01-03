<?php

namespace Omnipay\NMI\Message\ThreeStepRedirect;

/**
 * NMI Three Step Redirect Update Card Request
 */
class UpdateCardRequest extends CreateCardRequest
{
    /**
     * @var string
     */
    protected $type = 'update-customer';

    /**
     * @return array|mixed
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData()
    {
        $data = parent::getData();

        $this->validate('cardReference');

        $data['customer-vault-id'] = $this->getCardReference();

        return $data;
    }
}
