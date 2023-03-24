<?php

namespace Grepper\ApiOperations;

/**
 * Trait for listable resources. Adds a `all()` static method to the class.
 *
 * This trait should only be applied to classes that derive from GrepperObject.
 */
trait All
{
    /**
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\Collection of ApiResources
     */
    public static function all($params = null, $opts = null)
    {
        self::_validateParams($params);
        $url = static::classUrl();

        list($response, $opts) = static::_staticRequest('get', $url, $params, $opts);
        $obj = \Grepper\Util\Util::convertToGrepperObject($response->json, $opts);
        if (!($obj instanceof \Grepper\Collection)) {
            throw new \Grepper\Exception\UnexpectedValueException(
                'Expected type ' . \Grepper\Collection::class . ', got "' . \get_class($obj) . '" instead.'
            );
        }
        $obj->setLastResponse($response);
        $obj->setFilters($params);

        return $obj;
    }
}
