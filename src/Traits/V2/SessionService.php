<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Traits\V2;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Thundev\Zitadel\Requests\V2\SessionService\CreateSessionRequest;
use Thundev\Zitadel\Requests\V2\SessionService\GetSessionRequest;
use Thundev\Zitadel\Requests\V2\SessionService\SearchSessions\SearchSessionsRequest;
use Thundev\Zitadel\Requests\V2\SessionService\UpdateSessionRequest;
use Thundev\Zitadel\Responses\V2\SessionService\CreateSession\CreateSessionResponse;
use Thundev\Zitadel\Responses\V2\SessionService\GetSessionResponse;
use Thundev\Zitadel\Responses\V2\SessionService\SearchSessions\SearchSessionsResponse;
use Thundev\Zitadel\Responses\V2\SessionService\UpdateSession\UpdateSessionResponse;

trait SessionService
{
    /** @throws GuzzleException */
    public function searchSessions(SearchSessionsRequest $request): SearchSessionsResponse
    {
        $response = $this->request('POST', '/v2beta/sessions/search', [
            RequestOptions::JSON => $request->toArray(),
        ]);

        return SearchSessionsResponse::from(
            $this->decodeResponse($response)
        );
    }

    /** @throws GuzzleException */
    public function getSession(string $sessionId, ?GetSessionRequest $request = null): GetSessionResponse
    {
        $response = $this->request('GET', "/v2beta/sessions/$sessionId", array_filter([
            RequestOptions::QUERY => $request?->toArray(),
        ]));

        return GetSessionResponse::from(
            $this->decodeResponse($response)
        );
    }

    /** @throws GuzzleException */
    public function createSession(CreateSessionRequest $request): CreateSessionResponse
    {
        $response = $this->request('POST', '/v2beta/sessions', [
            RequestOptions::JSON => $request->toArray(),
        ]);

        return CreateSessionResponse::from(
            $this->decodeResponse($response)
        );
    }

    /** @throws GuzzleException */
    public function updateSession(string $sessionId, UpdateSessionRequest $request): UpdateSessionResponse
    {
        $response = $this->request('PATCH', "/v2beta/sessions/$sessionId", [
            RequestOptions::JSON => $request->toArray(),
        ]);

        return UpdateSessionResponse::from(
            $this->decodeResponse($response)
        );
    }
}
