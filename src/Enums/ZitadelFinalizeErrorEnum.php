<?php

declare(strict_types=1);

namespace Thundev\Zitadel\Enums;

enum ZitadelFinalizeErrorEnum: string
{
    case Unspecified = 'ERROR_REASON_UNSPECIFIED';
    case InvalidRequest = 'ERROR_REASON_INVALID_REQUEST';
    case UnauthorizedClient = 'ERROR_REASON_UNAUTHORIZED_CLIENT';
    case AccessDenied = 'ERROR_REASON_ACCESS_DENIED';
    case UnsupportedResponseType = 'ERROR_REASON_UNSUPPORTED_RESPONSE_TYPE';
    case InvalidScope = 'ERROR_REASON_INVALID_SCOPE';
    case ServerError = 'ERROR_REASON_SERVER_ERROR';
    case TemporaryUnavailable = 'ERROR_REASON_TEMPORARY_UNAVAILABLE';
    case InteractionRequired = 'ERROR_REASON_INTERACTION_REQUIRED';
    case LoginRequired = 'ERROR_REASON_LOGIN_REQUIRED';
    case AccountSelectionRequired = 'ERROR_REASON_ACCOUNT_SELECTION_REQUIRED';
    case ConsentRequired = 'ERROR_REASON_CONSENT_REQUIRED';
    case InvalidRequestUri = 'ERROR_REASON_INVALID_REQUEST_URI';
    case InvalidRequestObject = 'ERROR_REASON_INVALID_REQUEST_OBJECT';
    case RequestNotSupported = 'ERROR_REASON_REQUEST_NOT_SUPPORTED';
    case RequestUriNotSupported = 'ERROR_REASON_REQUEST_URI_NOT_SUPPORTED';
    case RegistrationNotSupported = 'ERROR_REASON_REGISTRATION_NOT_SUPPORTED';
}
