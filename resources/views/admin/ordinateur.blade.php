@extends('layouts.master')

@section('title')
    Espace Administrateur
@endsection


@section('content')
    

<div class="modal fade" id="addordi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nouvel ordinateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/add_ordinateur" method="POST">
         {{ csrf_field() }}

        <div class="modal-body">
            <div class="form-group">
                <label> Nom du poste </label>
                <input type="text" name="nom_poste" class="form-control" placeholder="Nom du poste" required="">
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

{{-- Modal de suppression commence ici --}}


<!-- Modal -->
<div class="modal fade" id="deletemodalpop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form id="delete_modal_Form" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

          <div class="modal-body">
            <input type="text" id="delete_ordi_id">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Supprimer</button>
          </div>
      </form>


    </div>
  </div>
</div>

{{-- Modal de suppression se termine ici --}}



<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-lg-6">
                <h3>Liste d'ordinateur</h3>
            </div>
            <div class="col-lg-6"><div style="text-align: right;">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addordi">
                <i class="fas fa-user-plus"> </i> Ajouter un ordinateur 
                </button>
            </div></div>
        </div>
        @if (session('status'))
        <div id="bloc-10"><script> setInterval(function(){ var obj = document.getElementById("bloc-10"); obj.innerHTML = "";},3000);</script>
          <h5 style="background: #d4edda; border-color: #36a14f; text-align: center; padding: 7px; color: #155724; border-radius: 2px; width: 50%; margin: 20px auto;">
            {{ session('status') }}
        </div></h5>
        @endif
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="10">
              <thead>
                <tr>
                <th><center>Numero de poste</center></th>
                <th><center>Nom de poste</center></th>
                <th><center>Modifier</center></th>
                <th><center>Supprimer</center></th>
              </tr>
              </thead>
                <tbody>
                  @foreach ($ordinateur as $data)
                  <tr>
                  <td><center>{{ $data->id }}</center></td>
                  <td><center>{{ $data->nom_poste }}</center></td>
                  <td><center><a href="ordinateur_edit/{{ $data->id }}" class="btn btn-success"><i class="fas fa-user-edit"></i> Modifiier</a></center></td>
                  <td>
                    <center><a href="javascript:void(0)" class="btn btn-danger deletebtn" data-toggle="modal" data-target="#deletemodalpop"><i class="fas fa-trash"></i> Supprimer</a></center>
                  </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
        </div>
    </div>
  </div>

@endsection


@section('script')

<script>
  $(document).ready( function () {
        $('#datatable').DataTable();

            $('#dataTable').on('click', '.deletebtn', function () {
              
              $tr = $(this).closest('tr');

              var data = $tr.children("td").map(function () {
                return $(this).text();
              }).get();

              console.log(date);

              $('#delete_ordi_id').val(data[0]);

              $('#delete_modal_Form').attr('action', '/ordinateur_supp/'+data[0]);

              $('#deletemodalpop').modal('show');

            });
       });
</script>

    
@endsection