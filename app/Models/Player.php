<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\PlayerProviderTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Player extends Authenticatable
{
    use Notifiable;
    use PlayerProviderTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','withdraw_pwd','status','realPassword','hasCreated'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function messages()
    {
        return $this->belongsToMany('App\\Models\\Message', 'member_message', 'player_id', 'message_id')->withPivot('is_read')->withTimestamps();
    }

    public function playerProviders()
    {
        return $this->hasMany('App\Models\PlayerProvider', 'player_id', 'id');
    }


}
