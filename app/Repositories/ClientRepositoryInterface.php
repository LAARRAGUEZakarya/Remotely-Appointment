<?php

namespace App\Repositories;

interface ClientRepositoryInterface
{
    public function all();
    public function get($id);
    public function create($entity);
    public function update($id,$entity);
    public function distroy($id);
}
