<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Contracts;

use Thundev\Zitadel\Requests\CreateHumanUser\CreateHumanUserRequest;
use Thundev\Zitadel\Requests\CreateMachineUserRequest;
use Thundev\Zitadel\Requests\CreateSession\CreateSessionRequest;
use Thundev\Zitadel\Requests\FinalizeAuth\FinalizeAuthRequest;
use Thundev\Zitadel\Requests\SearchUserGrants\SearchUserGrantsRequest;
use Thundev\Zitadel\Responses\CreateHumanUser\CreateHumanUserResponse;
use Thundev\Zitadel\Responses\CreateMachineUser\CreateMachineUserResponse;
use Thundev\Zitadel\Responses\CreateMachineUserSecret\CreateMachineUserSecretResponse;
use Thundev\Zitadel\Responses\CreateSession\CreateSessionResponse;
use Thundev\Zitadel\Responses\FinalizeAuth\FinalizeAuthResponse;
use Thundev\Zitadel\Responses\SearchUserGrants\SearchUserGrantsResponse;

interface ZitadelServiceContract
{
    public function createHumanUser(CreateHumanUserRequest $request): CreateHumanUserResponse;

    public function searchUserGrants(SearchUserGrantsRequest $request): SearchUserGrantsResponse;

    public function createMachineUser(CreateMachineUserRequest $request): CreateMachineUserResponse;

    public function createMachineUserSecret(string $userId): CreateMachineUserSecretResponse;

    public function createSession(CreateSessionRequest $request): CreateSessionResponse;

    public function finalizeAuth(string $authRequestId, FinalizeAuthRequest $request): FinalizeAuthResponse;
}
