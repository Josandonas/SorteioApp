@extends('layouts.app')
@section('content')
<div class="container mt-5 col-12">
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Fale Conosco <i class="icofont-envelope"></i></i></h1>
        </div>
        <div class="card-body text-center">
            <b>Entre em contato conosco pelo email: <a href="mailto:contato@sorteiogram.com?subject=Contato SorteioGram">contato@sorteiogram.com</a></b>
            <br>
            <p>Por favor, em caso de algum problema com a plataforma, informe seu Instagram e URL da publicação de sorteio.</p>
        </div>
    </div>
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
@endsection