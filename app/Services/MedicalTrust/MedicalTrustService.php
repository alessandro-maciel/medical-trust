<?php

namespace App\Services\MedicalTrust;

use App\Services\Concerns\BuildsBaseRequest;
use App\Services\Concerns\CanSendGetRequest;
use App\Services\Concerns\CanSendPostRequest;
use App\Services\MedicalTrust\Resources\DentalResource;

class MedicalTrustService
{
    use BuildsBaseRequest;
    use CanSendGetRequest;
    use CanSendPostRequest;

    public function __construct(
        private readonly string $baseUrl,
        private readonly string $apiToken,
    ) {
    }

    public function dental(): DentalResource
    {
        return new DentalResource(
            service: $this,
        );
    }
}
