<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Acceuil</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

     
        
    </head>
   
    <body class="antialiased">
    {{-- style="background-image: url('{{ asset('images/image.jpg') }}'); background-size: cover; background-position: center;" --}}
      
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <h1 class="h2">&nbsp;&nbsp;<a class="text-decoration-none text-white" href="/">Gestion de Produit</a></h1>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto text-white">
      
                  <li class="nav-item dropdown active">
                    <div id="list-example" class="list-group" >
                      <div class="dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                        <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                            <li><a class="dropdown-item" href="/listeCat">Lister</a></li>
                            <li><a class="dropdown-item" href="/createCat">Ajouter</a></li>
                        </ul>
                       </div>
                  </li>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                  <li class="nav-item dropdown active">
                    <div id="list-example" class="list-group" >
                      <div class="dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="produitsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Produits</a>
                        <ul class="dropdown-menu" aria-labelledby="produitsDropdown">
                            <li><a class="dropdown-item" href="/listeProd">Lister</a></li>
                            <li><a class="dropdown-item" href="/createProd">Ajouter</a></li>
                        </ul>
                       </div>
                  </li>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                  <li class="nav-item dropdown active">
                    <div id="list-example" class="list-group" >
                      <div class="dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="ventesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ventes</a>
                        <ul class="dropdown-menu" aria-labelledby="ventesDropdown">
                            <li><a class="dropdown-item" href="/listeVen">Lister</a></li>
                            <li><a class="dropdown-item" href="/createVen">Ajouter</a></li>
                        </ul>
                       </div>
                  </li>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                  <li class="nav-item dropdown active">
                    <div id="list-example" class="list-group" >
                      <div class="dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="tableauDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tableau de bord</a>
                        <ul class="dropdown-menu" aria-labelledby="tableauDropdown">
                          <li><a class="dropdown-item" href="/sommeMontant">Montants de vente</a></li>
                          <li><a class="dropdown-item" href="">Nombre de produit vendu</a></li>
                          <li><a class="dropdown-item" href="/produitPlusVendu">Produit le plus vendu</a></li>
                        </ul>
                       </div>
                  </li>
      
      
              </ul>
      
          </div>
        </nav>
   
  
      
</body>
@yield('content')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
