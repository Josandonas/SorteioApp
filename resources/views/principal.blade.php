@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sorteio no instagram</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body  class="d-flex flex-column min-vh-100" style="background-color: #c6d9f0">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background:#fd7c59;">
            <div class="container-fluid">
              <a class="navbar-brand" href="/"> <img style="width: 120px" src="{{ asset('/images/sorteiogram.logo.png') }}"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <i class="icofont-navigation-menu icofont-2x" style="color: white"></i>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarText">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="icofont-instagram"></i> Realizar Sorteio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="icofont-envelope"></i> Fale Conosco</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="icofont-plugin"></i> Instalar extensão</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="container mt-5 col-8">
              <div class="card"> 
                  <div class="card-header"> <h1 class="card-title">Sorteio no Instragram</h1></div>
                  <div class="card-body"> 
                      <div class="alerta alerta-amarelo">
                        <img src="{{ asset('/images/chrome.png') }}" style="width: 24px">
                        <a>Instale a extensão do SorteioGram para carregar mais rápido.<u>Clique aqui.</u>  </a>
                      </div>
                        <div class="box btn-red">
                            <button type="button" class="btn btn-lg btn-block text-white font-btn" style="width: 80%; text-align:left;">&nbsp; Realizar Sorteio </button> <i class="icofont-group icofont-3x elemento"></i>
                        </div>
                  </div>
              </div>
          </div>
          <footer class="mt-auto mt-3 text-white" style="background: #232323">
            <div class="container-fluid py-4">
                <div class="row justify-content-center">
                  <div class="col-6 col-lg-4 mb-3">
                    <h6 class="text-secondary">Sites parceiros</h6>
                    <ul class="list-unstyled">
                      <li class="mb-2" ><a href="#" class="links">Mais seguidores no Instagram</a></li>
                      <li class="mb-2"><a href="#" class="links">Crie seu Link na Bio</a></li>
                      <li class="mb-2"><a href="#" class="links">Sorteio no Tiktok</a></li>
                    </ul>
                  </div>
                  <div class="col-6 col-lg-3 mb-3">
                    <h6 class="text-secondary">Mapa do Site</h6>
                    <ul class="list-unstyled">
                      <li class="mb-2"><a href="#" class="links">Instalar extensão do Google Chrome</a></li>
                      <li class="mb-2"><a href="#" class="links">Blog</a></li>
                      <li class="mb-2"><a href="#" class="links">Fale conosco</a></li>
                      <li class="mb-2"><a href="#" class="links">Video de Como realizar Sorteios no Instagram</a></li>
                    </ul>
                  </div>
                </div>
                <div class="text-center text-secondary"> Todos os direitos reservados. SorteioGram 2021</div>
              </div>
          </footer>
    </body>
</html>
