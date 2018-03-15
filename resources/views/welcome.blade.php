<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Danmaker</title>
    <link rel="shortcut icon" href="{{asset('/images/instagram.png')}}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">

    <!-- Styles -->
    <style>

    </style>
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="{{asset('/images/instagram.png')}}" width="30" height="30" alt="">
    </a>
    <div class="form-inline">
        <span class="userIcon"><img src="{{asset('/images/user.png')}}"></span>
        <span class="panierIcon"><img src="{{asset('/images/cart-of-ecommerce.png')}}"></span>
        <span class="searchIcon"><img src="{{asset('/images/magnifier.png')}}"></span>
    </div>
</nav>
<!-- CAROUSEL -->
<div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('/images/image1.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('/images/image2.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('/images/image3.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('/images/image4.jpg')}}" alt="First slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="false"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="row-gutter"> <!-- Permet de marger entre les conteneurs -->
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <div class="card">
                <a href="#">
                    <img class="card-img-top resized" src="http://danmaker.fr/img/p/8/7/8/878-home_default.jpg"
                         style="display: block;" data-holder-rendered="true">
                </a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <a href="#">
                    <img class="card-img-top resized" src="http://danmaker.fr/img/p/8/7/8/878-home_default.jpg"
                         style="display: block;" data-holder-rendered="true">
                </a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <a href="#">
                    <img class="card-img-top resized" src="http://danmaker.fr/img/p/8/7/8/878-home_default.jpg"
                         style="display: block;" data-holder-rendered="true">
                </a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <a href="#">
                    <img class="card-img-top resized" src="http://danmaker.fr/img/p/8/7/8/878-home_default.jpg"
                         style="display: block;" data-holder-rendered="true">
                </a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-gutter"></div>
        </div>
        <div class="col-3">
            <div class="card">
                <a href="#">
                    <img class="card-img-top resized" src="http://danmaker.fr/img/p/8/7/8/878-home_default.jpg"
                         style="display: block;" data-holder-rendered="true">
                </a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <a href="#">
                    <img class="card-img-top resized" src="http://danmaker.fr/img/p/8/7/8/878-home_default.jpg"
                         style="display: block;" data-holder-rendered="true">
                </a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <a href="#">
                    <img class="card-img-top resized" src="http://danmaker.fr/img/p/8/7/8/878-home_default.jpg"
                         style="display: block;" data-holder-rendered="true">
                </a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <a href="#">
                    <img class="card-img-top resized" src="http://danmaker.fr/img/p/8/7/8/878-home_default.jpg"
                         style="display: block;" data-holder-rendered="true">
                </a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row-gutter">
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html><!doctype html>
