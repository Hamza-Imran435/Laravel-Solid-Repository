<?php

namespace App\Services;

use App\Core\Services\AbstractService;
use App\Repositories\UserRepository;

class UserService extends AbstractService{

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

}
