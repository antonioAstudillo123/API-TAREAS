<?php

namespace App\Services\Companies;

use App\Repositories\Companies\CompanyRepository;

class CompanyService{

    private $repository;

    public function __construct(CompanyRepository $repository){
        $this->repository = $repository;
    }

    public function all($search)
    {
        if($search !== '')
        {
            return $this->repository->allWithSearch($search);
        }

        return $this->repository->all();
    }
}
