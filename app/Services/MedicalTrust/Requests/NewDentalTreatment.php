<?php

namespace App\Services\MedicalTrust\Requests;

use InvalidArgumentException;
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

    public function validate(): static
    {
        if ($this->type !== DentalTreatmentOption::crown()) {
            throw new InvalidArgumentException(
                message: "Cannot create a new treatment, the only option available right now is crowns, you asked for {$this->type}"
            );
        }

        if (!in_array($this->location, DentalLocationOptions::teeth())) {
            throw new InvalidArgumentException(
                message: "Passed through location [{$this->location}] is not a recognised dental location.",
            );
        }

        if (!in_array($this->material, DentalCrownMaterials::all())) {
            throw new InvalidArgumentException(
                message: "Cannot use material [{$this->material}] for a crown.",
            );
        }

        return $this;
    }
}
