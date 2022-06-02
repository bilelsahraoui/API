<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    /** @var User $users **/
    public function getAllUsers()
    {

        $users = User::all();

        return response([
            'Users' => $users
        ]);

    }

}
