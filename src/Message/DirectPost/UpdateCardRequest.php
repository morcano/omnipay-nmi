<?php

namespace Omnipay\NMI\Message\DirectPost;

/**
* NMI Direct Post Update Card Request
*/
class UpdateCardRequest extends CreateCardRequest
{
    protected $customer_vault = 'update_customer';
}
