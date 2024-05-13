<?php

declare(strict_types=1);

namespace Thundev\Zitadel;

use Illuminate\Support\Facades\Hash;
use Thundev\Zitadel\Contracts\ZitadelServiceContract;
use Thundev\Zitadel\Requests\V1\OrganizationObjects\UserGrants\SearchUserGrants\SearchUserGrantsRequest;
use Thundev\Zitadel\Requests\V1\OrganizationObjects\Users\CreateMachineUserRequest;
use Thundev\Zitadel\Requests\V1\OrganizationObjects\Users\SearchUsers\SearchUsersRequest;
use Thundev\Zitadel\Requests\V1\OrganizationObjects\Users\UpdateUserProfileRequest;
use Thundev\Zitadel\Requests\V2\OIDCService\CreateHumanUser\CreateHumanUserRequest;
use Thundev\Zitadel\Requests\V2\SessionService\CreateSession\CreateSessionRequest;
use Thundev\Zitadel\Requests\V2\SessionService\GetSessionRequest;
use Thundev\Zitadel\Requests\V2\SessionService\SearchSessions\SearchSessionsRequest;
use Thundev\Zitadel\Requests\V2\UserService\FinalizeAuthRequest\FinalizeAuthRequest;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\UserGrants\SearchUserGrants\SearchUserGrantsResponse;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\CreateMachineUser\CreateMachineUserResponse;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\CreateMachineUserSecret\CreateMachineUserSecretResponse;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\GetUserProfile\GetUserProfileResponse;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\SearchUsers\SearchUsersResponse;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\UpdateUserProfile\UpdateUserProfileResponse;
use Thundev\Zitadel\Responses\V2\OIDCService\CreateHumanUser\CreateHumanUserResponse;
use Thundev\Zitadel\Responses\V2\SessionService\CreateSession\CreateSessionResponse;
use Thundev\Zitadel\Responses\V2\SessionService\GetSessionResponse;
use Thundev\Zitadel\Responses\V2\SessionService\SearchSessions\SearchSessionsResponse;
use Thundev\Zitadel\Responses\V2\UserService\FinalizeAuthRequest\FinalizeAuthRequestResponse;
use Thundev\Zitadel\Responses\V2\UserService\GetAuthRequest\GetAuthRequestResponse;

class ZitadelServiceFake implements ZitadelServiceContract
{
    public function searchUserGrants(SearchUserGrantsRequest $request): SearchUserGrantsResponse
    {
        return SearchUserGrantsResponse::from([
            'details' => [
                'viewTimestamp' => 'string',
            ],
        ]);
    }

    public function searchUsers(SearchUsersRequest $request): SearchUsersResponse
    {
        return SearchUsersResponse::from([
            'details' => [
                'viewTimestamp' => 'string',
            ],
        ]);
    }

    public function createMachineUser(CreateMachineUserRequest $request): CreateMachineUserResponse
    {
        return CreateMachineUserResponse::from([
            'userId' => fake()->uuid,
            'details' => [
                'sequence' => '2',
                'creationDate' => now(),
                'changeDate' => now(),
                'resourceOwner' => $this->fakeNumerify(),
            ],
        ]);
    }

    public function getUserProfile(string $userId): GetUserProfileResponse
    {
        return GetUserProfileResponse::from([
            'details' => [
                'sequence' => '2',
                'creationDate' => now(),
                'changeDate' => now(),
                'resourceOwner' => $this->fakeNumerify(),
            ],
            'profile' => [
                'firstName' => 'string',
                'lastName' => 'string',
                'nickname' => 'string',
                'displayName' => 'string',
                'preferredLanguage' => 'en',
                'gender' => 'string',
                'avatarUrl' => 'string',
            ],
        ]);
    }

    public function updateUserProfile(string $userId, UpdateUserProfileRequest $request): UpdateUserProfileResponse
    {
        return UpdateUserProfileResponse::from([
            'details' => [
                'sequence' => '2',
                'creationDate' => now(),
                'changeDate' => now(),
                'resourceOwner' => $this->fakeNumerify(),
            ],
        ]);
    }

    public function createMachineUserSecret(string $userId): CreateMachineUserSecretResponse
    {
        $faker = fake();

        return CreateMachineUserSecretResponse::from([
            'clientId' => $faker->userName,
            'clientSecret' => $faker->password,
            'details' => [
                'sequence' => '2',
                'creationDate' => now(),
                'changeDate' => now(),
                'resourceOwner' => $this->fakeNumerify(),
            ],
        ]);
    }

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

    public function searchSessions(SearchSessionsRequest $request): SearchSessionsResponse
    {
        return SearchSessionsResponse::from([
            'details' => [
                'timestamp' => 'string',
            ],
        ]);
    }

    public function getSession(GetSessionRequest $request): GetSessionResponse
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
