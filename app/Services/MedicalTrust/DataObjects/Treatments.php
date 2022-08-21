<?php

namespace App\Services\MedicalTrust\DataObjects;

class Treatments
{
    public function __construct(
        public readonly Crowns $crowns,
        public readonly Fillings $fillings,
    ) {
    }

    public function toArray(): array
    {
        return [
            'crowns' => $this->crowns->toArray(),
            'fillings' => $this->fillings->toArray(),
        ];
    }
}
