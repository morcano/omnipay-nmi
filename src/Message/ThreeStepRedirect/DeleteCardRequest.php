<?php

namespace Omnipay\NMI\Message\ThreeStepRedirect;

/**
 * NMI Three Step Redirect Delete Card Request
 */
class DeleteCardRequest extends ThreeStepRedirectAbstractRequest
{
    /**
     * @var string
     */
    protected $type = 'delete-customer';

    /**
     * @return array|mixed
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData()
    {
        $this->validate('cardReference');

        return [
            'api-key'           => $this->getApiKey(),
            'redirect-url'      => $this->getRedirectUrl(),
            'customer-vault-id' => $this->getCardReference(),
        ];
    }
}
