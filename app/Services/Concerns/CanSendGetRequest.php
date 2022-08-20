<?php

namespace App\Services\Concerns;

use Illuminate\Http\Client\Response;
use Illuminate\Http\Client\PendingRequest;

trait CanSendGetRequest
{
    public function get(PendingRequest $request, string $url): Response
    {
        return $request->get(
            url: $url,
        );
    }
}
