<?php

namespace Omnipay\NMI\Message\ThreeStepRedirect;

/**
 * NMI Three Step Redirect Create Card Request
 */
class CreateCardRequest extends ThreeStepRedirectAbstractRequest
{
    /**
     * @var string
     */
    protected $type = 'add-customer';

    /**
     * @return array|mixed
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData()
    {
        $this->validate('card');

        $data = array(
            'api-key'      => $this->getApiKey(),
            'redirect-url' => $this->getRedirectUrl(),
        );

       return array_merge(
            $data,
            $this->getBillingData(),
            $this->getShippingData()
        );
    }
}
