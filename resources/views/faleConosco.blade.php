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
                    <a class="nav-link active" href="/"><i class="icofont-instagram"></i> Realizar Sorteio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="icofont-envelope"></i> Fale Conosco</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="https://chrome.google.com/webstore/detail/sorteiogram/gjpkngahkcdfjnelojifgmdjfocdllne"><i class="icofont-puzzle"></i> Instalar extensão</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="container mt-5 col-12">
              <div class="card"> 
                  <div class="card-header"> <h1 class="card-title">Fale Conosco  <i class="icofont-envelope"></i></i></h1></div>
                  <div class="card-body">   
                      <b>Entre em contato conosco pelo email: <a href="mailto:contato@sorteiogram.com?subject=Contato SorteioGram">contato@sorteiogram.com</a></b>                 
                      <p>Por favor, em caso de algum problema com a plataforma, informe seu Instagram e URL da publicação de sorteio.</p>
                  </div>
              </div>
              <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 -3">
                <div class="col">
                  <div class="card h-100">
                    <a href="https://sorteiogram.com/blog/como-fazer-sorteio-gratis/"><img src="{{ asset('/images/gratis.jpg') }}" class="card-img-top" alt="Como realizar um sorteio gratis"></a>
                    <div class="card-body">
                      <h5 class="card-title group">Como fazer sorteio grátis?</h5>
                      <br>
                      <p class="card-text">Você sabe como realizar um sorteio gratuitamente no Sorteiogram? 🤨</p>
                    </div>
                    <div class="card-footer">
                      <div class="row">
                        <div class="col-2">
                          <a href="https://sorteiogram.com/blog/como-fazer-sorteio-gratis/"><img src="{{ asset('/images/perfil.png') }}" class="rounded" alt="icone de perfil"></a>
                        </div>
                        <div  class="col-9">
                          <div style="font-size: 12px;">Douglas</div>
                          <div class="text-muted" style="font-size: 12px;">Maio 7, 2021 - 25 seg leitura</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <a href="https://sorteiogram.com/blog/por-que-vincular-o-instagram-ao-facebook/"><img src="{{ asset('/images/ellen.png') }}" class="card-img-top" alt="Porque vincular o instagram ao Facebook?"></a>
                    <div class="card-body">
                      <h5 class="card-title group">Por que vincular o Instagram ao Facebook?</h5>
                      <p class="card-text">Se você chegou até aqui, provavelmente deve ter algumas dúvidas.</p>
                    </div>
                    <div class="card-footer">
                      <div class="row">
                        <div class="col-2">
                          <img src="{{ asset('/images/perfil.png') }}" class="rounded" alt="icone de perfil">
                        </div>
                        <div  class="col-9">
                          <div style="font-size: 12px;">Douglas</div>
                          <div class="text-muted" style="font-size: 12px;">Maio 7, 2021 - 1 min leitura</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <a href="https://sorteiogram.com/blog/meu-sorteio-esta-demorando-para-carregar-o-que-eu-faco/"><img src="{{ asset('/images/demora.jpg') }}" class="card-img-top" alt="Porque meu sorteio está demorando tanto?"></a>
                    <div class="card-body">
                      <h5 class="card-title group"> Sorteio está demorando para carregar, o que eu faço?</h5>
                      <p class="card-text">Você não está conseguindo carregar as suas publicações, ou carregar seus comentários?</p>
                    </div>
                    <div class="card-footer">
                      <div class="row">
                        <div class="col-2">
                          <img src="{{ asset('/images/perfil.png') }}" class="rounded" alt="icone de perfil">
                        </div>
                        <div  class="col-9">
                          <div style="font-size: 12px;">Douglas</div>
                          <div class="text-muted" style="font-size: 12px;">Maio 7, 2021 - 1 min leitura</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a href="https://growsocial.com.br/?ref=ads_sorteiogram.com">
                <img src="{{ asset('/images/banner.png') }}" class="img-fluid mt-3" alt="Conheça ferramenta que vai turbinar seu instagram">
              </a>
          </div>
          <br>
          <footer class="mt-auto text-white" style="background: #232323;">
            <div class="container-fluid py-4">
                <div class="row justify-content-center">
                  <div class="col-6 col-lg-4 mb-3">
                    <h6 class="text-secondary">Sites parceiros</h6>
                    <ul class="list-unstyled">
                      <li class="mb-2" ><a href="https://growsocial.com.br/?ref=link_sorteiogram.com" class="links">Ganhe mais seguidores no Instagram</a></li>
                      <li class="mb-2"><a href="https://linkna.bio/?ref=link_sorteiogram.com" class="links">Crie seu Link na Bio</a></li>
                      <li class="mb-2"><a href="https://sorteiotok.com/?ref=link_sorteiogram.com" class="links">Sorteio no Tiktok</a></li>
                    </ul>
                  </div>
                  <div class="col-6 col-lg-3 mb-3">
                    <h6 class="text-secondary">Mapa do Site</h6>
                    <ul class="list-unstyled">
                      <li class="mb-2"><a href="https://chrome.google.com/webstore/detail/sorteiogram/gjpkngahkcdfjnelojifgmdjfocdllne" class="links">Instalar extensão do Google Chrome</a></li>
                      <li class="mb-2"><a href="https://sorteiogram.com/blog/" class="links">Blog</a></li>
                      <li class="mb-2"><a href="mailto:contato@sorteiogram.com?subject=Contato SorteioGram" class="links">Fale conosco</a></li>
                      <li class="mb-2"><a href="https://www.youtube.com/watch?v=yZtFjSrHgVU" class="links">Video de Como realizar Sorteios no Instagram</a></li>
                    </ul>
                  </div>
                </div>
                <div class="text-center text-secondary"> Todos os direitos reservados. SorteioGram 2021</div>
              </div>
          </footer>
        </body>
</html>
