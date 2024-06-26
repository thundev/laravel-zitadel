<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Contracts;

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

interface ZitadelBetaServiceContract
{
    public function createHumanUser(CreateHumanUserRequest $request): CreateHumanUserResponse;

    public function searchUsers(SearchUsersRequest $request): SearchUsersResponse;

    public function userById(string $userId): UserByIdResponse;

    public function requestCodeToResetPassword(string $userId, RequestCodeToResetPasswordRequest $request): RequestCodeToResetPasswordResponse;

    public function changePassword(string $userId, ChangePasswordRequest $request): ChangePasswordResponse;

    public function lockUser(string $userId): LockUserResponse;

    public function unlockUser(string $userId): UnlockUserResponse;

    public function searchSessions(SearchSessionsRequest $request): SearchSessionsResponse;

    public function getSession(string $sessionId, ?GetSessionRequest $request = null): GetSessionResponse;

    public function createSession(CreateSessionRequest $request): CreateSessionResponse;

    public function updateSession(string $sessionId, UpdateSessionRequest $request): UpdateSessionResponse;

    public function getAuthRequest(string $authRequestId): GetAuthRequestResponse;

    public function finalizeAuthRequest(
        string $authRequestId,
        FinalizeAuthRequest $request
    ): FinalizeAuthRequestResponse;
}
