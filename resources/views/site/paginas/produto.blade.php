@include('site.main.header')

    <div class="name-produto-text">
        <h1 class="name-produto">{{ $produto->title }}</h1>
    </div>



    <div class="product">
        <div class="container-product">
            <div class="row-product">
                <div class="imagem-product">
                <div class="prod-imagem" id="galleria-azur">

                    <div class="col-lg-8 col-md-7" style=" width: 100%; ">
                        <div class="col-md-12">

                             <!-- Slider -->
                        <div class="property-slider default">
                            @for ($i = 0; $i < count($galeria); $i++)
                                <a    href="{{ urlImg() . $galeria[$i]->imagem }}" data-background-image="{{ urlImg() . $galeria[$i]->imagem }}" class="item mfp-gallery"></a>

                            @endfor
                        </div>

                        <!-- Slider Thumbs -->
                        <div  class="property-slider-nav">
                            @for ($i = 0; $i < count($galeria); $i++)
                                <div class="item" ><img style="width: 100%"   src="{{ urlImg() . $galeria[$i]->imagem }}"  height="100" class="fotoImgP"  alt=""></div>
                            @endfor


                        </div>
                    </div>

                </div>

                </div>
                <div class="row-formulario">
                    <div class="contain-form">
                        <h1>Solicitar Orçamento</h1>
                        <form action="">
                            <input type="text" class="form-control name-mask" name="username" maxlength="30" placeholder="Nome">
                            <input type="text" class="form-control phone-ddd-mask" name="phone" maxlength="11" placeholder="Fone/Celular com DDD">
                            <input type="text" class="form-control email-mask" name="email" maxlength="20" placeholder="E-mail">
                            <input type="text" class="form-control cidade-mask" name="cidade" maxlength="20" placeholder="Cidade">
                            <input type="text" class="form-control mensagem-mask" name="mensagem" maxlength="100" placeholder="Mensagem">
                            <button type="submit" class="form-control enviar-mask">Enviar</button>
                        </form>
                    </div>
                </div>
             </div>
             <div class="row-descricao" >
                <div class="ficha">
                    <div class="text-ficha">
                        <div class="titulo-text">
                            <h2>Ficha Técnica</h2>
                        </div>
                        <div class="valor-text">
                            <p>
                                <strong> Vazão de Ar: </strong>
                            </p>
                            <p>{{ $produto->vazao ? $produto->vazao : ''}}</p>
                        </div>
                        <div class="valor-text">
                            <p>
                                <strong> Motor: </strong>
                            </p>
                            <p>{{ $produto->motor ? $produto->motor : '' }}</p>
                        </div>
                        <div class="valor-text">
                            <p>
                                <strong> Consumo elétrico: </strong>
                            </p>
                            <p>{{ $produto->consumo ? $produto->consumo : '' }}</p>
                        </div>
                        <div class="valor-text">
                            <p>
                                <strong> Abertura de parede: </strong>
                            </p>
                            <p>{{ $produto->abertura ? $produto->abertura : '' }}</p>
                        </div>
                        <div class="valor-text">
                            <p>
                                <strong> Reservatório / peso seco: </strong>
                            </p>
                            <p>{{ $produto->reservatorio ? $produto->reservatorio : '' }}</p>
                        </div>
                    </div>
                    <div class="descrition">
                        {{-- <div class="titulo-descrit">
                            <h2> Descrição </h2>
                        </div> --}}
                        {!! $produto->text !!}



                    </div>
                </div>
             </div>
        </div>
    </div>

@include('site.main.footer')
<script>
    (function() {
        Galleria.run('#galleria-azur', {
        transition: 'fadeslide'
        });
    }());
</script>
