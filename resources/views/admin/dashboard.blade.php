@extends('layouts.master')

@section('title')
    Espace Administrateur
@endsection


@section('content')
    
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Liste utilisateurs</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="10">
              <thead>
                <tr>
                <th><center>Nom utilisateur</center></th>
                <th><center>Email</center></th>
                <th><center>Modifier</center></th>
                <th><center>Supprimer</center></th>
              </tr>
              </thead>
                <tbody>
                    <tr>
                    <td><center>Dio Brando</center></td>
                    <td><center>DioBrando@TheWorld.com</center></td>
                    <td><center><a href="#" class="btn btn-success"><i class="fas fa-user-edit"></i> Modifiier</a></center></td>
                    <td><center><a href="#" class="btn btn-danger"><i class="fas fa-trash"></i> Supprimer</a></center></td>
                    </tr>
                </tbody>
              </table>
          </div>
        </div>
    </div>
  </div>

@endsection


@section('script')
    
@endsection