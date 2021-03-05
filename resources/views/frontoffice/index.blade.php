@extends('frontoffice.layout',["affiche"=>true])
@section('content')
<div class="container">
<section>
    <div><h3 class="text-center">Offre recentes</h3></div>
    <div class="row m-0">
        @foreach (offres(6) as $offre)
        @include('frontoffice.offrecard',['col'=>4])
        @endforeach


    </div>
</section>
<div class="d-flex justify-content-center">
<a href="{{url('offres')}}" class="acc-bt-plus p-1 m-3 text-center">Voir plus</a>
</div>
<section></section>
<section></section>

</div>
@endsection


