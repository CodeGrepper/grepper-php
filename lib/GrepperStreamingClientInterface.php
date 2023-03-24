<?php

namespace Grepper;

/**
 * Interface for a Grepper client.
 */
interface GrepperStreamingClientInterface extends BaseGrepperClientInterface
{
    public function requestStream($method, $path, $readBodyChunkCallable, $params, $opts);
}
