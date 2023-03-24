<?php

namespace Grepper\Exception;

/**
 * InvalidRequestException is thrown when a request is initiated with invalid
 * parameters.
 */
class InvalidRequestException extends ApiErrorException
{
    protected $grepperParam;

    /**
     * Creates a new InvalidRequestException exception.
     *
     * @param string $message the exception message
     * @param null|int $httpStatus the HTTP status code
     * @param null|string $httpBody the HTTP body as a string
     * @param null|array $jsonBody the JSON deserialized body
     * @param null|array|\Grepper\Util\CaseInsensitiveArray $httpHeaders the HTTP headers array
     * @param null|string $grepperCode the Grepper error code
     * @param null|string $grepperParam the parameter related to the error
     *
     * @return InvalidRequestException
     */
    public static function factory(
        $message,
        $httpStatus = null,
        $httpBody = null,
        $jsonBody = null,
        $httpHeaders = null,
        $grepperCode = null,
        $grepperParam = null
    ) {
        $instance = parent::factory($message, $httpStatus, $httpBody, $jsonBody, $httpHeaders, $grepperCode);
        $instance->setGrepperParam($grepperParam);

        return $instance;
    }

    /**
     * Gets the parameter related to the error.
     *
     * @return null|string
     */
    public function getGrepperParam()
    {
        return $this->grepperParam;
    }

    /**
     * Sets the parameter related to the error.
     *
     * @param null|string $grepperParam
     */
    public function setGrepperParam($grepperParam)
    {
        $this->grepperParam = $grepperParam;
    }
}
