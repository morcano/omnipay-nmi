<?php

namespace Omnipay\NMI\Message;

/**
 * NMI Abstract Request
 */
abstract class NetworkMerchantsAbstractRequest extends \Omnipay\Common\Message\AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '';

    /**
     * @return bool|mixed
     */
    public function getIsLoggingEnabled()
    {
        return $this->getParameter('isLoggingEnabled') ?? false;
    }

    /**
     * @param $value
     * @return NetworkMerchantsAbstractRequest
     */
    public function setIsLoggingEnabled($value)
    {
        return $this->setParameter('isLoggingEnabled', $value);
    }

    /**
     * @return bool|mixed
     */
    public function isLoggingEnabled()
    {
        return $this->getIsLoggingEnabled();
    }

    /**
     * @return mixed
     */
    public function getProcessorId()
    {
        return $this->getParameter('processor_id');
    }

    /**
     * @param $value
     * @return NetworkMerchantsAbstractRequest
     */
    public function setProcessorId($value)
    {
        return $this->setParameter('processor_id', $value);
    }

    /**
     * @return mixed
     */
    public function getAuthorizationCode()
    {
        return $this->getParameter('authorization_code');
    }

    /**
     * @param $value
     * @return NetworkMerchantsAbstractRequest
     */
    public function setAuthorizationCode($value)
    {
        return $this->setParameter('authorization_code', $value);
    }

    /**
     * @param $value
     * @return NetworkMerchantsAbstractRequest
     */
    public function setEndpoint($value)
    {
        return $this->setParameter('endpoint', $value);
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->getParameter('orderid');
    }

    /**
     * @param $value
     * @return NetworkMerchantsAbstractRequest
     */
    public function setOrderId($value)
    {
        return $this->setParameter('orderid', $value);
    }

    /**
     * @return mixed
     */
    public function getOrderDescription()
    {
        return $this->getParameter('orderdescription');
    }

    /**
     * @param $value
     * @return NetworkMerchantsAbstractRequest
     */
    public function setOrderDescription($value)
    {
        return $this->setParameter('orderdescription', $value);
    }

    /**
     * @return mixed
     */
    public function getTax()
    {
        return $this->getParameter('tax');
    }

    /**
     * @param $value
     * @return NetworkMerchantsAbstractRequest
     */
    public function setTax($value)
    {
        return $this->setParameter('tax', $value);
    }

    /**
     * @return mixed
     */
    public function getShipping()
    {
        return $this->getParameter('shipping');
    }

    /**
     * @param $value
     * @return NetworkMerchantsAbstractRequest
     */
    public function setShipping($value)
    {
        return $this->setParameter('shipping', $value);
    }

    /**
     * @return mixed
     */
    public function getPONumber()
    {
        return $this->getParameter('ponumber');
    }

    /**
     * @param $value
     * @return NetworkMerchantsAbstractRequest
     */
    public function setPONumber($value)
    {
        return $this->setParameter('ponumber', $value);
    }
}
