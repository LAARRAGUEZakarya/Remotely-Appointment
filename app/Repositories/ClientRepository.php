<?php

namespace App\Repositories;

use App\Models\client;
use App\Models\User;

class ClientRepository implements ClientRepositoryInterface{

    private $client;
    private $user;

    public function __construct(client $client,User $user) {
        $this->client = $client;
        $this->user = $user;
    }

    public function all()
    {
        return $this->client
        ->join('users','clients.user_id','=','users.id')
        ->select('*','client_id')
        ->paginate(100);
    }
    public function get($id)
    {
        return $this->client
        ->where('clients.id',$id)
        ->join('users','clients.user_id','=','users.id')
        ->select('*','users.id as user_id','clients.id as id')
        ->firstOrFail();
    }
    public function create($entity)
    {
        return $this->client->create($entity);
    }
    public function update($id,$entity)
    {
        return $this->client
        ->where('user_id',$id)
        ->first()
        ->update($entity);
    }
    public function distroy($id)
    {
        $client = $this->get($id);
        $this->user->destroy($client->user_id);

    }



}
