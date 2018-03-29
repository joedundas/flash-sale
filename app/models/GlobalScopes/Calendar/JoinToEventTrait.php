<?php

/**
 * Created by PhpStorm.
 * User: joedundas
 * Date: 2/27/18
 * Time: 12:30 PM
 */
trait JoinToEventTrait
{
    public static function bootJoinToEventTrait() {
        static::addGlobalScope(new JoinToEventScope);
    }
}