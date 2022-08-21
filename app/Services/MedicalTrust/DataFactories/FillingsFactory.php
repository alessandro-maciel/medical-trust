<?php

namespace App\Services\MedicalTrust\DataFactories;

use App\Services\MedicalTrust\DataObjects\Fillings;

class FillingsFactory
{
    public function make(array $treatments): Fillings
    {
        $treatments = DentalTreatmentFactory::collection($treatments);

        return new Fillings($treatments);
    }
}
