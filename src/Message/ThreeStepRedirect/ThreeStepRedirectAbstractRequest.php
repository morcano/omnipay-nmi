<?php

namespace Omnipay\NMI\Message\ThreeStepRedirect;

use Omnipay\Common\CreditCard;
use Omnipay\NMI\Traits\Loggable;
use RuntimeException;
use SimpleXMLElement;

/**
 * NMI Three Step Redirect Abstract Request
 */
abstract class ThreeStepRedirectAbstractRequest extends \Omnipay\NMI\Message\NetworkMerchantsAbstractRequest
{
    //use Loggable;

    /**
     * @var string
     */
    protected $endpoint = 'https://secure.nmi.com/api/v2/three-step';

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->getParameter('api_key');
    }

    /**
     * @param string
     * @return \Omnipay\Common\Message\AbstractRequest
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
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setRedirectUrl($value)
    {
        return $this->setParameter('redirect_url', $value);
    }

    /**
     * @return string
     */
    public function getTokenId()
    {
        return $this->getParameter('token_id');
    }

    /**
     * @param string
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setTokenId($value)
    {
        return $this->setParameter('token_id', $value);
    }

    /**
     * Sets the card.
     *
     * @param CreditCard $value
     * @return ThreeStepRedirectAbstractRequest Provides a fluent interface
     */
    public function setCard($value)
    {
        if (!$value instanceof CreditCard) {
            $value = new CreditCard($value);
        }

        return $this->setParameter('card', $value);
    }

    /**
     * @return mixed
     */
    public function getBillingInfo()
    {
        return $this->getParameter('billing_info');
    }

    /**
     * @param $value
     * @return ThreeStepRedirectAbstractRequest
     */
    public function setBillingInfo($value)
    {
        return $this->setParameter('billing_info', $value);
    }

    /**
     * @return string
     */
    public function getSecCode()
    {
        return $this->getParameter('sec_code');
    }

    /**
     * @param string
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setSecCode($value)
    {
        return $this->setParameter('sec_code', $value);
    }

    /**
     * @return string
     */
    public function getMerchantDefinedField1()
    {
        return $this->getParameter('merchant_defined_field_1');
    }

    /**
     * Sets the first merchant defined field.
     *
     * @param string
     * @return ThreeStepRedirectAbstractRequest Provides a fluent interface
     */
    public function setMerchantDefinedField1($value)
    {
        return $this->setParameter('merchant_defined_field_1', $value);
    }

    /**
     * @return string
     */
    public function getMerchantDefinedField2()
    {
        return $this->getParameter('merchant_defined_field_2');
    }

    /**
     * Sets the second merchant defined field.
     *
     * @param string
     * @return ThreeStepRedirectAbstractRequest Provides a fluent interface
     */
    public function setMerchantDefinedField2($value)
    {
        return $this->setParameter('merchant_defined_field_2', $value);
    }

    /**
     * @return string
     */
    public function getMerchantDefinedField3()
    {
        return $this->getParameter('merchant_defined_field_3');
    }

    /**
     * Sets the third merchant defined field.
     *
     * @param string
     * @return ThreeStepRedirectAbstractRequest Provides a fluent interface
     */
    public function setMerchantDefinedField3($value)
    {
        return $this->setParameter('merchant_defined_field_3', $value);
    }

    /**
     * @return string
     */
    public function getMerchantDefinedField4()
    {
        return $this->getParameter('merchant_defined_field_4');
    }

    /**
     * Sets the fourth merchant defined field.
     *
     * @param string
     * @return ThreeStepRedirectAbstractRequest Provides a fluent interface
     */
    public function setMerchantDefinedField4($value)
    {
        return $this->setParameter('merchant_defined_field_4', $value);
    }

    /**
     * @return mixed
     */
    public function getBillingFirstName()
    {
        return $this->getParameter('billing_first_name');
    }

    /**
     * @param $value
     * @return ThreeStepRedirectAbstractRequest
     */
    public function setBillingFirstName($value)
    {
        return $this->setParameter('billing_first_name', $value);
    }

    /**
     * @return mixed
     */
    public function getBillingLastName()
    {
        return $this->getParameter('billing_last_name');
    }

    /**
     * @param $value
     * @return ThreeStepRedirectAbstractRequest
     */
    public function setBillingLastName($value)
    {
        return $this->setParameter('billing_last_name', $value);
    }

    /**
     * @return mixed
     */
    public function getBillingAddress1()
    {
        return $this->getParameter('billing_address1');
    }

    /**
     * @param $value
     * @return ThreeStepRedirectAbstractRequest
     */
    public function setBillingAddress1($value)
    {
        return $this->setParameter('billing_address1', $value);
    }

    /**
     * @return mixed
     */
    public function getBillingCity()
    {
        return $this->getParameter('billing_city');
    }

    /**
     * @param $value
     * @return ThreeStepRedirectAbstractRequest
     */
    public function setBillingCity($value)
    {
        return $this->setParameter('billing_city', $value);
    }

    /**
     * @return mixed
     */
    public function getBillingState()
    {
        return $this->getParameter('billing_state');
    }

    /**
     * @param $value
     * @return ThreeStepRedirectAbstractRequest
     */
    public function setBillingState($value)
    {
        return $this->setParameter('billing_state', $value);
    }

    /**
     * @return mixed
     */
    public function getBillingPostcode()
    {
        return $this->getParameter('billing_postcode');
    }

    /**
     * @param $value
     * @return ThreeStepRedirectAbstractRequest
     */
    public function setBillingPostcode($value)
    {
        return $this->setParameter('billing_postcode', $value);
    }

    /**
     * @return mixed
     */
    public function getBillingCountry()
    {
        return $this->getParameter('billing_country');
    }

    /**
     * @param $value
     * @return ThreeStepRedirectAbstractRequest
     */
    public function setBillingCountry($value)
    {
        return $this->setParameter('billing_country', $value);
    }

    /**
     * @return mixed
     */
    public function getBillingPhone()
    {
        return $this->getParameter('billing_phone');
    }

    /**
     * @param $value
     * @return ThreeStepRedirectAbstractRequest
     */
    public function setBillingPhone($value)
    {
        return $this->setParameter('billing_phone', $value);
    }

    /**
     * @return mixed
     */
    public function getShippingFirstName()
    {
        return $this->getParameter('shipping_first_name');
    }

    /**
     * @param $value
     * @return ThreeStepRedirectAbstractRequest
     */
    public function setShippingFirstName($value)
    {
        return $this->setParameter('shipping_first_name', $value);
    }

    /**
     * @return mixed
     */
    public function getShippingLastName()
    {
        return $this->getParameter('shipping_last_name');
    }

    /**
     * @param $value
     * @return ThreeStepRedirectAbstractRequest
     */
    public function setShippingLastName($value)
    {
        return $this->setParameter('shipping_last_name', $value);
    }

    /**
     * @return mixed
     */
    public function getShippingAddress1()
    {
        return $this->getParameter('shipping_address1');
    }

    /**
     * @param $value
     * @return ThreeStepRedirectAbstractRequest
     */
    public function setShippingAddress1($value)
    {
        return $this->setParameter('shipping_address1', $value);
    }

    /**
     * @return mixed
     */
    public function getShippingCity()
    {
        return $this->getParameter('shipping_city');
    }

    /**
     * @param $value
     * @return ThreeStepRedirectAbstractRequest
     */
    public function setShippingCity($value)
    {
        return $this->setParameter('shipping_city', $value);
    }

    /**
     * @return mixed
     */
    public function getShippingState()
    {
        return $this->getParameter('shipping_state');
    }

    /**
     * @param $value
     * @return ThreeStepRedirectAbstractRequest
     */
    public function setShippingState($value)
    {
        return $this->setParameter('shipping_state', $value);
    }

    /**
     * @return mixed
     */
    public function getShippingPostcode()
    {
        return $this->getParameter('shipping_postcode');
    }

    /**
     * @param $value
     * @return ThreeStepRedirectAbstractRequest
     */
    public function setShippingPostcode($value)
    {
        return $this->setParameter('shipping_postcode', $value);
    }

    /**
     * @return mixed
     */
    public function getShippingCountry()
    {
        return $this->getParameter('shipping_country');
    }

    /**
     * @param $value
     * @return ThreeStepRedirectAbstractRequest
     */
    public function setShippingCountry($value)
    {
        return $this->setParameter('shipping_country', $value);
    }

    /**
     * @return mixed
     */
    public function getShippingEmail()
    {
        return $this->getParameter('shipping_email');
    }

    /**
     * @param $value
     * @return ThreeStepRedirectAbstractRequest
     */
    public function setShippingEmail($value)
    {
        return $this->setParameter('shipping_email', $value);
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->getParameter('email');
    }

    /**
     * @param $value
     * @return ThreeStepRedirectAbstractRequest
     */
    public function setEmail($value)
    {
        return $this->setParameter('email', $value);
    }

    /**
     * @return mixed
     */
    public function getShippingCompany()
    {
        return $this->getParameter('shipping_company');
    }

    /**
     * @param $value
     * @return ThreeStepRedirectAbstractRequest
     */
    public function setShippingCompany($value)
    {
        return $this->setParameter('shipping_company', $value);
    }

    /**
     * @return mixed
     */
    public function getShippingAddress2()
    {
        return $this->getParameter('shipping_address2');
    }

    /**
     * @param $value
     * @return ThreeStepRedirectAbstractRequest
     */
    public function setShippingAddress2($value)
    {
        return $this->setParameter('shipping_address2', $value);
    }

    /**
     * @return array
     */
    protected function getOrderData()
    {
        $data = array();

        $data['order-id'] = $this->getOrderId();
        $data['order-description'] = $this->getOrderDescription();
        $data['tax-amount'] = $this->getTax();
        $data['shipping-amount'] = $this->getShipping();
        $data['po-number'] = $this->getPONumber();
        $data['ip-address'] = $this->getClientIp();

        if ($this->getCurrency()) {
            $data['currency'] = $this->getCurrency();
        }

        if ($this->getSecCode()) {
            $data['sec-code'] = $this->getSecCode();
        }

        return $data;
    }

    /**
     * @return array
     */
    protected function getBillingData()
    {
        $data = [];

        $data['billing'] = [
            'first-name' => $this->getBillingFirstName(),
            'last-name'  => $this->getBillingLastName(),
            'address1'   => $this->getBillingAddress1(),
            'city'       => $this->getBillingCity(),
            'state'      => $this->getBillingState(),
            'postal'     => $this->getBillingPostcode(),
            'country'    => $this->getBillingCountry(),
            'phone'      => $this->getBillingPhone(),
            'email'      => $this->getEmail(),
        ];

        return $data;
    }

    /**
     * @return array
     */
    protected function getShippingData()
    {
        $data = [];

        $data['shipping'] = [
            'first-name' => $this->getShippingFirstName(),
            'last-name'  => $this->getShippingLastName(),
            'address1'   => $this->getShippingAddress1(),
            'city'       => $this->getShippingCity(),
            'state'      => $this->getShippingState(),
            'postal'     => $this->getShippingPostcode(),
            'country'    => $this->getShippingCountry(),
            'email'      => $this->getEmail(),
            'company'    => $this->getShippingCompany(),
            'address2'   => $this->getShippingAddress2(),
        ];

        return $data;
    }

    /**
     * @param array $data
     * @return \Omnipay\NMI\Message\ThreeStepRedirect\Response
     * @throws \Exception
     */
    public function sendData($data)
    {
        $document = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><'.$this->type.'/>');
        $this->arrayToXml($document, $data);

        $httpResponse = $this->httpClient->request(
            'POST',
            $this->getEndpoint(),
            array(
                'Content-Type' => 'text/xml',
                'User-Agent'   => 'Omnipay',
            ),
            $document->asXML()
        );

        $this->response = new Response($this, static::xmlDecode($httpResponse));

        // TODO: Replace log logic from master branch
        //$this->logAPICall('POST', $this->getEndpoint(), $data, $httpResponse, $this->response);
        return $this->response;
    }

    /**
     * Parse the XML response body and return a \SimpleXMLElement.
     *
     * In order to prevent XXE attacks, this method disables loading external
     * entities. If you rely on external entities, then you must parse the
     * XML response manually by accessing the response body directly.
     *
     * Copied from Response->xml() in Guzzle3 (copyright @mtdowling)
     * @link https://github.com/guzzle/guzzle3/blob/v3.9.3/src/Guzzle/Http/Message/Response.php
     *
     * @param  string|ResponseInterface $response
     * @return \SimpleXMLElement
     * @throws RuntimeException if the response body is not in XML format
     * @link http://websec.io/2012/08/27/Preventing-XXE-in-PHP.html
     *
     */
    public static function xmlDecode($response)
    {
        if ($response instanceof \Psr\Http\Message\ResponseInterface) {
            $body = $response->getBody()->__toString();
        } else {
            $body = (string) $response;
        }

        $errorMessage = null;
        $internalErrors = libxml_use_internal_errors(true);
        $disableEntities = libxml_disable_entity_loader(true);
        libxml_clear_errors();

        try {
            $xml = new \SimpleXMLElement((string) $body ?: '<root />', LIBXML_NONET);
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
        }

        libxml_clear_errors();
        libxml_use_internal_errors($internalErrors);
        libxml_disable_entity_loader($disableEntities);

        if ($errorMessage !== null) {
            throw new \InvalidArgumentException('SimpleXML error: ' . $errorMessage);
        }

        return $xml;
    }

    /**
     * @param \SimpleXMLElement
     * @param array
     * @return void
     */
    private function arrayToXml(SimpleXMLElement $parent, array $data)
    {
        foreach ($data as $name => $value) {
            if (is_array($value)) {
                $child = $parent->addChild($name);
                $this->arrayToXml($child, $value);
            }
            else {
                $parent->addChild($name, htmlspecialchars($value));
            }
        }
    }
}
