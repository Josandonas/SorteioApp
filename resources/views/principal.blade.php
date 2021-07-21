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
                    <a class="nav-link active" href="#"><i class="icofont-puzzle"></i> Instalar extensão</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="container mt-5 col-8">
              <div class="card"> 
                  <div class="card-header"> <h1 class="card-title">Sorteio no Instragram <i class="icofont-instagram"></i></h1></div>
                  <div class="card-body"> 
                      <div class="alerta alerta-amarelo">
                        <img src="{{ asset('/images/chrome.png') }}" style="width: 24px">
                        <a>Instale a extensão do SorteioGram para carregar mais rápido.<u>Clique aqui.</u>  </a>
                      </div>
                      <div class="box btn-red">
                          <button type="button" class="btn btn-lg btn-block text-white font-btn" style="width: 80%; text-align:left;">&nbsp; Realizar Sorteio </button> <i class="icofont-group icofont-3x elemento-orange"></i>
                      </div>
                      <div class="box btn-blue mt-2">
                        <button type="button" class="btn btn-lg btn-block text-white font-btn" style="width: 80%; text-align:left;">&nbsp; Tutorial: Como fazer um Sorteio no Instagram </button> <i class="icofont-youtube-play icofont-3x elemento-blue"></i>
                      </div>                   
                  </div>
              </div>
              <div class="card mt-4">
                <div class="card-header"> <h1 class="card-title">Sorteador Relâmpago <i class="icofont-thunder-light"></i></h1></div>
                <div class="card-body">
                  <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                      <div class="card h-100">
                        <img src="{{ asset('/images/names.jpg') }}" class="card-img-top" alt="Porque vincular o instagram ao Facebook?">
                        <div class="card-body">
                          <h5 class="card-title">Sorteio de Nomes</h5>
                          <p class="card-text">Que tal realizar um sorteio de nomes rápido?</p>
                          <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                  Saiba Mais <i class="icofont-info-circle"></i>
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <strong>Intruções:</strong>
                                  <ol class="list-group list-group-numbered">
                                    <li class="list-group-item">Informe quantos nomes você quer no resultado do sorteio. Exemplo: 2</li>
                                    <li class="list-group-item">Insira os nomes que você quer sortear separando por vírgula ( <strong>,</strong> )</li>
                                    <li class="list-group-item">Clique em <strong>Realizar Sorteio</strong>. Pronto!</li>
                                  </ol>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <button style="width: 100%" type="button" class="btn btn-lg text-white btn-sorteador" data-bs-toggle="modal" data-bs-target="#modalNome">
                            Sortear <i class="icofont-abc icofont-2x"></i>
                          </button>
                          <!-- Modal -->
                          <div class="modal fade" id="modalNome" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header text-white" style="background-color: #fd7c59">
                                  <h5 class="modal-title" id="modalNome">Sorteio de Nomes <i class="icofont-abc icofont-1x"></i></h5>
                                  <button type="button" data-bs-dismiss="modal" class="btn btn-modal"><i class="icofont-close icofont-2x text-white"></i></button>
                                </div>
                                <div class="modal-body" style="background-color: #c6d9f0;">
                                  <div class="mb-3">
                                    <div class="mb-3">
                                      <label for="formGroupExampleInput" class="form-label">Digite a quantidade de resultados:</label>
                                      <input required="required" type="number" class="form-control" id="formGroupExampleInput" min="0" placeholder="1">
                                    </div>
                                    <label for="exampleFormControlTextarea1" class="form-label">Digite os nomes separando por vírgula: </label>
                                    <textarea required="required" class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Exemplos: Fulano, Cicrano, assim por diante..."></textarea>
                                  </div>
                                </div>
                                <div class="modal-footer btn-modal-fotter" >
                                    <button type="button" class="btn btn-lg btn-modal text-white" style="background-color: #fd7c59; width: 100%;">Realizar Sorteio <i class="icofont-tick-mark"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="{{ asset('/images/numbers.jpg') }}" class="card-img-top" alt="Porque vincular o instagram ao Facebook?">
                        <div class="card-body">
                          <h5 class="card-title">Sorteio de Números</h5>
                          <p class="card-text">Que tal realizar um sorteio de números rápido?</p>
                          <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Saiba Mais <i class="icofont-info-circle"></i>
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <strong>Intruções:</strong>
                                  <ol class="list-group list-group-numbered">
                                    <li class="list-group-item">Informe quantos números você quer no resultado do sorteio. Exemplo: 3</li>
                                    <li class="list-group-item">Preencha qual o intervalo deve ser sorteado. Exemplo: Entre 1 e termina em 100</li>
                                    <li class="list-group-item">Clique em <strong>Realizar Sorteio</strong>. Pronto!</li>
                                  </ol>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <button style="width: 100%" type="button" class="btn btn-lg text-white btn-sorteador" data-bs-toggle="modal" data-bs-target="#modalNumero">
                            Sortear <i class="icofont-substitute icofont-2x"></i>
                          </button>
                          <!-- Modal -->
                          <div class="modal fade" id="modalNumero" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header text-white" style="background-color: #fd7c59">
                                  <h5 class="modal-title" id="modalNumero">Sorteio de Números <i class="icofont-substitute icofont-1x"></i></h5>
                                  <button type="button" data-bs-dismiss="modal" class="btn btn-modal"><i class="icofont-close icofont-2x text-white"></i></button>
                                </div>
                                <div class="modal-body" style="background-color: #c6d9f0;">
                                  <div class="mb-3">
                                    <div class="mb-3">
                                      <label for="formGroupExampleInput" class="form-label">Digite a quantidade de resultados:</label>
                                      <input required="required" type="number" class="form-control" id="formGroupExampleInput" min="0" placeholder="1">
                                    </div>
                                    <div class="mb-3">
                                      <label for="formGroupExampleInput" class="form-label">Entre:</label>
                                      <input required="required" type="number" class="form-control" id="formGroupExampleInput" min="0" placeholder="1">
                                    </div>
                                    <div class="mb-3">
                                      <label for="formGroupExampleInput" class="form-label">e termina em:</label>
                                      <input required="required" type="number" class="form-control" id="formGroupExampleInput" min="0" placeholder="1">
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer btn-modal-fotter" >
                                    <button type="button" class="btn btn-lg btn-modal text-white" style="background-color: #fd7c59; width: 100%;">Realizar Sorteio <i class="icofont-tick-mark"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 -3">
                <div class="col">
                  <div class="card h-100">
                    <img src="{{ asset('/images/gratis.jpg') }}" class="card-img-top" alt="Como realizar um sorteio gratis">
                    <div class="card-body">
                      <h5 class="card-title group">Como fazer sorteio grátis?</h5>
                      <br>
                      <p class="card-text">Você sabe como realizar um sorteio gratuitamente no Sorteiogram? 🤨</p>
                    </div>
                    <div class="card-footer">
                      <div class="row">
                        <div class="col-2">
                          <img src="{{ asset('/images/perfil.png') }}" class="rounded" alt="icone de perfil">
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
                    <img src="{{ asset('/images/ellen.png') }}" class="card-img-top" alt="Porque vincular o instagram ao Facebook?">
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
                    <img src="{{ asset('/images/demora.jpg') }}" class="card-img-top" alt="Porque meu sorteio está demorando tanto?">
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
              <img src="{{ asset('/images/banner.png') }}" class="img-fluid mt-3" alt="Conheça ferramenta que vai turbinar seu instagram">
          </div>
          <br>
          <footer class="mt-auto text-white" style="background: #232323;">
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
