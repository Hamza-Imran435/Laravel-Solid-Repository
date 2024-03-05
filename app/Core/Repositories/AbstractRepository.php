<?php

namespace App\Core\Repositories;

use App\Core\Contracts\Interfaces\AbstractRepositoryInterface;

abstract class AbstractRepository implements AbstractRepositoryInterface{


    protected $model;
    protected $conditons;
    protected $with;


    public function getList(array $conditons = [] , array $with = [] )
    {
        try {
            $response = $this->model->with($with)->where($conditons)->orderBy('created_at','DESC')->get();
            return $response;
        } catch (\Exception $e) {
            throw $e;
        }
    }

}
