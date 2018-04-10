<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class CompanyRoles extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'company_roles';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */


    protected $guarded = array('id');



    public function __construct()
    {

    }





}