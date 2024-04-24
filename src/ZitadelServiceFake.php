<?php

declare(strict_types=1);

namespace Thundev\Zitadel;

use Thundev\Zitadel\Contracts\ZitadelServiceContract;
use Thundev\Zitadel\Requests\CreateHumanUser\CreateHumanUserRequest;
use Thundev\Zitadel\Requests\CreateMachineUserRequest;
use Thundev\Zitadel\Requests\SearchUserGrants\SearchUserGrantsRequest;
use Thundev\Zitadel\Responses\CreateHumanUser\CreateHumanUserResponse;
use Thundev\Zitadel\Responses\CreateMachineUser\CreateMachineUserResponse;
use Thundev\Zitadel\Responses\CreateMachineUserSecret\CreateMachineUserSecretResponse;
use Thundev\Zitadel\Responses\SearchUserGrants\SearchUserGrantsResponse;

class ZitadelServiceFake implements ZitadelServiceContract
{
    public function createUser(CreateHumanUserRequest $request): CreateHumanUserResponse
    {
        return CreateHumanUserResponse::from([
            'userId' => $request->userId ?? fake()->numerify('##########'),
            'details' => [
                'sequence' => '2',
                'changeDate' => now(),
                'resourceOwner' => fake()->numerify('##########'),
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
                'resourceOwner' => fake()->numerify('##########'),
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
                'resourceOwner' => fake()->numerify('##########'),
            ],
        ]);
    }
}
