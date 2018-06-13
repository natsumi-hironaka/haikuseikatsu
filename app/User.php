<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function likings()
    {
        return $this->belongsToMany(Haiku::class, 'user_like', 'user_id', 'like_id')->withTimestamps();
    }
    
    
    public function like($haikuId)
{
    // confirm if already following
    $exist = $this->is_liking($haikuId);

    if ($exist) {
        // do nothing if already following
        return false;
    } else {
        // follow if not following
        $this->likings()->attach($haikuId);
        return true;
    }
}

public function unlike($haikuId)
{
    // confirming if already following
    $exist = $this->is_liking($haikuId);


    if ($exist) {
        // stop following if following
        $this->likings()->detach($haikuId);
        return true;
    } else {
        // do nothing if not following
        return false;
    }
}


public function is_liking($haikuId) {
    return $this->likings()->where('like_id', $haikuId)->exists();
}
    
}
