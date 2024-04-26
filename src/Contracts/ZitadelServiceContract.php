<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Contracts;

use Thundev\Zitadel\Requests\V1\OrganizationObjects\User\CreateMachineUserRequest;
use Thundev\Zitadel\Requests\V1\OrganizationObjects\UserGrants\SearchUserGrants\SearchUserGrantsRequest;
use Thundev\Zitadel\Requests\V2\OIDCService\CreateHumanUser\CreateHumanUserRequest;
use Thundev\Zitadel\Requests\V2\SessionService\CreateSession\CreateSessionRequest;
use Thundev\Zitadel\Requests\V2\SessionService\GetSessionRequest;
use Thundev\Zitadel\Requests\V2\SessionService\SearchSessions\SearchSessionsRequest;
use Thundev\Zitadel\Requests\V2\UserService\FinalizeAuthRequest\FinalizeAuthRequest;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\User\CreateMachineUser\CreateMachineUserResponse;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\User\CreateMachineUserSecret\CreateMachineUserSecretResponse;
use Thundev\Zitadel\Responses\V1\OrganizationObjects\UserGrants\SearchUserGrants\SearchUserGrantsResponse;
use Thundev\Zitadel\Responses\V2\OIDCService\CreateHumanUser\CreateHumanUserResponse;
use Thundev\Zitadel\Responses\V2\SessionService\CreateSession\CreateSessionResponse;
use Thundev\Zitadel\Responses\V2\SessionService\GetSessionResponse;
use Thundev\Zitadel\Responses\V2\SessionService\SearchSessions\SearchSessionsResponse;
use Thundev\Zitadel\Responses\V2\UserService\FinalizeAuthRequest\FinalizeAuthRequestResponse;

interface ZitadelServiceContract
{
    public function createHumanUser(CreateHumanUserRequest $request): CreateHumanUserResponse;

    public function searchUserGrants(SearchUserGrantsRequest $request): SearchUserGrantsResponse;

    public function createMachineUser(CreateMachineUserRequest $request): CreateMachineUserResponse;

    public function createMachineUserSecret(string $userId): CreateMachineUserSecretResponse;

    public function searchSessions(SearchSessionsRequest $request): SearchSessionsResponse;

    public function getSession(GetSessionRequest $request): GetSessionResponse;

    public function createSession(CreateSessionRequest $request): CreateSessionResponse;

    public function finalizeAuthRequest(
        string $authRequestId,
        FinalizeAuthRequest $request
    ): FinalizeAuthRequestResponse;
}
