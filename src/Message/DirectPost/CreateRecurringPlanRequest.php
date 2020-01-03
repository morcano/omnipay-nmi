<?php

namespace Omnipay\NMI\Message\DirectPost;

class CreateRecurringPlanRequest extends DirectPostAbstractRequest
{
    protected $type = 'sale';

    /**
     * @return mixed
     */
    public function getRecurring()
    {
        return $this->getParameter('recurring');
    }

    /**
     * @param $value
     * @return CreateRecurringPlanRequest
     */
    public function setRecurring($value)
    {
        return $this->setParameter('recurring', $value);
    }

    /**
     * @return mixed
     */
    public function getPlanPayments()
    {
        return $this->getParameter('plan_payments');
    }

    /**
     * @param $value
     * @return CreateRecurringPlanRequest
     */
    public function setPlanPayments($value)
    {
        return $this->setParameter('plan_payments', $value);
    }

    /**
     * @return mixed
     */
    public function getPlanName()
    {
        return $this->getParameter('plan_name');
    }

    /**
     * @param $value
     * @return CreateRecurringPlanRequest
     */
    public function setPlanName($value)
    {
        return $this->setParameter('plan_name', $value);
    }

    /**
     * @return mixed
     */
    public function getPlanAmount()
    {
        return $this->getParameter('plan_amount');
    }

    /**
     * @param $value
     * @return CreateRecurringPlanRequest
     */
    public function setPlanAmount($value)
    {
        return $this->setParameter('plan_amount', $value);
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
     * @return mixed
     */
    public function setPlanID($value)
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
     * @return CreateRecurringPlanRequest
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
     * @return CreateRecurringPlanRequest
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
     * @return CreateRecurringPlanRequest
     */
    public function setDayOfMonth($value)
    {
        return $this->setParameter('day_of_month', $value);
    }

    /**
     * @return mixed|void
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData()
    {
        $this->validate('recurring', 'plan_payments', 'plan_name', 'plan_amount', 'plan_id');

        $data = [
            'username' => $this->getUsername(),
            'password' => $this->getPassword(),
            'recurring' => $this->getRecurring(),
            'plan_payments' => $this->getPlanPayments(),
            'plan_name' => $this->getPlanName(),
            'plan_amount' => $this->getPlanAmount(),
            'plan_id' => $this->getPlanId(),
        ];

        if ($this->getDayFrequency()) {
            $data['day_frequency'] = $this->getDayFrequency();
        }

        if ($this->getMonthFrequency()) {
            $data['month_frequency'] = $this->getMonthFrequency();
        }

        if ($this->getDayOfMonth()) {
            $data['day_of_month'] = $this->getDayOfMonth();
        }

        return $data;
    }
}