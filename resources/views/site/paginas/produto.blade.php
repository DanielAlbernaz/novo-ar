@include('site.main.header')

    <div class="name-produto-text">
        <h1 class="name-produto">Climatizador NA202 C</h1>
    </div>

    <div class="product">
        <div class="container-product">
            <div class="row-product">
                <div class="imagem-product">
                    <div class="prod-imagem">
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
                </div>
             </div>
        </div>
    </div>    
@include('site.main.footer')