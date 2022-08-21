<?php

namespace App\Http\Controllers\Dental\Crowns;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dental\NewCrownRequest;
use App\Services\MedicalTrust\RequestFactories\DentalTreatmentFactory;
use App\Services\MedicalTrust\Resources\DentalResource;

class StoreController extends Controller
{
    public function __construct(
        private readonly DentalResource $api,
        private readonly DentalTreatmentFactory $factory,
    ) {
    }

    public function __invoke(NewCrownRequest $request)
    {
        $patient = $request->get('patient');
        $data = $request->validated();

        $newDentalTreatment = $this->factory->make($data);

        return $this->api->addRecord(
            identifier: $patient,
            request: $newDentalTreatment
        );
    }
}
