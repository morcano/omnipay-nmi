<?php

namespace Omnipay\NMI;

use Omnipay\Tests\GatewayTestCase;

class ThreeStepRedirectGatewayIntegrationTest extends GatewayTestCase
{
    /** @var  ThreeStepRedirectGateway */
    protected $gateway;
    /** @var  array */
    protected $purchaseOptions;

    /**
     * Instantiate the gateway and the populate the purchaseOptions array
     */
    public function setUp()
    {
        $this->gateway = new ThreeStepRedirectGateway();
        $this->gateway->setApiKey('2F822Rw39fx762MaV7Yy86jXGTC7sCDy');

        $this->purchaseOptions = array(
            'amount'=>'10.00',
            'card'=>$this->getValidCard()
        );
    }
}