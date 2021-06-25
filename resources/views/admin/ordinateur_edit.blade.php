@extends('layouts.master')

@section('title')
    Modifier ordinateur
@endsection


@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h4 class="card-title"> Modifier ordinateur</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="/ordinateur_edit_update/{{ $ordinateur->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nom de l'ordinateur</label>
                                        <input type="text" class="form-control" value="{{ $ordinateur->nom_poste }}" name="nom_poste" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer le nom et prénom de l'utilisateur...">
                                    </div>
                                   <center><button type="submit" class="btn btn-success"><i class="fas fa-user-edit"></i> Modifier</button>
                                   <a href="/ordinateur" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Abandonner</a></center> 
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