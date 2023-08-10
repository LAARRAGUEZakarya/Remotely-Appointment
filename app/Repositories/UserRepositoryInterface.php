<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    public function get($id);
    public function create($entity);
    public function update($id,$entity);
}
