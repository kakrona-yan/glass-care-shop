<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Http\Constants\UserRole;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roleType()
    {
        $role = $this->role;
        $roleText = '';
        if (is_null($role) && empty($role)) return;
        switch ($role) {
            case 1:
                $roleText = UserRole::USER_ROLE_TEXT_KM[$role];
                break;
            case 2:
                $roleText = UserRole::USER_ROLE_TEXT_KM[$role];
                break;
        }
        return $roleText;
    }

    public function isRoleAdmin()
    {
        return $this->role == UserRole::ROLE_ADMIN ? true : false;
    }

    public function isRoleNormal()
    {
        return $this->role == UserRole::ROLE_NORMAL ? true : false;
    }
}
