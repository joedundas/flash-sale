<?php

//use Illuminate\Auth\UserTrait;
//use Illuminate\Auth\UserInterface;
//use Illuminate\Auth\Reminders\RemindableTrait;
//use Illuminate\Auth\Reminders\RemindableInterface;

class CompanyRoles extends \Illuminate\Database\Eloquent\Model
{
    use SelectsAndJoinsTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'company_roles';

    public function scopeAuthedUser($query) {
        return $query->where('company_roles.userId','=',Auth::user()->id);
    }







}