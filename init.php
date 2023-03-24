<?php
require __DIR__ . '/lib/Util/ApiVersion.php';

// Grepper singleton
require __DIR__ . '/lib/Grepper.php';

// Utilities
require __DIR__ . '/lib/Util/CaseInsensitiveArray.php';
require __DIR__ . '/lib/Util/LoggerInterface.php';
require __DIR__ . '/lib/Util/DefaultLogger.php';
require __DIR__ . '/lib/Util/RandomGenerator.php';
require __DIR__ . '/lib/Util/RequestOptions.php';
require __DIR__ . '/lib/Util/Set.php';
require __DIR__ . '/lib/Util/Util.php';
require __DIR__ . '/lib/Util/ObjectTypes.php';

// HttpClient
require __DIR__ . '/lib/HttpClient/ClientInterface.php';
require __DIR__ . '/lib/HttpClient/StreamingClientInterface.php';
require __DIR__ . '/lib/HttpClient/CurlClient.php';

// Exceptions
require __DIR__ . '/lib/Exception/ExceptionInterface.php';
require __DIR__ . '/lib/Exception/ApiErrorException.php';
require __DIR__ . '/lib/Exception/ApiConnectionException.php';
require __DIR__ . '/lib/Exception/AuthenticationException.php';
require __DIR__ . '/lib/Exception/BadMethodCallException.php';
require __DIR__ . '/lib/Exception/InvalidArgumentException.php';
require __DIR__ . '/lib/Exception/InvalidRequestException.php';
require __DIR__ . '/lib/Exception/PermissionException.php';
require __DIR__ . '/lib/Exception/RateLimitException.php';
require __DIR__ . '/lib/Exception/UnexpectedValueException.php';
require __DIR__ . '/lib/Exception/UnknownApiErrorException.php';


// API operations
require __DIR__ . '/lib/ApiOperations/All.php';
require __DIR__ . '/lib/ApiOperations/Create.php';
require __DIR__ . '/lib/ApiOperations/Delete.php';
require __DIR__ . '/lib/ApiOperations/NestedResource.php';
require __DIR__ . '/lib/ApiOperations/Request.php';
require __DIR__ . '/lib/ApiOperations/Retrieve.php';
require __DIR__ . '/lib/ApiOperations/Search.php';
require __DIR__ . '/lib/ApiOperations/SingletonRetrieve.php';
require __DIR__ . '/lib/ApiOperations/Update.php';

// Plumbing
require __DIR__ . '/lib/ApiResponse.php';
require __DIR__ . '/lib/RequestTelemetry.php';
require __DIR__ . '/lib/GrepperObject.php';
require __DIR__ . '/lib/ApiRequestor.php';
require __DIR__ . '/lib/ApiResource.php';
require __DIR__ . '/lib/SingletonApiResource.php';
require __DIR__ . '/lib/Service/AbstractService.php';
require __DIR__ . '/lib/Service/AbstractServiceFactory.php';

// GrepperClient
require __DIR__ . '/lib/BaseGrepperClientInterface.php';
require __DIR__ . '/lib/GrepperClientInterface.php';
require __DIR__ . '/lib/GrepperStreamingClientInterface.php';
require __DIR__ . '/lib/BaseGrepperClient.php';
require __DIR__ . '/lib/GrepperClient.php';

// Grepper API Resources
require __DIR__ . '/lib/Collection.php';
require __DIR__ . '/lib/Answer.php';
require __DIR__ . '/lib/ErrorObject.php';

// Services
require __DIR__ . '/lib/Service/AnswerService.php';
require __DIR__ . '/lib/Service/CoreServiceFactory.php';
