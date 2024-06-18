<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Contracts;

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

interface ZitadelStableServiceContract
{
    public function searchUserGrants(SearchUserGrantsRequest $request): SearchUserGrantsResponse;

    public function searchUsers(SearchUsersRequest $request): SearchUsersResponse;

    public function createMachineUser(CreateMachineUserRequest $request): CreateMachineUserResponse;

    public function getUserProfile(string $userId): GetUserProfileResponse;

    public function updateUserProfile(string $userId, UpdateUserProfileRequest $request): UpdateUserProfileResponse;

    public function createMachineUserSecret(string $userId): CreateMachineUserSecretResponse;

    public function setUserPassword(string $userId, SetUserPasswordRequest $request): SetUserPasswordResponse;
}
