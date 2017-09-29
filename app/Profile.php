<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Profile extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userName', 'fName', 'lName',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    $profile->user->userName;
    
}