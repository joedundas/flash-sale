<?php

/**
 * Created by PhpStorm.
 * User: joedundas
 * Date: 2/27/18
 * Time: 12:30 PM
 */
trait JoinConnectionToUserTrait
{
    public static function bootJoinConnectionToUserTrait() {
        static::addGlobalScope(new JoinConnectionToUserScope);
    }
}