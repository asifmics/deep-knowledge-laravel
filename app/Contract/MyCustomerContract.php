<?php

namespace App\Contract;

interface MyCustomerContract
{
    public function services(string|array|object $name): string|array|object;
}
