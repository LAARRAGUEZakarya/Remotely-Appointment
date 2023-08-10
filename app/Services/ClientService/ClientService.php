<?php 

namespace App\Services\ClientService;

use App\Repositories\ClientRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\ClientRepositoryInterface;

class ClientService implements IClientService
{
    private $clientRepository;
    private $userRepository;  

    public function __construct(ClientRepositoryInterface $clientRepository, UserRepositoryInterface $userRepository) {
        $this->clientRepository = $clientRepository;
        $this->userRepository = $userRepository;
    }
    public function all()
    {
        return $this->clientRepository->all();
    }
    public function get($id)
    {
        return $this->clientRepository->get($id);
    }
    public function create($entity)
    {
       
        $entity['role'] = 'client';
        $entity['password'] = Hash::make($entity['password']);
       
        $user = $this->userRepository->create($entity);

        return $user;
    }
    public function update($id,$entity)
    {
      
            $this->userRepository->update($id,$entity);
            return $this->clientRepository->update($id,$entity);
        

    }
    public function distroy($id)
    {
        $this->clientRepository->distroy($id);
    }
}