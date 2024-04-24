<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Traits;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Thundev\Zitadel\Requests\CreateSession\CreateSessionRequest;
use Thundev\Zitadel\Responses\CreateSession\CreateSessionResponse;

trait HasSessionRequests
{
    /** @throws GuzzleException */
    public function createSession(CreateSessionRequest $request): CreateSessionResponse
    {
        $response = $this->request('POST', '/v2beta/sessions', [
            RequestOptions::JSON => $request->toArray(),
        ]);

        return CreateSessionResponse::from(
            $this->decodeResponse($response)
        );
    }
}
