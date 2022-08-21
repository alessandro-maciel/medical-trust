<?php

namespace App\Services\MedicalTrust\Resources;

use App\Services\MedicalTrust\MedicalTrustService;

class DentalResource
{
    public function __construct(
        private readonly MedicalTrustService $service,
    ) {
    }
}
