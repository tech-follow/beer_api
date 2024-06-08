<?php

namespace App\Domain\Model;

final class Address
{
    public function __construct(
        public string|null $street = null,
        public string|null $postalCode = null,
        public string|null $city = null,
        public string|null $country = null,
    ) {}
}
