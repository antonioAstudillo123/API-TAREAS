<?php

namespace App\Repositories\Users;

use App\Models\User;


class UserRepository{

    public function all(int $id){
        return User::find($id)->tasks;
    }

}
