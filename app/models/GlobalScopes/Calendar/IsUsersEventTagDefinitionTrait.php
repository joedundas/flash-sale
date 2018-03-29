<?php

/**
 * Created by PhpStorm.
 * User: joedundas
 * Date: 2/27/18
 * Time: 12:30 PM
 */
trait IsUsersEventTagDefinitionTrait
{
    public static function bootIsUsersEventTagDefinitionTrait() {
        static::addGlobalScope(new IsUsersEventTagDefinitionScope);
    }
}