<?php

namespace ox4D\Src;

class TestController
{
    function Call()
    {
        executeHook(PAYPALREQUEST,[]);
    }
}