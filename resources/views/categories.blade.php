<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Danmaker</title>
    <link rel="shortcut icon" href="{{asset('/images/logo.jpg')}}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
    <script type='text/javascript'
            src="{{asset('http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2')}}"></script>
    <script type='text/javascript' src="{{asset('/js/menu.js')}}"></script>
</head>
<body>
<nav class="navbar navbar-dark bg-dark collapse fixed-top">
    <a class="navbar-brand centeredLogo" href="{{asset(('/'))}}">
        <img src="{{asset('/images/logo.jpg')}}" alt="logo">
    </a>
    <div class="form-inline">
        <a href="http://localhost/public/login"><span class="userIcon"><img src="{{asset('/images/user.png')}}"></span></a>
        <span class="panierIcon"><img src="{{asset('/images/cart-of-ecommerce.png')}}"></span>
        <span class="searchIcon"><img src="{{asset('/images/magnifier.png')}}"></span>
    </div>
</nav>


@for($i = 0; $i < 20; $i++)
    <div class="row-gutter">

    </div>
@endfor

<div class="row-gutter"> <!-- Permet de marger entre les conteneurs -->
</div>


<!-- Menu-->
{{--<div class="col-1">
    <div id="gauche">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
               aria-controls="v-pills-home" aria-selected="true">Lien</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
               aria-controls="v-pills-profile" aria-selected="false">Lien</a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
               aria-controls="v-pills-messages" aria-selected="false">Lien</a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
               aria-controls="v-pills-settings" aria-selected="false">Lien</a>
        </div>
    </div>
    --------------------------------------------------------------
    <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
    </div>
</div>--}}


    <div class="container-fluid topFooter">

        <div class="row">
            <div class="offset-3 imgFooter">
                <img src="{{asset('/images/credit-card.png')}}" class="imgFooter">
                <div class="sousTitreFooter">Paiements sécurisés</div>
            </div>
            <div class="offset-2 imgFooter">
                <img src="{{asset('/images/logistics-delivery-truck-in-movement.png')}}" class="imgFooter">
                <div class="sousTitreFooter">Livraison rapide</div>
            </div>
            <div class="offset-2 imgFooter">
                <img src="{{asset('/images/delivery-packages-on-a-trolley.png')}}" class="imgFooter">
                <div class="sousTitreFooter">Retours possibles</div>
            </div>
        </div>

    </div>

    <div class="container-fluid footer">
        <div class="row">
            <div class="offset-3">
                <ul class="listeFooter">
                    <li>INFORMATIONS</li>
                    <li>Dan Maker</li>
                    <li>Paiement / Livraison / Retour</li>
                    <li>Conditions Générales de Vente</li>
                    <li>Conditions Générales d'Utilisation</li>
                </ul>
            </div>
            <div class="offset-1 ">
                <ul class="listeFooter">
                    <li>PRODUITS</li>
                    <li>Nouveaux Produits</li>
                    <li>Meilleures Ventes</li>
                    <li>Les dernières collections</li>
                    <li>Catégories</li>
                </ul>
            </div>
            <div class="offset-1">
                <ul class="listeFooter">
                    <li>CONTACT</li>
                    <li>Clients</li>
                    <li>Presse / Partenaires</li>
                    <li>Mentions Légales</li>
                    <li>Qui sommes-nous</li>
                </ul>
            </div>
        </div>
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
</html>
