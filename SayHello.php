<?php

namespace HelloWorld;

use Carbon\Carbon;

class SayHello
{
    public static function world()
    {
        return sprintf('Hello World, Composer! Today is %s.', Carbon::now()->toDateTimeLocalString());
    }

}