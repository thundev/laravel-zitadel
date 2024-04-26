<?php

namespace Thundev\Zitadel\Traits\V2;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Thundev\Zitadel\Requests\V2\UserService\FinalizeAuthRequest\FinalizeAuthRequest;
use Thundev\Zitadel\Responses\V2\UserService\FinalizeAuthRequest\FinalizeAuthRequestResponse;

trait UserService
{
    /** @throws GuzzleException */
    public function finalizeAuthRequest(string $authRequestId, FinalizeAuthRequest $request): FinalizeAuthRequestResponse
    {
        $response = $this->request('POST', "/v2beta/oidc/auth_requests/$authRequestId", [
            RequestOptions::JSON => $request->toArray(),
        ]);

        return FinalizeAuthRequestResponse::from(
            $this->decodeResponse($response)
        );
    }
}