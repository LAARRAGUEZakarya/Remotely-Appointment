<?php 
 
namespace App\Services;

interface IClientService 
{
    public function all();
    public function get($id);
    public function create($entity);
    public function update($id,$entity);
    public function distroy($id);
}