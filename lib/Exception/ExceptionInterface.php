<?php

namespace Grepper\Exception;

// TODO: remove this check once we drop support for PHP 5
if (\interface_exists(\Throwable::class, false)) {
    /**
     * The base interface for all Grepper exceptions.
     */
    interface ExceptionInterface extends \Throwable
    {
    }
} else {
    /**
     * The base interface for all Grepper exceptions.
     */
    // phpcs:disable PSR1.Classes.ClassDeclaration.MultipleClasses
    interface ExceptionInterface
    {
    }
    // phpcs:enable
}
