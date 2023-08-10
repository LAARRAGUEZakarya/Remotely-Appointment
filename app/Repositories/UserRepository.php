<?php 

namespace App\Repositories;

use Illuminate\Foundation\Auth\User;

class UserRepository implements UserRepositoryInterface
{
    protected $user;

    public function __construct(User $user) {
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