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
        <header class="h-100">
            <div>

            </div>
            <div class="h-md-100 mb-5" style="background-image: url({{asset('images/header-image.jpg')}})">
                <div class="h-md-100 filter p-3">
                    <div class="w-100 mb-5" id="menu">
                        <nav class="navbar navbar-expand-lg navbar-light ">
                            <div class="container-fluid">
                              <a class="navbar-brand text-light" href="#">Offer</a>
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                  <li class="nav-item">
                                    <a class="nav-link active text-light" aria-current="page" href="#">A propos</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link text-light" href="#">Offres privés</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link text-light" href="#">Offres publics</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link text-light" href="#">Tarifs</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link text-light" href="#">Contact</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </nav>
                    </div>
                    <div class="row m-0">
                        <section class="col-md-6 p-2">
                            <h1 class="text-left ml-4 mt-5 text-light" style="font-size:6vw">Les Appels d'offre plus proches de vous!!</h1>
                            <a style="font-size:2vw" class="btn btn-success ml-4 mt-5">Commencer</a>
                        </section>
                        <section class="col-md-6 p-2 row m-0">
                            <form class="col-md-6 d-flex ml-md-3 banner-form mt-5 p-2 flex-column justify-content-between">
                                <label class="text-light">Mot à rechercher</label>
                                <input class="form-control-advance" type="text">
                                <label class="text-light">Categorie</label>
                                <select class="form-control-advance">
                                    <option>Categorie</option>
                                </select>
                                <label class="text-light">Secteur d'activité</label>
                                <select class="form-control-advance">
                                    <option>Secteur d'activité</option>
                                </select>
                                <label class="text-light">Structure</label>
                                <select class="form-control-advance">
                                    <option>Structure</option>
                                </select>
                                <label class="text-light">Domaine</label>
                                <select class="form-control-advance">
                                    <option>Domaine</option>
                                </select>
                                <label class="text-light">Localité</label>
                                <select class="form-control-advance">
                                    <option>Localité</option>
                                </select>
                                <button class="but bg-success">Rechercher</button>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        <footer>
            <section></section>
            <section></section>
            <section></section>
        </footer>

    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/script.js')}}"></script>
    </body>
</html>
