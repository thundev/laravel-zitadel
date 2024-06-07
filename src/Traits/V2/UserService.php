<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Traits\V2;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Thundev\Zitadel\Requests\V2\UserService\CreateHumanUser\CreateHumanUserRequest;
use Thundev\Zitadel\Requests\V2\UserService\SearchUsers\SearchUsersRequest;
use Thundev\Zitadel\Responses\V2\UserService\CreateHumanUser\CreateHumanUserResponse;
use Thundev\Zitadel\Responses\V2\UserService\SearchUsers\SearchUsersResponse;
use Thundev\Zitadel\Responses\V2\UserService\UserById\UserByIdResponse;

trait UserService
{
    /** @throws GuzzleException */
    public function createHumanUser(CreateHumanUserRequest $request): CreateHumanUserResponse
    {
        $response = $this->request('POST', '/v2beta/users/human', [
            RequestOptions::JSON => $request->toArray(),
        ]);

        return CreateHumanUserResponse::from(
            $this->decodeResponse($response)
        );
    }

    /** @throws GuzzleException */
    public function searchUsers(SearchUsersRequest $request): SearchUsersResponse
    {
        $response = $this->request('POST', '/v2beta/users', [
            RequestOptions::JSON => $request->toArray(),
        ]);

        return SearchUsersResponse::from(
            $this->decodeResponse($response)
        );
    }

    /** @throws GuzzleException */
    public function userById(string $userId): UserByIdResponse
    {
        $response = $this->request('GET', "/v2beta/users/$userId");

        return UserByIdResponse::from(
            $this->decodeResponse($response)
        );
    }
}
