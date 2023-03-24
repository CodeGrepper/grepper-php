<?php

namespace Grepper\Service;

/**
 * Service factory class for API resources in the root namespace.
 *
 * @property AnswersService $answers
 */
class CoreServiceFactory extends \Grepper\Service\AbstractServiceFactory
{
    /**
     * @var array<string, string>
     */
    private static $classMap = [
        'answers' => AnswerService::class,
    ];

    protected function getServiceClass($name)
    {
        return \array_key_exists($name, self::$classMap) ? self::$classMap[$name] : null;
    }
}
