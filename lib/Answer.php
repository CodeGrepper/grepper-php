<?php

// File generated from our OpenAPI spec

namespace Grepper;

/**
 * This is an object representing a Grepper answer. You can retrieve it to see
 * through Connect Onboarding. Once you create an <a
 * href="https://grepper.com/docs/api/account_links">Account Link</a> for a Standard
 * or Express account, some parameters are no longer returned. These are marked as
 * <strong>Custom Only</strong> or <strong>Custom and Express</strong> below. Learn
 * about the differences <a href="https://grepper.com/docs/connect/accounts">between
 * accounts</a>.
 *
 * @property string $id Unique identifier for the object.

 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property null|string $answer - the answers content 
 */
class Answer extends ApiResource
{
    const OBJECT_NAME = 'answer';

    //use ApiOperations\All;
    use ApiOperations\Search;
    //use ApiOperations\Create;
    //use ApiOperations\Delete;
    //use ApiOperations\NestedResource;
    //use ApiOperations\Update;

    const IS_ADVANCED = 0;


    


}
