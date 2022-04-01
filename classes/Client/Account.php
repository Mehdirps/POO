<?php

namespace App\Client;

class Account
{
    private $firstName;

    private $name;

    public function __construct(string $firstName, string $name, string $city)
    {
        $this->firstName = $firstName;

        $this->name = $name;

        $this->city = $city;
    }
}
