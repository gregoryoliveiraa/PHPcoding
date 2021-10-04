<?php

class CustException extends Exception
{
    // Here we are redefining the exception message so it is not optional
    public function __construct($exmsg, $val = 0, Exception $old = null)
    {
        // random code goes here
        $exmsg = 'Default';
        // ensure assignment of all values correctly
        parent::__construct($exmsg, $val, $old);
    }
    // representing the custom string object
    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
    public function custFunc()
    {
        echo "Insert any custom message here\n";
    }

    public function custMsg() {
        //error message
        $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
        .': <b>'.$this->getMessage().'</b> is not a valid password. Please enter a valid one.';
        return $errorMsg;
    }
}
