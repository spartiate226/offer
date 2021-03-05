@extends('frontoffice.layout',["affiche"=>false])
@section('content')
<div class="h-25" style="background-image: url({{asset('images/header-image.jpg')}});background-size:center">
<section class="w-100 h-100 d-flex flex-column col-md justify-content-center">
    <h1 class="text-center"><b>APPEL D'OFFRE</b></h1>
</section>
</div>
<div class="m-3 p-3 card">
   <section>
   <h3 class="border-bottom p-2 mb-2">{{$offre->nom}}</h3>
   </section>
   <div class="">
       {!! $offre->description !!}
   </div>
   <div class="">

   </div>
</div>
<div>
    <h3 class="text-center">Offres du meme domaine</h3>
    <div class="row">
        @foreach (domaine_offre($offre->domaine->id) as $offre)
        @include('frontoffice.offrecard',['col'=>4])
        @endforeach
    </div>
</div>
@endsection

