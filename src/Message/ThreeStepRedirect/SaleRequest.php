<?php

namespace Omnipay\NMI\Message\ThreeStepRedirect;

/**
 * NMI Three Step Redirect Sale Request
 */
class SaleRequest extends AuthRequest
{
    /**
     * @var string
     */
    protected $type = 'sale';
}
