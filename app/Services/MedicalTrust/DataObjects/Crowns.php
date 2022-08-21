<?php

namespace App\Services\MedicalTrust\DataObjects;

use Illuminate\Support\Collection;

class Crowns
{
    public function __construct(
        public Collection $treatments,
    ) {
    }

    public function toArray(): array
    {
        return $this->treatments->map(
            fn (DentalTreatment $treatment) => $treatment->toArray(),
        )->toArray();
    }
}
