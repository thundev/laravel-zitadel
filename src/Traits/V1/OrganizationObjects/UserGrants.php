<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Traits\V1\OrganizationObjects;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Thundev\Zitadel\Requests\V1\OrganizationObjects\UserGrants\SearchUserGrants\SearchUserGrantsRequest;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\UserGrants\SearchUserGrants\SearchUserGrantsResponse;

trait UserGrants
{
    /** @throws GuzzleException */
    public function searchUserGrants(SearchUserGrantsRequest $request): SearchUserGrantsResponse
    {
        $response = $this->request('POST', '/management/v1/users/grants/_search', [
            RequestOptions::JSON => $request->toArray(),
        ]);

        return SearchUserGrantsResponse::from(
            $this->decodeResponse($response)
        );
    }
}
