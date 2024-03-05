<?php

namespace App\Repositories;

use App\Core\Repositories\AbstractRepository;
use App\Models\User\User;

class UserRepository extends AbstractRepository{


    public function __construct(User $model)
    {
        $this->model = $model;
    }



}
