<?php

include('Exception/CustException.php');
include('Exception/ExceptionTest.php');

// Example 1

try {
    $new = new ExceptionTest(ExceptionTest::DEF_EXCEPTION);
} catch (CustException $exp) { // This exception will be caught
    echo "Test custom exception is caught\n", $exp;
    $exp->custFunc();
} catch (Exception $exp) { // This is skipped
    echo "Default exception is caught here\n", $exp;
}
