@include('site.main.header')

	<div class="migalhaMBI imgMigalha" style="background-size: cover; background-image: url('images/home.jpg');">
		<h1>QUEM SOMOS</h1>
	</div>

		<!-- About page one start here -->
		<div class="about-page-one-area">
			<div class="contai">
				<!-- video institucional -->
				

				<h3>
					Tradição e qualidade desde 1999 o Grupo Lion está fixado no mercado com segmento fitness sendo graduada hoje a uma das maiores empresas nacionais no segmento. <br>
					
					Diante da necessidade cada vez maior das academias de climatizar seu espaço com eficiência e oferecer bem-estar aos seus alunos, a empresa começa a estudar os melhores produtos internacionais para oferecer uma opção melhor e mais viável ao ar condicionado mantendo o custo baixo operacional. <br>
					
					Contando com a alta capacidade de processo produtivo nasce então a marca Lion Clima. É então que começa a fabricar climatizadores de ambiente que surge como opção mais econômica e eficiente ao ar condicionado e abrangendo não só academias, mas também qualquer tipo de ambiente seja ele industrial, comercial, festas ou agrícolas. <br>
					
					Hoje a Lion atua com 2 unidades, uma em Valentim Gentil localizada no interior de São Paulo, e a outra em Paranaíba em Mato Grosso do Sul, gerando mais de 200 empregos diretos, fortalecendo a economia das respectivas regiões.
					
				</h3>
			
				<!--/fim video institucional -->
				
				
				<div class="row row-flex">
					
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
						<div class="about-content">
							<h2 class="title-bar">Novo Ar </h2>
							<p class="style-bar">
								Há anos promovendo o bem estar a todos.                        </p>
							<p class="style-bar">						
								<strong>R. 60, 25 -St. oeste, Goiânia - Go, 74.253-115</strong><br/>
								<a class="tel-bar" href="tel:556240088844"><strong>Vendas: (62) 3568-2569</strong></a><br/>
								<a class="tel-bar" href="tel:556240088877"><strong>Aluguel: (62) 3654-8546</strong></a><br/>

														
							</p>
							
						</div>
					</div>
	
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">                    
						<img class="img-responsive" src="images/product1.png" alt="video">                                           
					</div>
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div  style="border-bottom:#EFEFEF 1px solid; height: 1px; width: 97%; margin: auto; margin-top: 35px; margin-bottom: 35px;"></div>
					</div>
				</div>
				
			</div>
    	</div>
    <!-- About page one End here -->
    
<div class="clearfix"></div>    
    
<div class="contai">
	<div class="row">
	   <!-- Mensagem -->
		
		<!--/fim Mensagem -->
		<!-- Formulário -->
		<div class="col-md-12">
			<section id="contact">
				<h4 class="headline margin-bottom-35">Fale Conosco</h4>
				<div id="contact-message"></div> 
				<form method="post" action="javascript:;" name="frmContato" id="frmContato" autocomplete="on">
					<!-- nome -->
					<div>
						<input class="inputLogin validate[required]" name="name" type="text" id="name" placeholder="Nome" required="required" />
					</div>
					<div class="row">
						<div class="col-md-6">
							<!-- email -->
							<div>
								<input name="email" type="email" id="email" placeholder="E-mail" required="required" class="inputLogin validate[required,custom[email]]" />
							</div>
						</div>
						<div class="col-md-6">
        					<!-- Telefone -->
        					<div>
        						<input class="inputLogin sp_celphones" name="telefone" type="text" id="telefone" placeholder="Telefone" required="required" />
        					</div>
						</div>
					</div>
					<!-- Mensagem -->
					<div>
						<textarea class="inputLogin validate[required]" name="mensagem" cols="40" rows="3" id="mensagem" placeholder="Mensagem" spellcheck="true" required="required"></textarea>
					</div>

					<label>
                        <span class="text-input">
                            <div class="g-recaptcha" data-sitekey="6Lc01FAUAAAAABKdj75TTulyB5c8lTOx-X947lmC"></div><br/>
                        </span>
                    </label>
					<input type="submit" class="submit button" id="submit" value="ENVIAR" />
				</form>
			</section>
		</div>
		<!--/fim Formulário -->
	</div>
</div>    
<div class="margin-bottom-40"></div>       <!--/FIM INTERNAS  --> 




@include('site.main.footer')
