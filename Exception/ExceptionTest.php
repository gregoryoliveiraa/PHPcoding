<?php

class ExceptionTest
{
    public $var;
    const NO_EXCEPTION = 0;
    const CUST_EXCEPTION = 1;
    const DEF_EXCEPTION = 2;
    function __construct($val = self::NO_EXCEPTION)
    {
        switch ($val) {
            case self::CUST_EXCEPTION:
                // throw custom exception
                throw new CustException('1 is considered as invalid', 5);
                break;
            case self::DEF_EXCEPTION:
                // throw default one.
                throw new Exception('2 is considered an invalid parameter', 6);
                break;
            default:
                // Will not throw any exception and creates an object here
                $this->var = $val;
                break;
        }
    }
}
