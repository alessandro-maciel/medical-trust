<?php

namespace App\Services\MedicalTrust\RequestFactories;

use Illuminate\Support\Carbon;
use App\Services\MedicalTrust\Requests\NewDentalTreatment;

class DentalTreatmentFactory
{
    public function make(array $attributes): NewDentalTreatment
    {
        return new NewDentalTreatment(
            type: strval(data_get($attributes, 'type')),
            material: strval(data_get($attributes, 'material')),
            location: strval(data_get($attributes, 'location')),
            implemented: Carbon::parse(data_get($attributes, 'implemented')),
        );
    }
}
