<?php
namespace Omnipay\NMI\Message\DirectPost;

/**
* NMI Direct Post Refund Request
*/
class RefundRequest extends CaptureRequest
{
    protected $type = 'refund';
}
