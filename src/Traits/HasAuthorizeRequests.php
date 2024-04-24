<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Traits;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Thundev\Zitadel\Requests\FinalizeAuth\FinalizeAuthRequest;
use Thundev\Zitadel\Responses\FinalizeAuth\FinalizeAuthResponse;

trait HasAuthorizeRequests
{
    /** @throws GuzzleException */
    public function finalizeAuth(string $authRequestId, FinalizeAuthRequest $request): FinalizeAuthResponse
    {
        $response = $this->request('POST', "/v2beta/oidc/auth_requests/$authRequestId", [
            RequestOptions::JSON => $request->toArray(),
        ]);

        return $this->decodeResponse($response);
    }
}
