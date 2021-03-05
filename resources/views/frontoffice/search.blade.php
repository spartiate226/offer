@extends('frontoffice.layout',["affiche"=>false])
@section('content')
<div class="h-25" style="background-image: url({{asset('images/header-image.jpg')}});background-size:center">
<section class="w-100 h-100 d-flex flex-column col-md justify-content-center">
    <h1 class="text-center"><b>Recherche</b></h1>
</section>
</div>
<div class="border-bottom mt-5">
    <form class="row  justify-content-between p-2">
       <div class="form-group col-md">
        <label class="text-light">Categorie</label>
        <select class="form-control">
            <option>Categorie</option>
        </select>
       </div>

       <div class="form-group col-md">
        <label class="text-light">Secteur d'activité</label>
        <select class="form-control">
            <option>Secteur d'activité</option>
        </select>
       </div>

         <div class="form-group col-md">
            <label class="text-light">Structure</label>
            <select class="form-control">
                <option>Structure</option>
            </select>
         </div>

       <div class="form-group col-md">
        <label class="text-light">Domaine</label>
        <select class="form-control">
            <option>Domaine</option>
        </select>
       </div>

    <div class="form-group col-md"> <label class="text-light">Localité</label>
        <select class="form-control">
            <option>Localité</option>
        </select>
    </div>
        <div class="form-group d-flex flex-column col-md justify-content-end">
            <input type="submit" class=" form-control btn btn-success" value="Rechercher">
        </div>
    </form>
</div>
<div class="row mt-5 mb-5">
    @foreach (offres(25) as $offre)
    @include('frontoffice.offrecard',['col'=>4])
    @endforeach
</div>
@endsection


