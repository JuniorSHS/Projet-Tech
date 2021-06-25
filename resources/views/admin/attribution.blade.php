@extends('layouts.master')

@section('title')
    Attribuer un poste
@endsection


@section('content')
    
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Attribuer un poste</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="10">
              <thead>
                <tr>
                <th><center>Nom du poste</center></th>
                <th><center>Nom de l'utilisateur</center></th>
                <th><center>Date d'attribution</center></th>
                <th><center>Heure</center></th>
                <th><center>Supprimer</center></th>
              </tr>
              </thead>
                <tbody>
                    <tr>
                    <td><center>ASUS</center></td>
                    <td><center>Dio Brando</center></td>
                    <td><center>23/06/2021</center></td>
                    <td><center>14:30</center></td>
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