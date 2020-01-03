<?php

namespace Omnipay\NMI\Message\ThreeStepRedirect;

/**
 * NMI Three Step Redirect Complete Request
 */
class CompleteActionRequest extends ThreeStepRedirectAbstractRequest
{
    /**
     * @var string
     */
    protected $type = 'complete-action';

    /**
     * @return array|mixed
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData()
    {
        $this->validate('token_id');

        return [
            'api-key'  => $this->getApiKey(),
            'token-id' => $this->getTokenId(),
        ];
    }
}
