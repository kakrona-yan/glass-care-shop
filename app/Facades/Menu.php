<?php

namespace App\Facades;

use Illuminate\Support\Facades\Session;

class Menu
{
    function RoleType($routeName)
    {
        $roleType = false;
        if (\Gate::forUser(\Auth::user())->allows($routeName, \Auth::user())) {
            return $roleType = true;
        }
    }
    /*
     * get menu items
     */
    public function getMenus()
    {
        return [
            [
                // dashboard management
                'route' => 'dashboard',
                'icon' => 'fas fa-tachometer-alt',
                'label' => __('menu.dashboard'),
                'role_type' => $this->RoleType('dashboard'),
                'sub_menu' => null
            ],
            [
                // user management
                'route' => 'users.index',
                'icon' => 'fas fa-user',
                'label' => __('menu.user'),
                'role_type' => $this->RoleType('users.index'),
                'sub_menu' => null
            ],
        ];
    }
    /*
     * render menu html
     */
    public function render()
    {
        return view('backends.partials.sidebar', [
            'menus' => $this->getMenus()
        ]);
    }

}

