@extends('backoffice.layout')
@section('contenue')
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#boutiqueform">Ajouter un offre</button>
<div class="modal fade" id="boutiqueform">
    <div class="modal-dialog modal-xl">
    <form action="{{route('Offre.store')}}" method="Post" class="modal-content">
            @csrf
            <div class="modal-header">
                <button class="btn btn-dark" type="submit">Publier</button>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <fieldset class="card p-2">
                        <h3 class="border-bottom">Offre</h3>
                        <section class="row m-0">
                            <div class="form-group col-md-12 p-2">
                                <label>Titre :</label>
                                <input class="form-control" name="nom" type="text" placeholder="Nom">
                            </div>
                        </section>
                        <section class="row m-0">
                            <div class="form-group col-md p-2">
                                <label>Date publication</label>
                                <input class="form-control" name="date_publication" type="date" placeholder="">
                            </div>
                            <div class="form-group col-md p-2">
                                <label>Date Expiration</label>
                                <input class="form-control" name="expiration" type="date" placeholder="">
                            </div>
                        </section>

                        <section class="row m-0">
                            <div class="form-group col-md p-2">
                                <label>Categorie</label>
                                <select class="form-control" name="categorie_id">
                                    @foreach (categorie() as $cat)
                                <option value="{{$cat->id}}">{{$cat->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md p-2">
                                <label>Structure</label>
                                <select class="form-control" name="structure_id">
                                    @foreach (structure() as $struct)
                                <option value="{{$struct->id}}">{{$struct->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md p-2">
                                <label>Localité</label>
                                <select class="form-control" name="localite_id">
                                    @foreach (localite() as $loc)
                                <option value="{{$loc->id}}">{{$loc->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </section>
                        <section class="row m-0">
                            <div class="form-group col-md p-2">
                                <label>Secteur d'activité</label>
                                <select class="form-control" name="secteur_id">
                                    @foreach (secteur() as $sect)
                                <option value="{{$sect->id}}">{{$sect->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md p-2">
                                <label>Domaine</label>
                                <select class="form-control" name="domaine_id">
                                    @foreach (domaine() as $dom)
                                <option value="{{$dom->id}}">{{$dom->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </section>
                        <section class="row m-0">
                            <div class="form-group col-md">
                                <label>Description</label>
                                <textarea name="description" id="summernote" class="form-control" style="height: 300px">

                                </textarea>
                        </div>
                        </section>
                    </fieldset>
                </div>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Offre</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="">
                        <div class="input-group-append">
                            <div class="btn btn-primary">
                                <i class="fas fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <div class="mailbox-controls">
                    <!-- Check all button -->
                    <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                    </button>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                    <div class="float-right">

                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                        <!-- /.btn-group -->
                    </div>
                    <!-- /.float-right -->
                </div>
                <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Nom</th>
                            <th>Categorie</th>
                            <th>Structure</th>
                            <th>Secteur activité</th>
                            <th>Domaine</th>
                            <th>Localité</th>
                            <th>Du</th>
                            <th>Expiration</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach (offres(10) as $offre)
                        <tr>
                            <td>
                                <div class="">
                                    <input class="check" type="checkbox" value="" name="" id="check">
                                    <label for="check1"></label>
                                </div>
                            </td>
                            <td class="mailbox-star">{{$offre->nom}}</td>
                            <td class="mailbox-star">{{$offre->categorie->nom}}</td>
                            <td class="mailbox-name">{{$offre->structure->nom}}</td>
                            <td class="mailbox-date">{{$offre->secteur->nom?? ""}}</td>
                            <td class="mailbox-star">{{$offre->domaine->nom}}</td>
                            <td class="mailbox-star">{{$offre->localite->nom}}</td>
                            <td class="mailbox-name">{{$offre->date_publication}}</td>
                            <td class="mailbox-date">{{$offre->expiration}}</td>
                            <td class="mailbox-date"></td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <!-- /.table -->
                </div>
                <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer p-0">
                <div class="mailbox-controls">
                    <!-- Check all button -->
                    <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                        <i class="far fa-square"></i>
                    </button>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                    <div class="float-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                        <!-- /.btn-group -->
                    </div>
                    <!-- /.float-right -->
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>
</div>

@endsection

@section('script')
<script src="{{asset('plugins/codemirror/codemirror.js')}}"></script>
<script src="{{asset('plugins/codemirror/mode/css/css.js')}}"></script>
<script src="{{asset('plugins/codemirror/mode/xml/xml.js')}}"></script>
<script src="{{asset('plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>
<script>
    $(function () {
      // Summernote
      $('#summernote').summernote()

      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
  </script>
@endsection
