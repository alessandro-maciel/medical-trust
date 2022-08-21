<?php

namespace App\Services\MedicalTrust\DataObjects;

use Carbon\Carbon;

class DentalTreatment
{
    public function __construct(
        public readonly string $material,
        public readonly string $location,
        public readonly Carbon $implemented,
    ) {
    }

    public function toArray(): array
    {
        return [
            'material' => $this->material,
            'location' => $this->location,
            'implemented' => $this->implemented->toDateString(),
        ];
    }
}
