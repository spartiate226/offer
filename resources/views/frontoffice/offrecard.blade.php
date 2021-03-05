<section class="col-md-{{$col}} p-4 ">
    <div class="carte">
        <div class="card-photo bg-secondary">
        <span class="ribon bg-success text-light">{{$offre->categorie->nom}}</span>
            <section class="h-100 w-100 d-flex flex-column  justify-content-center">
                <div class="d-flex justify-content-center">
                    <a href="{{route('Offre.show',[$offre->id])}}" class="btn btn-success w-50">{{$offre->nom}}</a>
                </div>
            </section>
        </div>

        <div class="row m-0">
            <div class="col-md-12">
                <h4>{{$offre->structure->nom}}</h4>
            <p><i class="fa fa-info-circle"></i> {{$offre->secteur->nom??""}},{{$offre->domaine->nom}},{{$offre->localite->nom}}</p>
            </div>
        </div>
        <div class="row m-0">
            <section class="col-md-6">
                <p><i class="fa fa-calendar"></i> Publié le</p>
                <h5>{{$offre->date_publication}}</h5>
            </section>
            <section class="col-md-6">
                <p><i class="fa fa-calendar"></i> Date limite</p>
                <h5>{{$offre->expiration}}</h5>
            </section>
        </div>
    </div>
</section>
