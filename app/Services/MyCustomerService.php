<?php

namespace App\Services;

use App\Contract\MyCustomerContract;

class MyCustomerService implements MyCustomerContract
{
    public function services(string|array|object $name): string|array|object
    {
        return $name;
    }
}
