<?php

namespace YaBandPay\Payment\Model;

/**
 * Class UnionPayCard
 * @package YaBandPay\Payment\Model
 * @description
 * @version 1.0.0
 */
class UnionPayCard extends AbstractPayment
{
    const CODE = 'yabandpay_unionpaycard';

    protected $_code = self::CODE;
}
