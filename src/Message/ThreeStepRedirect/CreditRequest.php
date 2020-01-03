<?php

namespace Omnipay\NMI\Message\ThreeStepRedirect;

/**
 * NMI Three Step Redirect Credit Request
 */
class CreditRequest extends AuthRequest
{
    /**
     * @var string
     */
    protected $type = 'credit';
}
