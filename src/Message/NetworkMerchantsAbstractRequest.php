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
}
