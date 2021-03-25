@include('site.main.header')

    <div class="name-produto-text">
        <h1 class="name-produto">{{ $produto->title }}</h1>
    </div>

    <div class="product">
        <div class="container-product">
            <div class="row-product">
                <div class="imagem-product">
                    <div class="prod-imagem" id="galleria-azur">
                        <img src="{{ asset('images/product1.png') }}" alt="">
                        <img src="{{ asset('images/product1.png') }}" alt="">
                        <img src="{{ asset('images/product1.png') }}" alt="">
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
             <div class="row-descricao">
                <div class="ficha">
                    <div class="text-ficha">
                        <div class="titulo-text">
                            <h2>Ficha Técnica</h2>
                        </div>
                        <div class="valor-text">
                            <p>
                                <strong> Vazão de Ar: </strong>
                            </p>
                            <p>18.00m³/h</p>
                        </div>
                        <div class="valor-text">
                            <p>
                                <strong> Motor: </strong>
                            </p>
                            <p>1cv 220v</p>
                        </div>
                        <div class="valor-text">
                            <p>
                                <strong> Consumo elétrico: </strong>
                            </p>
                            <p>8,84 KW/h</p>
                        </div>
                        <div class="valor-text">
                            <p>
                                <strong> Abertura de parede: </strong>
                            </p>
                            <p>82X82cm</p>
                        </div>
                        <div class="valor-text">
                            <p>
                                <strong> Reservatório / peso seco: </strong>
                            </p>
                            <p>18L / 89kg</p>
                        </div>
                    </div>
                    <div class="descrition">
                        <div class="titulo-descrit">
                            <h2> Descrição </h2>
                        </div>
                        <div class="text-descrit">
                            <p>Climatizador evaporativo de porte industrial, abrange uma extensa área de climatização e resfriamento. Ideal para ambientes grandes</p>
                        </div>
                        <div class="titulo-descrit">
                            <h2> Porque escolher a Novo Ar </h2>
                        </div>
                        <div class="text-descrit">
                            <p>Tecnologia inovadora no mercado, a Novo Ar oferece os melhores climatizadores tecnológicos para que você possa aproveitar seus benefícios em qualquer lugar. Desde uma loja, empresa, na igreja e até na sua casa!</p>
                        </div>
                        <div class="titulo-descrit">
                            <h2> Vantagens do climatizador Novo Ar </h2>
                        </div>
                        <div class="text-descrit">
                            <p>São muitas as vantagens dos climatizadores Novo Ar, confira!</p>
                        </div>
                        <div class="itens-descrit">
                            <ul>
                                <li>
                                   Redução de até 12 graus a temperatura do ambiente;
                                </li>
                                <li>
                                    Economia de até 90% de energia em relação ao ar-condicionado;
                                </li>
                                <li>
                                    Resfria e umidifica o estabelecimento sem arrastar água;
                                </li>
                                <li>
                                    Hélice especial que garante ruído baixíssimo;
                                </li>
                                <li>
                                    Aço Inox® em toda estrutura;
                                </li>
                                <li>
                                    Não precisa fechar portas e janelas;
                                </li>
                                <li>
                                    Fácil limpeza e manutenção.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
@include('site.main.footer')
