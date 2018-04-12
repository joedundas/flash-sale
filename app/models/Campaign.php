<?php



class Campaign extends \Illuminate\Database\Eloquent\Model
{



    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'campaigns';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */


    protected $guarded = array('id');








}