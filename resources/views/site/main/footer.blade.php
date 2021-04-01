<?php
    $empresa = exibirInfoEmpresa();
    $telefones = exibirTelefone();
?>
</body>

<!-- RODAPÉ -->
<footer class="rodape-footer container-footer">
    <div class="col-md-1 fh5co-widget">
        <a href="/"><img class="img-rodape" src="{{ asset('images/logonovoar.png') }} "></a>

        <p>
            A Solução Ideal Para Sua Empresa!
            Trabalhamos com Climatizadores Industriais e Comerciais</p>
    </div>

    <div class="col-md-2">
        <ul>
            <li><a href="{{ route('institucional') }}">Quem somos</a></li>
            <li><a href="{{ route('produtos') }}">Produtos</a></li>
            <li><a href="">Contatos</a></li>
            <li><a href="">Termos de uso</a></li>
        </ul>
    </div>

    <div class="col-md-3">
        <ul>
            @if ($telefones)
                @foreach ($telefones as $phone )
                    <li>
                        <i class="fa fa-phone"></i>
                        <a href="tel:55{{ formatPhone($phone->telefone) }}">{{ $phone->telefone }} </a>
                    </li>
                @endforeach
            @endif
            @if ($empresa->whatsapp)
                <li>
                    <i class="fa fa-whatsapp"></i>
                    <a target="_blank" href="https://web.whatsapp.com/send?phone=55{{ formatPhone($empresa->whatsapp) }}&amp;text=Olá, tenho interesse!">{{ $empresa->whatsapp }}</a>
                </li>
            @endif

            @if ($empresa->email)
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:novoarclimatizadores@gmail.com">{{ $empresa->email }}</a>
                </li>
            @endif

        </ul>
    </div>
        <div class="col-md-4">
            <ul>
                <i class="fa fa-map"></i>
                <a href="">
                    {{ $empresa->endereco }}<br>
                    {{ $empresa->cidade }}<br>
                </a>
            </ul>
        </div>
    </div>
    <div class="col-md-5 text-center">


        <p>
            <small class="block">© 2020  TODOS OS DIREITOS RESERVADOS - NOVO AR CLIMATIZADORES </small>
            <small class="block">DESENVOLVIDO POR -  ALBERCAMP SOFTWARE </small>
        </p>

    </div>
</footer>


    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('assests/site/js/main.js')}}"></script>

    {{-- Banner js --}}
    <script type="text/javascript" src="{{asset('assests/site/js/minimalist-slider/assets/js/jquery.minimal-plugins.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assests/site/js/minimalist-slider/assets/js/jquery.minimalist-banner.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assests/site/js/slider/js/jquery.nivo.slider.js')}}"></script>
    <script type="text/javascript" src="{{asset('assests/site/js/slider/home.js')}}"></script>

    <script type="text/javascript" src="{{asset('assests/site/galleria/dist/galleria.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assests/site/galleria/dist/themes/miniml/galleria.miniml.min.js')}}"></script>


