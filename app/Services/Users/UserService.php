<?php

namespace App\Services\Users;


use App\Repositories\Users\UserRepository;

class UserService{
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }


    public function all(int $id)
    {
        return $this->repository->all($id);
    }


}
