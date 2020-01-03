<?php

namespace Omnipay\NMI;

use Omnipay\Tests\GatewayTestCase;

class ThreeStepRedirectGatewayTest extends GatewayTestCase
{
    protected $saleOptions;
    protected $captureOptions;
    protected $voidOptions;
    protected $refundOptions;

    public function setUp()
    {
        parent::setUp();

        $this->gateway = new ThreeStepRedirectGateway($this->getHttpClient(), $this->getHttpRequest());

        $this->saleOptions = array(
            'amount' => '10.00',
            'card'   => $this->getValidCard()
        );

        $this->captureOptions = array(
            'amount' => '10.00',
            'transactionReference' => '2577708057'
        );

        $this->voidOptions = array(
            'transactionReference' => '2577708057'
        );

        $this->refundOptions = array(
            'transactionReference' => '2577725848'
        );
    }

    public function testCreateRecurringPlanSuccess()
    {
        $this->setMockHttpResponse('ThreeStepRedirectCreateRecurringPlanSuccess.txt');

        $response = $this->gateway->createRecurringPlan([
            'plan' => [
                'name' => 'test',
                'payments' => 0,
                'amount' => '10.00',
                'plan_id' => 1,
                'month_frequency' => 1,
                'day_of_month' => 1,
            ]
        ])->send();

        $this->assertTrue($response->isSuccessful());
        $this->assertSame('Plan Added', $response->getMessage());
    }

    public function testCreateRecurringPlanFailure()
    {
        $this->setMockHttpResponse('ThreeStepRedirectCreateRecurringPlanFailure.txt');

        $response = $this->gateway->createRecurringPlan([
            'plan' => [
                'name' => 'test',
                'payments' => 0,
                'amount' => 0,
                'plan_id' => 1,
                'month_frequency' => 1,
                'day_of_month' => 1,
            ]
        ])->send();

        $this->assertFalse($response->isSuccessful());
        $this->assertSame('Plan Amount must be greater than 0.00 REFID:2435959367', $response->getMessage());
    }
}