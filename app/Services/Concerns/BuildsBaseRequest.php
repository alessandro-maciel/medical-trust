<?php

namespace App\Services\Concerns;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\PendingRequest;

trait BuildsBaseRequest
{
    public function buildRequestWithToken(): PendingRequest
    {
        return $this->withBaseUrl()->timeout(
            seconds: 15,
        )->withToken(
            token: $this->apiToken,
        );
    }

    public function buildRequestWithDigestAuth(): PendingRequest
    {
        return $this->withBaseUrl()->timeout(
            seconds: 15,
        )->withDigestAuth(
            username: $this->username,
            password: $this->password,
        );
    }

    public function withBaseUrl(): PendingRequest
    {
        return Http::baseUrl(
            url: $this->baseUrl,
        );
    }
}
