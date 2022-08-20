<?php

namespace App\Services\MedicalTrust;

class MedicalTrustService
{
    public function __construct(
        private readonly string $baseUrl,
        private readonly string $apiToken,
    ) {
    }
}
