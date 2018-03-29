<?php

/**
 * Created by PhpStorm.
 * User: joedundas
 * Date: 2/27/18
 * Time: 12:30 PM
 */
trait IsOnUsersCalendarTrait
{
    public static function bootIsOnUsersCalendarTrait() {
        static::addGlobalScope(new IsOnUsersCalendarScope);
    }
}