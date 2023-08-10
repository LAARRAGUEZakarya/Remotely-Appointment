<?php 

namespace App\Repositories;

use App\Models\user;


class UserRepository implements UserRepositoryInterface
{
    protected $user;

    public function __construct(user $user) {
        $this->user = $user;  
    }
    public function get($id)
    {
        return $this->user->find($id);
    }
    public function create($entity)
    {
       
        return $this->user->create($entity);
    }
    public function update($id,$entity)
    {
        $user = $this->user->find($id);
        $user->update($entity);
        return $user;
    }
   
}