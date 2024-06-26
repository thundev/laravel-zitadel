<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Traits\V2;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Thundev\Zitadel\Requests\V2\UserService\ChangePassword\ChangePasswordRequest;
use Thundev\Zitadel\Requests\V2\UserService\CreateHumanUser\CreateHumanUserRequest;
use Thundev\Zitadel\Requests\V2\UserService\RequestCodeToResetPassword\RequestCodeToResetPasswordRequest;
use Thundev\Zitadel\Requests\V2\UserService\SearchUsers\SearchUsersRequest;
use Thundev\Zitadel\Responses\V2\UserService\ChangePassword\ChangePasswordResponse;
use Thundev\Zitadel\Responses\V2\UserService\CreateHumanUser\CreateHumanUserResponse;
use Thundev\Zitadel\Responses\V2\UserService\LockUser\LockUserResponse;
use Thundev\Zitadel\Responses\V2\UserService\RequestCodeToResetPassword\RequestCodeToResetPasswordResponse;
use Thundev\Zitadel\Responses\V2\UserService\SearchUsers\SearchUsersResponse;
use Thundev\Zitadel\Responses\V2\UserService\UnlockUser\UnlockUserResponse;
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

    /** @throws GuzzleException */
    public function requestCodeToResetPassword(string $userId, RequestCodeToResetPasswordRequest $request): RequestCodeToResetPasswordResponse
    {
        $response = $this->request('POST', "/v2beta/users/$userId/password_reset", [
            RequestOptions::JSON => $request->toArray(),
        ]);

        return RequestCodeToResetPasswordResponse::from(
            $this->decodeResponse($response)
        );
    }

    /** @throws GuzzleException */
    public function changePassword(string $userId, ChangePasswordRequest $request): ChangePasswordResponse
    {
        $response = $this->request('POST', "/v2beta/users/$userId/password", [
            RequestOptions::JSON => $request->toArray(),
        ]);

        return ChangePasswordResponse::from(
            $this->decodeResponse($response)
        );
    }

    /** @throws GuzzleException */
    public function lockUser(string $userId): LockUserResponse
    {
        $response = $this->request('POST', "/v2beta/users/$userId/lock");

        return LockUserResponse::from(
            $this->decodeResponse($response)
        );
    }

    /** @throws GuzzleException */
    public function unlockUser(string $userId): UnlockUserResponse
    {
        $response = $this->request('POST', "/v2beta/users/$userId/unlock");

        return UnlockUserResponse::from(
            $this->decodeResponse($response)
        );
    }
}
