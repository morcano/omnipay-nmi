<?php

namespace Omnipay\NMI\Message\DirectPost;

class AddSubscriptionToExistingPlanRequest extends CreateRecurringPlanRequest
{
    /**
     * @return AddSubscriptionToExistingPlanRequest
     */
    public function getSourceTransactionId()
    {
        return $this->getParameter('source_transaction_id');
    }

    /**
     * @param $value
     * @return AddSubscriptionToExistingPlanRequest
     */
    public function setSourceTransactionId($value)
    {
        return $this->setParameter('source_transaction_id', $value);
    }

    public function getData()
    {
        $this->validate('recurring', 'plan_id', 'source_transaction_id');

        return [
            'username' => $this->getUsername(),
            'password' => $this->getPassword(),
            'recurring' => $this->getRecurring(),
            'plan_id' => $this->getPlanId(),
            'source_transaction_id' => $this->getSourceTransactionId()
        ];
    }
}