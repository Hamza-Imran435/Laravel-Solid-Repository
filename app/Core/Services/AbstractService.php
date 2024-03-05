<?php

namespace App\Core\Services;

use App\Core\Contracts\ServiceInterfaces\AbstractServiceRepositoryInterface;

class AbstractService implements AbstractServiceRepositoryInterface{

    protected $repository;
    protected $with;
    protected $condition;

    /**
     * Undocumented function
     *
     * @param array $condition
     * @param array $with
     * @return void
     */
    public function list(array $condition = [], array $with = [])
    {
      $list =   $this->repository->getList($condition,$with);
      return $list;
    }


}
