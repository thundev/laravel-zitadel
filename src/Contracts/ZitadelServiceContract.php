<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Contracts;

use Thundev\Zitadel\Requests\V1\OrganizationObjects\UserGrants\SearchUserGrants\SearchUserGrantsRequest;
use Thundev\Zitadel\Requests\V1\OrganizationObjects\Users\CreateMachineUserRequest;
use Thundev\Zitadel\Requests\V1\OrganizationObjects\Users\SearchUsers\SearchUsersRequest;
use Thundev\Zitadel\Requests\V2\OIDCService\CreateHumanUser\CreateHumanUserRequest;
use Thundev\Zitadel\Requests\V2\SessionService\CreateSession\CreateSessionRequest;
use Thundev\Zitadel\Requests\V2\SessionService\GetSessionRequest;
use Thundev\Zitadel\Requests\V2\SessionService\SearchSessions\SearchSessionsRequest;
use Thundev\Zitadel\Requests\V2\UserService\FinalizeAuthRequest\FinalizeAuthRequest;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\UserGrants\SearchUserGrants\SearchUserGrantsResponse;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\CreateMachineUser\CreateMachineUserResponse;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\CreateMachineUserSecret\CreateMachineUserSecretResponse;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\Users\SearchUsers\SearchUsersResponse;
use Thundev\Zitadel\Responses\V2\OIDCService\CreateHumanUser\CreateHumanUserResponse;
use Thundev\Zitadel\Responses\V2\SessionService\CreateSession\CreateSessionResponse;
use Thundev\Zitadel\Responses\V2\SessionService\GetSessionResponse;
use Thundev\Zitadel\Responses\V2\SessionService\SearchSessions\SearchSessionsResponse;
use Thundev\Zitadel\Responses\V2\UserService\FinalizeAuthRequest\FinalizeAuthRequestResponse;
use Thundev\Zitadel\Responses\V2\UserService\GetAuthRequest\GetAuthRequestResponse;

interface ZitadelServiceContract
{
    public function createHumanUser(CreateHumanUserRequest $request): CreateHumanUserResponse;

    public function searchUserGrants(SearchUserGrantsRequest $request): SearchUserGrantsResponse;

    public function searchUsers(SearchUsersRequest $request): SearchUsersResponse;

    public function createMachineUser(CreateMachineUserRequest $request): CreateMachineUserResponse;

    public function createMachineUserSecret(string $userId): CreateMachineUserSecretResponse;

    public function searchSessions(SearchSessionsRequest $request): SearchSessionsResponse;

    public function getSession(GetSessionRequest $request): GetSessionResponse;

    public function createSession(CreateSessionRequest $request): CreateSessionResponse;

    public function getAuthRequest(string $authRequestId): GetAuthRequestResponse;

    public function finalizeAuthRequest(
        string $authRequestId,
        FinalizeAuthRequest $request
    ): FinalizeAuthRequestResponse;
}
