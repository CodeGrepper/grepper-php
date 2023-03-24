<?php

namespace Grepper;

/**
 * Interface for a Grepper client.
 */
interface GrepperClientInterface extends BaseGrepperClientInterface
{
    /**
     * Sends a request to Grepper's API.
     *
     * @param string $method the HTTP method
     * @param string $path the path of the request
     * @param array $params the parameters of the request
     * @param array|\Grepper\Util\RequestOptions $opts the special modifiers of the request
     *
     * @return \Grepper\GrepperObject the object returned by Grepper's API
     */
    public function request($method, $path, $params, $opts);
}
