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
    
        div
    
        <!-- SERVIÇOS -->
        <main class="servicos container">

            <article class="servico bg-white radius">
                <a href="#"><img src="images/criacoes.jpg" alt="Campanhas publicitárias"></a>
                <div class="inner">
                    <a href=""> Campanhas publicitárias </a>
                    <h4>Impressos, VTs e Jingles</h4>
                    <p>Se voccê está precisando de criação de algum material em específico, conte com a nossa equipe de profissionais.Eles farão toda campanha publicitária. Vt, outdoor, folder, anúncio e muito mais pela sua empresa no mais alto padrão de qualidade.</p>
                </div>
            </article>

            <article class="servico bg-white radius">
                <a href="#"><img src="images/md.jpg" alt="Marketing digital"></a>
                <div class="inner">
                    <a href=""> Marketing digital </a>
                    <h4>Adiministração de Redes Sociais</h4>
                    <p>Como agência de publicidade aplicamos estratégias nos meios
                    digitais para que o seu negócio seja visto por milhões de usuários.
                    O Brasil é o 5° país mais conectado do mundo. Por este motivo, o seu 
                    negócio não pode ficar de fora do mercade digital.
                    </p>
                </div>
            </article>

            <article class="servico bg-white radius">
                <a href="#"><img src="images/cs.jpg" alt="Criação de Sites"></a>
                <div class="inner">
                    <a href=""> Criação de Sites </a>
                    <h4> Sites Administráveis </h4>
                    <p>Agora você pode administrar seu site quando e como quiser.
                    E melhor ainda pois você pode pagar por este serviço, pois desenvolvemos
                    de forma prática. Seu site atualizado, com seus últimos 
                    produtos , integração com redes sociais, agora é possível.
                    </p>
                </div>
            </article>
        </main>
    
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
