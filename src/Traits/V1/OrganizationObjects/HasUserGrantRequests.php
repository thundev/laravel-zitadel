<?php

namespace Thundev\Zitadel\Traits\V1\OrganizationObjects;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Thundev\Zitadel\Requests\SearchUserGrants\SearchUserGrantsRequest;
use Thundev\Zitadel\Responses\SearchUserGrants\SearchUserGrantsResponse;

trait HasUserGrantRequests
{
    /** @throws GuzzleException */
    public function searchUserGrants(SearchUserGrantsRequest $request): SearchUserGrantsResponse
    {
        $response = $this->request('POST', $this->generateUrlApiV1('users/grants/_search'), [
            RequestOptions::JSON => $request->toArray(),
        ]);

        return SearchUserGrantsResponse::from(
            $this->decodeResponse($response)
        );
    }
}