<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Traits\V2;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Thundev\Zitadel\Requests\V2\OIDCService\FinalizeAuthRequest\FinalizeAuthRequest;
use Thundev\Zitadel\Responses\V2\OIDCService\FinalizeAuthRequest\FinalizeAuthRequestResponse;
use Thundev\Zitadel\Responses\V2\OIDCService\GetAuthRequest\GetAuthRequestResponse;

trait OIDCService
{
    /** @throws GuzzleException */
    public function getAuthRequest(string $authRequestId): GetAuthRequestResponse
    {
        $response = $this->request('GET', "/v2beta/oidc/auth_requests/$authRequestId");

        return GetAuthRequestResponse::from(
            $this->decodeResponse($response)
        );
    }

    /** @throws GuzzleException */
    public function finalizeAuthRequest(
        string $authRequestId,
        FinalizeAuthRequest $request
    ): FinalizeAuthRequestResponse {
        $response = $this->request('POST', "/v2beta/oidc/auth_requests/$authRequestId", [
            RequestOptions::JSON => $request->toArray(),
        ]);

        return FinalizeAuthRequestResponse::from(
            $this->decodeResponse($response)
        );
    }
}
