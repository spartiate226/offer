<!DOCTYPE html>
<html class="h-100">
    <head>
        <title></title>
        <meta charset="utf-8">
    </head>
    <link rel="stylesheet" href="{{asset('front/css/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <body class="h-100">
        <header class="h-md-100">
            <div>

            </div>
            <div class="h-md-100 " style="background-image: url({{asset('images/header-image.jpg')}})">
                <div class="h-md-100 filter">
                    <div class="w-100 " id="menu">
                        <nav class="navbar navbar-expand-lg navbar-light ">
                            <div class="container-fluid">
                              <a class="navbar-brand text-light" href="{{url('/')}}">OFFER</a>
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                  <li class="nav-item">
                                    <a href="{{url('offres')}}" class="nav-link text-light" href="#">Offres</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link text-light" href="#">Abonnements</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link active text-light" aria-current="page" href="#">A propos</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link text-light" href="#">Contact</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </nav>
                    </div>
                    @if($affiche==true)
                    <div id="di" class="row mt-5 mb-0 ml-0 mr-0">
                        <section class="col-md-6 p-2">
                            <h1 class="text-left ml-4 mt-5 text-light" style="font-size:6vw">Les Appels d'offre plus proches de vous!!</h1>
                            <a style="font-size:2vw" class="btn btn-success ml-4 mt-5">Commencer</a>
                        </section>
                        <section class="col-md-6 h-sm-100 p-2 row m-0">
                        <form action="{{url('Offre/search')}}" method="POST" class="col-md-6 d-flex ml-md-3 banner-form mt-5 p-2 flex-column justify-content-between">
                            @csrf

                                <label class="text-light">Categorie</label>
                                <select class="form-control-advance">
                                    @foreach (categorie() as $item)
                                      <option value="{{$item->id}}">{{$item->nom}}</option>
                                    @endforeach
                                </select>
                                <label class="text-light">Secteur d'activité</label>
                                <select class="form-control-advance">
                                    @foreach (secteur() as $item)
                                      <option value="{{$item->id}}">{{$item->nom}}</option>
                                    @endforeach
                                </select>
                                <label class="text-light">Structure</label>
                                <select class="form-control-advance">
                                    @foreach (structure() as $item)
                                      <option value="{{$item->id}}">{{$item->nom}}</option>
                                    @endforeach
                                </select>
                                <label class="text-light">Domaine</label>
                                <select class="form-control-advance">
                                    @foreach (domaine() as $item)
                                      <option value="{{$item->id}}">{{$item->nom}}</option>
                                    @endforeach
                                </select>
                                <label class="text-light">Localité</label>
                                <select class="form-control-advance">
                                    @foreach (localite() as $item)
                                      <option value="{{$item->id}}">{{$item->nom}}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="but bg-success mt-1">Rechercher</button>
                            </form>
                        </section>
                    </div>
                    @endif
                </div>
            </div>
        </header>
        @yield('content')
        <footer class="mt-3 bg-success ">
            <div class="row m-0 justify-content-center p-2">
                <section class="col-md-4">
                    <div class="">
                        <h4 class="m-1 text-center text-light"><b>A propos</b></h4>
                        <p class="text-light text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam soluta, reprehenderit eum illo, dolorem ut dolore error
                             impedit qui laboriosam voluptatibus sequi repudiandae totam voluptate sapiente dolores aliquid a magnam.
                        </p>
                        <p class="text-light text-justify">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum odio pariatur autem architecto, ipsum vero esse numquam cupiditate
                            officia eligendi voluptate, aperiam libero? Aut debitis voluptates consequuntur distinctio numquam nihil.
                        </p>
                    </div>
                </section>
                <section class="col-md-4 d-flex justify-content-center">
                    <div class="">
                        <h4 class="text-center m-1 text-light"><b>Menu</b></h4>
                        <ul class="p-0">
                            <li class="list-unstyled mt-3"><a style="text-decoration: none;color:white" href="">Offres publics</a></li>
                            <li class="list-unstyled mt-3"><a style="text-decoration: none;color:white" href="">Offres privés</a></li>
                            <li class="list-unstyled mt-3"><a style="text-decoration: none;color:white" href="">Abonnements</a></li>
                        </ul>
                    </div>
                </section>
                <section class="col-md-4">
                    <div>
                        <h4 class="text-center m-1 text-light"><b>Newletter</b></h4>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email">
                        <button class="mt-1 btn btn-light text-success">S'inscrire</button>
                    </div>
                </section>
            </div>
            <div class="text-center p-2 border-top">
                Copyright {{date('Y')}}<span><b><a href="">ADV Technologie</a></b></span>
            </div>
        </footer>

    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/script.js')}}"></script>
    </body>
</html>
