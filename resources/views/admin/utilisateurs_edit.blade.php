@extends('layouts.master')

@section('title')
    Modifier utilisateur
@endsection


@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h4 class="card-title"> Modifier utilisateur</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="/utilisateurs_edit_update/{{ $users->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nom D'utilisateur</label>
                                        <input type="text" class="form-control" value="{{ $users->name }}" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer le nom et prénom de l'utilisateur...">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Adresse Email</label>
                                        <input type="email" class="form-control" value="{{ $users->email }}" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre Email...">
                                    </div>
                                   <center><button type="submit" class="btn btn-success"><i class="fas fa-user-edit"></i> Modifier</button>
                                   <a href="/utilisateurs" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Abandonner</a></center> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('script')
    
@endsection