<?php

namespace Thundev\Zitadel\Traits\V2;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Thundev\Zitadel\Requests\FinalizeAuth\FinalizeAuthRequest;
use Thundev\Zitadel\Responses\FinalizeAuth\FinalizeAuthResponse;

trait HasUserServiceRequests
{
    /** @throws GuzzleException */
    public function finalizeAuth(string $authRequestId, FinalizeAuthRequest $request): FinalizeAuthResponse
    {
        $response = $this->request('POST', $this->generateUrlApiV2("oidc/auth_requests/$authRequestId"), [
            RequestOptions::JSON => $request->toArray(),
        ]);

        return FinalizeAuthResponse::from(
            $this->decodeResponse($response)
        );
    }
}