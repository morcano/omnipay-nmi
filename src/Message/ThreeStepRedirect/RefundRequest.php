<?php

namespace Omnipay\NMI\Message\ThreeStepRedirect;

/**
 * NMI Three Step Redirect Refund Request
 */
class RefundRequest extends CaptureRequest
{
    /**
     * @var string
     */
    protected $type = 'refund';
}
