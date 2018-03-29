<?php

/**
 * Created by PhpStorm.
 * User: joedundas
 * Date: 2/27/18
 * Time: 12:30 PM
 */
trait IsUsersConnectionTrait
{
    public static function bootIsUsersConnectionTrait() {
        static::addGlobalScope(new IsUsersConnectionScope);
    }
}