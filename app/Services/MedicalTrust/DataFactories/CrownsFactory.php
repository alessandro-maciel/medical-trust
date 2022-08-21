<?php

namespace App\Services\MedicalTrust\DataFactories;

use App\Services\MedicalTrust\DataObjects\Crowns;

class CrownsFactory
{
    public function make(array $treatments): Crowns
    {
        $treatments = DentalTreatmentFactory::collection($treatments);

        return new Crowns($treatments);
    }
}
