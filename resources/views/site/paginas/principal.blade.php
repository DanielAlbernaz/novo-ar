@include('site.main.header')


        <!-- BANNER'S-->
        {{-- <div class=" container-nav" style="background: url('images/banner-tecnologia1.jpg') no-repeat fixed;">

        </div> --}}
        <div class="slider-area slider-one-style banner">
            <div class="bend niceties preview-1">
                <div id="ensign-nivoslider-3" class="slides">

                        <a href="" target="_blank" title="taça">
                            <img src="images/banner1.png" alt="taça" />
                        </a>

                        <a href="" target="_blank" title="Patrocinadores">
                            <img src="images/banner.png" alt="Patrocinadores" />
                        </a>

                </div>
            </div>
        </div>

        <!-- Separador -->
        <div class="text-produtos">
            <div class="nossos-produtos">
                <h1>Conheça nossos produtos</h1>
                <div class="separador"></div>
            </div>
        </div>


        <!-- SERVIÇOS -->
        <main class="servicos container">

            <article class="produto bg-white radius">
                <a href="#"><img src="images/product1.png" alt="NAC02 C"></a>
                <div class="inner">
                    <h2> Climatizador NAC02 C</h2>
                    <a href=""><button class="saiba-mais">  Saiba [+]  </button></a>
                </div>
            </article>

            <article class="produto bg-white radius">
                <a href="#"><img src="images/product2.png" alt="CT305 T"></a>
                <div class="inner">
                    <h2> Climatizador CT305 T </h2>
                    <a href=""><button class="saiba-mais">  Saiba [+]  </button></a>
                </div>
            </article>

            <article class="produto bg-white radius">
                <a href="#"><img src="images/product1.png" alt="NAC02 C"></a>
                <div class="inner">
                    <h2> Climatizador NAC02 C</h2>
                    <a href=""><button class="saiba-mais">  Saiba [+]  </button></a>
                </div>
            </article>

            <article class="produto bg-white radius">
                <a href="#"><img src="images/product2.png" alt="CT305 T"></a>
                <div class="inner">
                    <h2> Climatizador CT305 T </h2>
                    <a href=""><button class="saiba-mais">  Saiba [+]  </button></a>
                </div>
            </article>

            <article class="produto bg-white radius">
                <a href="#"><img src="images/product3.png" alt="BT202 N"></a>
                <div class="inner">
                    <h2> Climatizador BT202 N</h2>
                    <a href=""><button class="saiba-mais">  Saiba [+]  </button></a>
                </div>
            </article>

            <article class="produto bg-white radius">
                <a href="#"><img src="images/product3.png" alt="BT202 N"></a>
                <div class="inner">
                    <h2> Climatizador BT202 N</h2>
                    <a href=""><button class="saiba-mais">  Saiba [+]  </button></a>
                </div>
            </article>
        </main>

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
                <ul>
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

        

    <!-- NEWSLETTER -->
    <section class="newsletter container-footer bg-black">
        <h2> Inscreva-se agora! </h2>
        <h3> Receba novidades, dicas e muito mais </h3>
        <form>
            <input class="bg-black radius" type="email" name="email" placeholder="Seu email">
            <button class="bg-white radius"> Cadastrar </button>
        </form>
    </section>



@include('site.main.footer')
