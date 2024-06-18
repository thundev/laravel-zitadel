<?php

declare(strict_types=1);

namespace Thundev\Zitadel;

use Thundev\Zitadel\Contracts\ZitadelStableServiceContract;
use Thundev\Zitadel\Requests\V1\OrganizationObjects\UserGrants\SearchUserGrants\SearchUserGrantsRequest;
use Thundev\Zitadel\Requests\V1\OrganizationObjects\Users\CreateMachineUserRequest;
use Thundev\Zitadel\Requests\V1\OrganizationObjects\Users\SearchUsers\SearchUsersRequest;
use Thundev\Zitadel\Requests\V1\OrganizationObjects\Users\SetUserPasswordRequest;
use Thundev\Zitadel\Requests\V1\OrganizationObjects\Users\UpdateUserProfileRequest;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\UserGrants\SearchUserGrants\SearchUserGrantsResponse;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\CreateMachineUser\CreateMachineUserResponse;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\CreateMachineUserSecret\CreateMachineUserSecretResponse;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\GetUserProfile\GetUserProfileResponse;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\SearchUsers\SearchUsersResponse;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\SetUserPassword\SetUserPasswordResponse;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\UpdateUserProfile\UpdateUserProfileResponse;

class ZitadelStableServiceFake implements ZitadelStableServiceContract
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

    public function setUserPassword(string $userId, SetUserPasswordRequest $request): SetUserPasswordResponse
    {
        return SetUserPasswordResponse::from([
            'details' => [
                'sequence' => '2',
                'creationDate' => now(),
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
