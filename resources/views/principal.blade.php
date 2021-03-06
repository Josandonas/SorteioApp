@extends('layouts.app')
@section('content')
<div class="container mt-5 col-12">
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Sorteio no Instragram <i class="icofont-instagram"></i></h1>
        </div>
        <div class="card-body">
            <div class="alerta alerta-amarelo">
                <img src="{{ secure_asset('/images/chrome.png') }}" style="width: 24px">
                <a class="letras-chrome" href="https://chrome.google.com/webstore/detail/sorteiogram/gjpkngahkcdfjnelojifgmdjfocdllne?hl=pt-BR">Instale a extensão do SorteioGram para carregar mais rápido.
                    <u>Clique aqui.</u>
                </a>
            </div>
            <div class="box btn-red">
                <div type="button" class="btn btn-lg btn-block text-white font-btn">&nbsp; Realizar Sorteio </div> <i class="icofont-group icofont-3x elemento-orange"></i>
            </div>
            <div class="box btn-blue mt-2">
                <div type="button" class="btn btn-lg btn-block text-white font-btn">&nbsp; Tutorial: Como fazer um Sorteio no Instagram </div> <i class="icofont-youtube-play icofont-3x elemento-blue"></i>
            </div>
        </div>
    </div>
    @if($resultadoNomes != null)
    <div class="card text-center mt-4">
        {{-- @if ($message = Session::get('success'))
          <div class="alert alert-primary" role="alert">
              {{ $message }}
    </div>
    @endif --}}
    <div class="card-header">
        <h2><i class="icofont-award"></i> Resultado <i class="icofont-award"></i></h2>
    </div>
    <div class="card-body">
        <h1 class="resultado">
            {{-- @foreach($resultadoNomes as $nomes) --}}
            {{$resultadoNomes}}
            {{-- @endforeach --}}
        </h1>
        <a href="/" class="btn btn-sorteador mt-4 text-white">Novo Sorteio <i class="icofont-ui-reply"></i></a>
    </div>
</div>
@elseif($resultadoNumero != null)
<div class="card text-center mt-4">
    {{-- @if ($message = Session::get('success'))
          <div class="alert alert-primary" role="alert">
              {{ $message }}
</div>
@endif --}}
<div class="card-header">
    <h2><i class="icofont-award"></i> Resultado <i class="icofont-award"></i></h2>
</div>
<div class="card-body">
    <h1 class="resultado">{{$resultadoNumero}}</h1>
    <a href="/" class="btn btn-sorteador mt-4 text-white">Novo Sorteio <i class="icofont-ui-reply"></i></a>
</div>
</div>
@else
<div class="card mt-4">
    <div class="card-header">
        <h1 class="card-title">Sorteador Relâmpago <i class="icofont-thunder-light"></i></h1>
    </div>
    <div class="card-body">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="{{ secure_asset('/images/names.jpg') }}" class="card-img-top" alt="Porque vincular o instagram ao Facebook?">
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
                                            <li class="list-group-item">Insira os nomes que você quer sortear separando por vírgula.</li>
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
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ secure_asset('/images/numbers.jpg') }}" class="card-img-top" alt="Porque vincular o instagram ao Facebook?">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<div class="row row-cols-1 row-cols-md-3 g-4 mt-3 -3">
    <div class="col">
        <div class="card h-100">
            <a href="https://sorteiogram.com/blog/como-fazer-sorteio-gratis/"><img src="{{ secure_asset('/images/gratis.jpg') }}" class="card-img-top" alt="Como realizar um sorteio gratis"></a>
            <div class="card-body">
                <h5 class="card-title group">Como fazer sorteio grátis?</h5>
                <br>
                <p class="card-text">Você sabe como realizar um sorteio gratuitamente no Sorteiogram? 🤨</p>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-2">
                        <a href="https://sorteiogram.com/blog/como-fazer-sorteio-gratis/"><img src="{{ secure_asset('/images/perfil.png') }}" class="rounded" alt="icone de perfil"></a>
                    </div>
                    <div class="col-9">
                        <div style="font-size: 12px;">Douglas</div>
                        <div class="text-muted" style="font-size: 12px;">Maio 7, 2021 - 25 seg leitura</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <a href="https://sorteiogram.com/blog/por-que-vincular-o-instagram-ao-facebook/"><img src="{{ secure_asset('/images/ellen.png') }}" class="card-img-top" alt="Porque vincular o instagram ao Facebook?"></a>
            <div class="card-body">
                <h5 class="card-title group">Por que vincular o Instagram ao Facebook?</h5>
                <p class="card-text">Se você chegou até aqui, provavelmente deve ter algumas dúvidas.</p>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-2">
                        <img src="{{ secure_asset('/images/perfil.png') }}" class="rounded" alt="icone de perfil">
                    </div>
                    <div class="col-9">
                        <div style="font-size: 12px;">Douglas</div>
                        <div class="text-muted" style="font-size: 12px;">Maio 7, 2021 - 1 min leitura</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <a href="https://sorteiogram.com/blog/meu-sorteio-esta-demorando-para-carregar-o-que-eu-faco/"><img src="{{ secure_asset('/images/demora.jpg') }}" class="card-img-top" alt="Porque meu sorteio está demorando tanto?"></a>
            <div class="card-body">
                <h5 class="card-title group"> Sorteio está demorando para carregar, o que eu faço?</h5>
                <p class="card-text">Você não está conseguindo carregar as suas publicações, ou carregar seus comentários?</p>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-2">
                        <img src="{{ secure_asset('/images/perfil.png') }}" class="rounded" alt="icone de perfil">
                    </div>
                    <div class="col-9">
                        <div style="font-size: 12px;">Douglas</div>
                        <div class="text-muted" style="font-size: 12px;">Maio 7, 2021 - 1 min leitura</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="https://growsocial.com.br/?ref=ads_sorteiogram.com">
    <img src="{{ secure_asset('/images/banner.png') }}" class="img-fluid mt-3" alt="Conheça ferramenta que vai turbinar seu instagram">
</a>
</div>

<!-- Modal -->
<div class="modal fade" id="modalNumero" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form method="POST" action="/sortNumero">
            @csrf
            <div class="modal-content">
                <div class="modal-header text-white" style="background-color: #fd7c59">
                    <h5 class="modal-title" id="modalNumero">Sorteio de Números <i class="icofont-substitute icofont-1x"></i></h5>
                    <button type="button" data-bs-dismiss="modal" class="btn btn-modal"><i class="icofont-close icofont-2x text-white"></i></button>
                </div>
                <div class="modal-body" style="background-color: #c6d9f0;">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Digite a quantidade de resultados:</label>
                            <input name="quantidade" required="required" type="number" class="form-control" min="1" placeholder="1">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Começa em:</label>
                            <input name="inicial" required="required" type="number" class="form-control" min="1" placeholder="1">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Termina em:</label>
                            <input name="final" required="required" type="number" class="form-control" min="1" placeholder="100">
                        </div>
                    </div>
                </div>
                <div class="modal-footer btn-modal-fotter">
                    <button type="submit" class="btn btn-lg btn-modal text-white" style="background-color: #fd7c59; width: 100%;">Realizar Sorteio <i class="icofont-tick-mark"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalNome" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form method="POST" action="/sortNome">
            @csrf
            <div class="modal-content">
                <div class="modal-header text-white" style="background-color: #fd7c59">
                    <h5 class="modal-title" id="modalNome">Sorteio de Nomes <i class="icofont-abc icofont-1x"></i></h5>
                    <button type="button" data-bs-dismiss="modal" class="btn btn-modal"><i class="icofont-close icofont-2x text-white"></i></button>
                </div>
                <div class="modal-body" style="background-color: #c6d9f0;">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Digite a quantidade de resultados:</label>
                            <input name="quantidade" required="required" type="number" class="form-control" id="formGroupExampleInput" min="0" placeholder="1">
                        </div>
                        <label for="exampleFormControlTextarea1" class="form-label">Digite os nomes separando por vírgula: </label>
                        <textarea name="nomes" required="required" type="text" class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Exemplos: Fulano, Cicrano, assim por diante..."></textarea>
                    </div>
                </div>
                <div class="modal-footer btn-modal-fotter">
                    <button type="submit" class="btn btn-lg btn-modal text-white" style="background-color: #fd7c59; width: 100%;">Realizar Sorteio <i class="icofont-tick-mark"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
