<?php
    $empresa = exibirInfoEmpresa();
    $telefones = exibirTelefone();
?>
</body>

<footer class="footer">
	<!-- Main -->
    <div class="container-footer">
		<div class="row foot-cont">
			<div class="col-md-4 col-sm-12 margin-top-col-1">
				<img class="footer-logo" src="images/logonovoar.png" alt="">
				<br><br>

				<ul class="footer-links">
					<li><a href="#">Quem Somos</a></li>
					<li><a href="#">Produtos</a></li>
					<li><a href="#">Instalações</a></li>
					<li><a href="#">Contato</a></li>
				</ul>


			</div>

			<div class="col-md-4 col-sm-12 margin-top-col ">
				<h4>Central de atendimento</h4>
				<ul class="footer-links">
					<li><a href="#">Atendimento por email</a></li>
					<li><a href="#">Atendimento Online</a></li>
					<li><a href="#">Atendimento Whatsapp</a></li>
					<li><a href="#">Ligamos para você</a></li>
				</ul>				
			</div>		

			<div class="col-md-4  col-sm-12 margin-top-col">
				<h4>Endereço</h4>
				<div class="text-widget">
					<span>Rua Albina, N.º 40, Sala 705/776<br> 
					Ed. Premier - Alto da Glória<br> 
					Goiânia – GO - CEP: 74.255-470</span> <br>
					<span> Telefone: </span> <span>(62) 3256-8659 / 98596-1586</span><br>
					<span> Email: </span> <span> <a href="#"><span class="__cf_email__" data-cfemail="c0afa6a6a9a3a580a5b8a1adb0aca5eea3afad">atendimento@novoar.com.br</span></a> </span><br>
				</div>
			</div>

		</div>
		
		<!-- Copyright -->
		<div class="row">
			<div class="col-md-12">
				<div class="copyrights">© 2021 NOVO AR. Todos os direitos reservados.</div>
			</div>
		</div>

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


