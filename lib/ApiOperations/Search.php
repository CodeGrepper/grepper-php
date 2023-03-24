<?php

namespace Grepper\ApiOperations;

/**
 * Trait for searchable resources.
 *
 * This trait should only be applied to classes that derive from GrepperObject.
 */
trait Search
{
    /**
     * @param string $searchUrl
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\SearchResult of ApiResources
     */
    protected static function _searchResource($searchUrl, $params = null, $opts = null)
    {
        self::_validateParams($params);

        list($response, $opts) = static::_staticRequest('get', $searchUrl, $params, $opts);
        $obj = \Grepper\Util\Util::convertToGrepperObject($response->json, $opts);
        if (!($obj instanceof \Grepper\SearchResult)) {
            throw new \Grepper\Exception\UnexpectedValueException(
                'Expected type ' . \Grepper\SearchResult::class . ', got "' . \get_class($obj) . '" instead.'
            );
        }
        $obj->setLastResponse($response);
        $obj->setFilters($params);

        return $obj;
    }
}
