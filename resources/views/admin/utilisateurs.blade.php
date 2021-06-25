@extends('layouts.master')

@section('title')
    Espace Administrateur
@endsection


@section('content')

<div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nouvel utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/add_utilisateurs" method="POST">
        {{ csrf_field() }}

        <div class="modal-body">

            <div class="form-group">
                <label> Utilisateur </label>
                <input type="text" name="name" class="form-control" placeholder="Nom et prénom" required="">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="@domain.com" required="">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
      </form>

    </div>
  </div>
</div>



<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-lg-6">
                <h3>Liste d'utilisateurs</h3>
            </div>
            <div class="col-lg-6"><div style="text-align: right;">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adduser">
                <i class="fas fa-user-plus"> </i> Ajouter un utilisateur 
                </button>
            </div></div>
        </div>
          @if (session('status'))
          <div id="bloc-10"><script> setInterval(function(){ var obj = document.getElementById("bloc-10"); obj.innerHTML = "";},3000);</script>
            <h5 style="background: #d4edda; border-color: #36a14f; text-align: center; padding: 7px; color: #155724; border-radius: 2px; width: 50%; margin: 20px auto;">
              {{ session('status') }}
          </div></h5>
      @endif
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
                    @foreach ($users as $row)
                    <tr>
                    <td><center>{{ $row->name }}</center></td>
                    <td><center>{{ $row->email }}</center></td>
                    <td><center><a href="utilisateurs_edit/{{ $row->id }}" class="btn btn-success"><i class="fas fa-user-edit"></i> Modifiier</a></center></td>
                    <form action="/utilisateurs_supp/{{ $row->id }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                    <td><center><button type="submit" class="btn btn-danger servideletebtn"><i class="fas fa-trash"></i> Supprimer</button></center></td>
                    </tr></form>
                    @endforeach
                </tbody>
              </table>
          </div>
        </div>
    </div>
  </div>

@endsection


@section('script')

@endsection