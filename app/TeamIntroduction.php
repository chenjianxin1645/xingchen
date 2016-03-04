<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamIntroduction extends Model
{
    //
    protected $table = 'TeamIntroduction';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Title', 'iContent', 'updateTime', 'updateMember'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

}
