@include('site.main.header')


        <!-- BANNER'S-->
        @if (count($banner) > 0)
            <div class="slider-area slider-one-style banner">
                <div class="bend niceties preview-1">
                    <div id="ensign-nivoslider-3" class="slides">
                            @for ($i = 0; $i < count($banner); $i++)
                                <a href="{{ $banner[$i]->url ? $banner[$i]->url : '' }}"  target="{{$banner[$i]->target_page == 1 ?"_self":"_blank"}}" title="{{ $banner[$i]->title }}">
                                    <img src="{{ urlImg() .  $banner[$i]-> imagem}}" alt="{{ $banner[$i]->title }}" />
                                </a>
                            @endfor
                    </div>
                </div>
            </div>
        @endif


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

    <!-- Benefícios -->
        <div class="fusion-beneficios container-nav">
            <div class="fusion-text">
                <h1>Benefícios</h1>
                <dd></dd>
            </div>
            <div class="fusion-paragrafo">
                <p>Diminuir a temperatura sem gastar tanta
                    energia elétrica? Que tal fazer isso com
                    climatizadores tecnológicos que gastam
                    90% menos energia elétrica?!
                </p>
            </div>

            <div class="fusion-circulo">
                <ul class="circuloul">
                    <li>
                        <img src="images/90.png">
                    </li>
                    <li>
                        <img src="images/temperatura.png" >
                    </li>
                    <li>
                        <img src="images/ruido.png" >
                    </li>
                    <li>
                        <img src="images/eficiencia.png">
                    </li>
                </ul>
            </div>

            <div class="fusion-img">
                <img src="images/ar.png" alt="">
            </div>
        </div>



    {{-- <!-- NEWSLETTER -->
    <section class="newsletter container-footer bg-black">
        <h2> Inscreva-se agora! </h2>
        <h3> Receba novidades, dicas e muito mais </h3>
        <form>
            <input class="bg-black radius" type="email" name="email" placeholder="Seu email">
            <button class="bg-white radius"> Cadastrar </button>
        </form>
    </section> --}}



@include('site.main.footer')
