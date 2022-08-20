<?php

namespace App\Services\Concerns;

use Illuminate\Http\Client\Response;
use Illuminate\Http\Client\PendingRequest;

trait CanSendPostRequest
{
    public function post(PendingRequest $request, string $url, array $payload = []): Response
    {
        return $request->post(
            url: $url,
            data: $payload,
        );
    }
}
