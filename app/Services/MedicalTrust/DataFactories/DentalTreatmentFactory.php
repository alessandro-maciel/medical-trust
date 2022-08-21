<?php

namespace App\Services\MedicalTrust\DataFactories;

use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use App\Services\MedicalTrust\DataObjects\DentalTreatment;

class DentalTreatmentFactory
{
    public static function collection(array $treatments): Collection
    {
        return collect($treatments)->map(
            fn ($treatment): DentalTreatment => static::new($treatment)
        );
    }

    public static function new(array $attributes): DentalTreatment
    {
        return (new static)->make($attributes);
    }

    public function make(array $attributes): DentalTreatment
    {
        return new DentalTreatment(
            material: strval(data_get($attributes, 'material')),
            location: strval(data_get($attributes, 'location')),
            implemented: Carbon::parse(strval($attributes, 'implemented')),
        );
    }
}
