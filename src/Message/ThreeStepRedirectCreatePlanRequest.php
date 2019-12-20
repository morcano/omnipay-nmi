<?php

namespace Omnipay\NMI\Message;

/**
 * NMI Three Step Redirect Complete Request
 */
class ThreeStepRedirectCreatePlanRequest extends ThreeStepRedirectAbstractRequest
{
    /**
     * @var string
     */
    protected $type = 'add-plan';

    /**
     * @return mixed
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData()
    {
        $data['api-key'] = $this->getApiKey();

        $data = [
            'plan' => [
                'payments' => $this->getPayments(),
                'name' => $this->getName(),
                'amount' => $this->getAmount(),
                'plan-id' => $this->getPlanId(),
            ]
        ];

        if ($this->getDayFrequency()) {
            $data['plan']['day-frequency'] = $this->getDayFrequency();
        }

        if ($this->getMonthFrequency()) {
            $data['plan']['month-frequency'] = $this->getMonthFrequency();
        }

        if ($this->getDayOfMonth()) {
            $data['plan']['day-of-month'] = $this->getDayOfMonth();
        }

        return $data;
    }

    /**
     * @param $value
     * @return ThreeStepRedirectCreatePlanRequest
     */
    public function setName($value)
    {
        return $this->setParameter('name', $value);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->getParameter('name');
    }

    /**
     * @param $value
     * @return ThreeStepRedirectCreatePlanRequest
     */
    public function setPayments($value)
    {
        return $this->setParameter('payments', $value);
    }

    /**
     * @return mixed
     */
    public function getPayments()
    {
        return $this->getParameter('payments');
    }

    /**
     * @return mixed
     */
    public function getPlanId()
    {
        return $this->getParameter('plan_id');
    }

    /**
     * @param $value
     * @return ThreeStepRedirectCreatePlanRequest
     */
    public function setPlanId($value)
    {
        return $this->setParameter('plan_id', $value);
    }

    /**
     * @return mixed
     */
    public function getDayFrequency()
    {
        return $this->getParameter('day_frequency');
    }

    /**
     * @param $value
     * @return ThreeStepRedirectCreatePlanRequest
     */
    public function setDayFrequency($value)
    {
        return $this->setParameter('day_frequency', $value);
    }

    /**
     * @return mixed
     */
    public function getMonthFrequency()
    {
        return $this->getParameter('month_frequency');
    }

    /**
     * @param $value
     * @return ThreeStepRedirectCreatePlanRequest
     */
    public function setMonthFrequency($value)
    {
        return $this->setParameter('month_frequency', $value);
    }

    /**
     * @return mixed
     */
    public function getDayOfMonth()
    {
        return $this->getParameter('day_of_month');
    }

    /**
     * @param $value
     * @return ThreeStepRedirectCreatePlanRequest
     */
    public function setDayOfMonth($value)
    {
        return $this->setParameter('day_of_month', $value);
    }
}
