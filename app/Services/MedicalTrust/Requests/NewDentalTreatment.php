<?php

namespace App\Services\MedicalTrust\Requests;

use Illuminate\Support\Carbon;

class NewDentalTreatment
{
    public function __construct(
        public readonly string $type,
        public readonly string $material,
        public readonly string $location,
        public readonly Carbon $implemented,
    ) {
    }

    public function toArray(): array
    {
        return [
            'type' => $this->type,
            'material' => $this->material,
            'location' => $this->location,
            'implemented' => Carbon::now()->toDateString(),
        ];
    }
}
