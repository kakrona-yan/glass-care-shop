<?php

namespace App\Http\Constants;

class UserRole
{

    const ROLE_ADMIN = 1;
    const ROLE_NORMAL = 2;
    const ROLE_STAFF = 3;

    const USER_ROLE_TEXT_EN = [
        '1' => 'Admin',
        '2' => 'Normal',
        '3' => 'Staff',
    ];
    const USER_GANDER_TEXT_EN = [
        '1' => 'male',
        '2' => 'female'
    ];
}
