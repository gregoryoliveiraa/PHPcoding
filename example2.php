<?php

include('Exception/CustException.php');
include('Exception/ExceptionTest.php');

//Example 2

$pwd = "Password@123";
try {
    //validation
    if (filter_var($pwd, FILTER_VALIDATE_EMAIL) === FALSE) {
        //exception thrown if password invalid
        throw new custException($pwd);
    }
} catch (custException $error) {
    //show custom error
    echo $error->custMsg();
}
