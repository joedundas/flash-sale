<?php

/**
 * Created by PhpStorm.
 * User: joedundas
 * Date: 4/10/18
 * Time: 10:20 AM
 */
trait SelectsAndJoinsTrait
{
    public static function bootSelectsAndJoinsTrait() {
        static::addGlobalScope(new SelectsAndJoinsScope);
    }
}