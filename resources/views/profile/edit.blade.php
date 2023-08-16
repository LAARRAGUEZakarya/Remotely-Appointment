@extends('layouts.app')
@section('title') Edit profile @endsection

@section('content')

<main>




      <div class="card text-center ">
        <img class="card-img-top" src="{{asset($user->image_url)}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Personnal information :</h5>
          <p class="card-text"> MR {{$user->name}} <br> Number phone is : {{$user->phone}}<br>Adress is {{$user->adress?$user->adress:'There is no adress'}}</p>

        </div>
        <div class="card-footer text-muted">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EditModal"> EDIT</button>
           <button  class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#deleteModal">DELETE </button>
        </div>
      </div>
</main>

@include('profile.partial.update')
@include('profile.partial.delete')


@endsection
