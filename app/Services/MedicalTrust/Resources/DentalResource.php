<?php

namespace App\Services\MedicalTrust\Resources;

use Illuminate\Http\Client\Response;
use App\Services\MedicalTrust\MedicalTrustService;

class DentalResource
{
    public function __construct(
        private readonly MedicalTrustService $service,
    ) {
    }

    public function list(string $identifier): Response
    {
        return $this->service->get(
            request: $this->service->buildRequestWithToken(),
            url: "/dental/{$identifier}/records",
        );
    }

    public function addRecord(string $identifier, array $data = []): Response
    {
        return $this->service->post(
            request: $this->service->buildRequestWithToken(),
            url: "/dental/{$identifier}/records",
            payload: $data,
        );
    }
}
