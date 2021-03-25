@include('site.main.header')


<!-- Separador -->
@if (count($produto) > 0)
<div class="text-produtos">
    <div class="nossos-produtos">
        <h1>Conheça nossos produtos</h1>
        <div class="separador"></div>
    </div>
</div>

<!-- SERVIÇOS -->
<main class="servicos container">
    @for ($i = 0; $i < count($produto); $i++)
        <article class="produto bg-white radius">
            <a href="produto/{{ $produto[$i]->id }}"><img src="{{ urlImg() .  $produto[$i]-> imagem}}" alt="{{ $produto[$i]->title }}"></a>
            <div class="inner">
                <a href="produto/{{ $produto[$i]->id }}">
                    <h2>{{ $produto[$i]->title }}</h2>
                </a>
                <a href="produto/{{ $produto[$i]->id }}"><button class="saiba-mais">  Saiba Mais  [+]  </button></a>
            </div>
        </article>
        @endfor
</main>
@endif


@include('site.main.footer')
