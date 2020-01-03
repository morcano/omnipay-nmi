<?php

namespace Omnipay\NMI\Message\DirectPost;

/**
* NMI Direct Post Credit Request
*/
class CreditRequest extends AuthRequest
{
    protected $type = 'credit';
}
