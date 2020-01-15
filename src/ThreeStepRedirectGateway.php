<?php

namespace Omnipay\NMI;

use Omnipay\Common\AbstractGateway;

/**
 * NMI Three Step Redirect Gateway
 *
 * @link https://www.nmi.com/
 * @link https://gateway.perpetualpayments.com/merchants/resources/integration/integration_portal.php
 */
class ThreeStepRedirectGateway extends AbstractGateway
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'NMI Three Step Redirect';
    }

    /**
     * @return array
     */
    public function getDefaultParameters()
    {
        return array(
            'api_key'      => '',
            'redirect_url' => '',
            'endpoint'     => '',
        );
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->getParameter('api_key');
    }

    /**
     * @param string
     * @return \Omnipay\Common\AbstractGateway
     */
    public function setApiKey($value)
    {
        return $this->setParameter('api_key', $value);
    }

    /**
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->getParameter('redirect_url');
    }

    /**
     * @param string
     * @return \Omnipay\Common\AbstractGateway
     */
    public function setRedirectUrl($value)
    {
        return $this->setParameter('redirect_url', $value);
    }

    /**
     * Transaction sales are submitted and immediately flagged for settlement.
     * @param array
     * @return \Omnipay\NMI\Message\ThreeStepRedirect\SaleRequest
     */
    public function sale(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\NMI\Message\ThreeStepRedirect\SaleRequest', $parameters);
    }

    /**
     * Transaction authorizations are authorized immediately but are not flagged
     * for settlement. These transactions must be flagged for settlement using
     * the capture transaction type. Authorizations typically remain active for
     * three to seven business days.
     * @param array
     * @return \Omnipay\NMI\Message\ThreeStepRedirect\AuthRequest
     */
    public function auth(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\NMI\Message\ThreeStepRedirect\AuthRequest', $parameters);
    }

    /**
     * Transaction captures flag existing authorizations for settlement.
     * Only authorizations can be captured. Captures can be submitted for an
     * amount equal to or less than the original authorization.
     * @param array
     * @return \Omnipay\NMI\Message\ThreeStepRedirect\CaptureRequest
     */
    public function capture(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\NMI\Message\ThreeStepRedirect\CaptureRequest', $parameters);
    }

    /**
     * Transaction voids will cancel an existing sale or captured authorization.
     * In addition, non-captured authorizations can be voided to prevent any
     * future capture. Voids can only occur if the transaction has not been settled.
     * @param array
     * @return \Omnipay\NMI\Message\ThreeStepRedirect\VoidRequest
     */
    public function void(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\NMI\Message\ThreeStepRedirect\VoidRequest', $parameters);
    }

    /**
     * Transaction refunds will reverse a previously settled transaction. If the
     * transaction has not been settled, it must be voided instead of refunded.
     * @param array
     * @return \Omnipay\NMI\Message\ThreeStepRedirect\RefundRequest
     */
    public function refund(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\NMI\Message\ThreeStepRedirect\RefundRequest', $parameters);
    }

    /**
     * Transaction credits apply an amount to the cardholder's card that was not
     * originally processed through the Gateway. In most situations credits are
     * disabled as transaction refunds should be used instead.
     * @param array
     * @return \Omnipay\NMI\Message\ThreeStepRedirect\CreditRequest
     */
    public function credit(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\NMI\Message\ThreeStepRedirect\CreditRequest', $parameters);
    }

    /**
     * @param array
     * @return \Omnipay\NMI\Message\ThreeStepRedirect\CreateCardRequest
     */
    public function createCard(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\NMI\Message\ThreeStepRedirect\CreateCardRequest', $parameters);
    }

    /**
     * @param array
     * @return \Omnipay\NMI\Message\ThreeStepRedirect\UpdateCardRequest
     */
    public function updateCard(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\NMI\Message\ThreeStepRedirect\UpdateCardRequest', $parameters);
    }

    /**
     * @param array
     * @return \Omnipay\NMI\Message\ThreeStepRedirect\DeleteCardRequest
     */
    public function deleteCard(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\NMI\Message\ThreeStepRedirect\DeleteCardRequest', $parameters);
    }

    /**
     * @param array
     * @return \Omnipay\NMI\Message\ThreeStepRedirect\CompleteActionRequest
     */
    public function completeAction(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\NMI\Message\ThreeStepRedirect\CompleteActionRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Omnipay\NMI\Message\ThreeStepRedirect\CreateRecurringPlanRequest
     */
    public function createRecurringPlan(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\NMI\Message\ThreeStepRedirect\CreateRecurringPlanRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Omnipay\NMI\Message\AddSubscriptionToExistingPlanRequest
     */
    public function addSubscriptionToExistingPlan(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\NMI\Message\ThreeStepRedirect\AddSubscriptionToExistingPlanRequest', $parameters);
    }
}
