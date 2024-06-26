<?php

declare(strict_types=1);

namespace Thundev\Zitadel;

use Illuminate\Support\Facades\Hash;
use Thundev\Zitadel\Contracts\ZitadelBetaServiceContract;
use Thundev\Zitadel\Requests\V2\OIDCService\FinalizeAuthRequest\FinalizeAuthRequest;
use Thundev\Zitadel\Requests\V2\SessionService\CreateSessionRequest;
use Thundev\Zitadel\Requests\V2\SessionService\GetSessionRequest;
use Thundev\Zitadel\Requests\V2\SessionService\SearchSessions\SearchSessionsRequest;
use Thundev\Zitadel\Requests\V2\SessionService\UpdateSessionRequest;
use Thundev\Zitadel\Requests\V2\UserService\ChangePassword\ChangePasswordRequest;
use Thundev\Zitadel\Requests\V2\UserService\CreateHumanUser\CreateHumanUserRequest;
use Thundev\Zitadel\Requests\V2\UserService\RequestCodeToResetPassword\RequestCodeToResetPasswordRequest;
use Thundev\Zitadel\Requests\V2\UserService\SearchUsers\SearchUsersRequest;
use Thundev\Zitadel\Responses\V2\OIDCService\FinalizeAuthRequest\FinalizeAuthRequestResponse;
use Thundev\Zitadel\Responses\V2\OIDCService\GetAuthRequest\GetAuthRequestResponse;
use Thundev\Zitadel\Responses\V2\SessionService\CreateSession\CreateSessionResponse;
use Thundev\Zitadel\Responses\V2\SessionService\GetSessionResponse;
use Thundev\Zitadel\Responses\V2\SessionService\SearchSessions\SearchSessionsResponse;
use Thundev\Zitadel\Responses\V2\SessionService\UpdateSession\UpdateSessionResponse;
use Thundev\Zitadel\Responses\V2\UserService\ChangePassword\ChangePasswordResponse;
use Thundev\Zitadel\Responses\V2\UserService\CreateHumanUser\CreateHumanUserResponse;
use Thundev\Zitadel\Responses\V2\UserService\LockUser\LockUserResponse;
use Thundev\Zitadel\Responses\V2\UserService\RequestCodeToResetPassword\RequestCodeToResetPasswordResponse;
use Thundev\Zitadel\Responses\V2\UserService\SearchUsers\SearchUsersResponse;
use Thundev\Zitadel\Responses\V2\UserService\UnlockUser\UnlockUserResponse;
use Thundev\Zitadel\Responses\V2\UserService\UserById\UserByIdResponse;

class ZitadelBetaServiceFake implements ZitadelBetaServiceContract
{
    public function createHumanUser(CreateHumanUserRequest $request): CreateHumanUserResponse
    {
        return CreateHumanUserResponse::from([
            'userId' => $request->userId ?? $this->fakeNumerify(),
            'details' => [
                'sequence' => '2',
                'changeDate' => now(),
                'resourceOwner' => $this->fakeNumerify(),
            ],
            'emailCode' => '',
            'phoneCode' => '',
        ]);
    }

    public function searchUsers(SearchUsersRequest $request): SearchUsersResponse
    {
        return SearchUsersResponse::from([
            'details' => [
                'timestamp' => 'string',
            ],
        ]);
    }

    public function userById(string $userId): UserByIdResponse
    {
        return UserByIdResponse::from([
            'details' => [
                'sequence' => '2',
                'changeDate' => now(),
                'resourceOwner' => $this->fakeNumerify(),
            ],
        ]);
    }

    public function requestCodeToResetPassword(string $userId, RequestCodeToResetPasswordRequest $request): RequestCodeToResetPasswordResponse
    {
        return RequestCodeToResetPasswordResponse::from([
            'details' => [
                'sequence' => '2',
                'changeDate' => now(),
                'resourceOwner' => $this->fakeNumerify(),
            ],
        ]);
    }

    public function changePassword(string $userId, ChangePasswordRequest $request): ChangePasswordResponse
    {
        return ChangePasswordResponse::from([
            'details' => [
                'sequence' => '2',
                'changeDate' => now(),
                'resourceOwner' => $this->fakeNumerify(),
            ],
        ]);
    }

    public function lockUser(string $userId): LockUserResponse
    {
        return LockUserResponse::from([
            'details' => [
                'sequence' => '2',
                'changeDate' => now(),
                'resourceOwner' => $this->fakeNumerify(),
            ],
        ]);
    }

    public function unlockUser(string $userId): UnlockUserResponse
    {
        return UnlockUserResponse::from([
            'details' => [
                'sequence' => '2',
                'changeDate' => now(),
                'resourceOwner' => $this->fakeNumerify(),
            ],
        ]);
    }

    public function searchSessions(SearchSessionsRequest $request): SearchSessionsResponse
    {
        return SearchSessionsResponse::from([
            'details' => [
                'timestamp' => 'string',
            ],
        ]);
    }

    public function getSession(string $sessionId, ?GetSessionRequest $request = null): GetSessionResponse
    {
        return GetSessionResponse::from([
            'session' => [
                'id' => '2',
                'creationDate' => now(),
                'changeDate' => now(),
                'expirationDate' => now(),
            ],
        ]);
    }

    public function createSession(CreateSessionRequest $request): CreateSessionResponse
    {
        return CreateSessionResponse::from([
            'details' => [
                'sequence' => '2',
                'changeDate' => now(),
                'resourceOwner' => $this->fakeNumerify(),
            ],
            'sessionId' => $this->fakeNumerify(),
            'sessionToken' => Hash::make(fake()->text),
        ]);
    }

    public function updateSession(string $sessionId, UpdateSessionRequest $request): UpdateSessionResponse
    {
        return UpdateSessionResponse::from([
            'details' => [
                'sequence' => '2',
                'changeDate' => now(),
                'resourceOwner' => $this->fakeNumerify(),
            ],
            'sessionToken' => Hash::make(fake()->text),
        ]);
    }

    public function getAuthRequest(string $authRequestId): GetAuthRequestResponse
    {
        return GetAuthRequestResponse::from([
            'authRequest' => [
                'id' => $authRequestId,
                'creationDate' => now(),
                'clientId' => 'string',
                'scope' => ['string'],
                'redirectUri' => 'string',
            ],
        ]);
    }

    public function finalizeAuthRequest(
        string $authRequestId,
        FinalizeAuthRequest $request
    ): FinalizeAuthRequestResponse {
        return FinalizeAuthRequestResponse::from([
            'callbackUrl' => fake()->url,
            'details' => [
                'sequence' => '2',
                'changeDate' => now(),
                'resourceOwner' => $this->fakeNumerify(),
            ],
        ]);
    }

    private function fakeNumerify(): string
    {
        return fake()->numerify('##########');
    }
}
