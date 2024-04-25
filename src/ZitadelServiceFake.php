<?php

declare(strict_types=1);

namespace Thundev\Zitadel;

use Illuminate\Support\Facades\Hash;
use Thundev\Zitadel\Contracts\ZitadelServiceContract;
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

class ZitadelServiceFake implements ZitadelServiceContract
{
    public function createUser(CreateHumanUserRequest $request): CreateHumanUserResponse
    {
        return CreateHumanUserResponse::from([
            'userId' => $request->userId ?? $this->fakeNumerify(),
            'details' => [
                'sequence' => '2',
                'changeDate' => now(),
                'resourceOwner' => $this->fakeNumerify(),
            ],
        ]);
    }

    public function searchUserGrants(SearchUserGrantsRequest $request): SearchUserGrantsResponse
    {
        return SearchUserGrantsResponse::from([
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

    public function finalizeAuth(string $authRequestId, FinalizeAuthRequest $request): FinalizeAuthResponse
    {
        return FinalizeAuthResponse::from([
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
