<?php
    $empresa = exibirInfoEmpresa();
    $telefones = exibirTelefone();
?>
</body>

<div class="ccw_plugin chatbot">
    <div class="animate_animated animate_bounce ">
            <a target="blank" href="https://web.whatsapp.com/send?phone=5562984080282&amp;text=Olá, tenho interesse!" class="animateanimated animate_bounce">
                <img class="img-icon ccw-analytics" id="style-3" data-ccw="style-3" style="height: 65px;" src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp chat">
            </a>
    </div>
</div>

<footer class="footer">
	<!-- Main -->
    <div class="container-footer">
		<div class="row foot-cont">
			<div class="col-md-4 col-sm-12 margin-top-col-1">
                <a href="/">
				    <img class="footer-logo" src="images/logonovoar.png" alt="">
                </a>
				<br><br>

				<ul class="footer-links">
					<li><a href="{{ route('institucional') }}">Quem Somos</a></li>
					<li><a href="{{ route('produtos') }}">Produtos</a></li>
					<li><a href="{{ route('galeria') }}">Instalações</a></li>
					<li><a href="/institucional/#contato">Contato</a></li>
				</ul>


			</div>

			<div class="col-md-4 col-sm-12 margin-top-col ">
				<h4>Central de atendimento</h4>
				<ul class="footer-links">
					<li><a href="/institucional/#contato">Atendimento por email</a></li>
					<li><a href="https://web.whatsapp.com/send?phone=5562984080282&amp;text=Olá, tenho interesse!" target="_blank">Atendimento Online</a></li>
					<li><a href="https://web.whatsapp.com/send?phone=5562984080282&amp;text=Olá, tenho interesse!" target="_blank">Atendimento Whatsapp</a></li>
					<li><a href="/institucional/#contato">Ligamos para você</a></li>
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

   @if (Route::currentRouteName() == 'galeria')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
   @else
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   @endif




    {{-- <script type="text/javascript" src="{{asset('assests/site/galleria/dist/galleria.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assests/site/galleria/dist/themes/miniml/galleria.miniml.min.js')}}"></script>
 --}}




 <script type="text/javascript" src="{{ asset('assests/site/js/scripts/chosen.min.js')}}"></script>
 <script type="text/javascript" src="{{ asset('assests/site/js/scripts/magnific-popup.min.js')}}"></script>
 <script type="text/javascript" src="{{ asset('assests/site/js/scripts/owl.carousel.min.js')}}"></script>
 <script type="text/javascript" src="{{ asset('assests/site/js/scripts/rangeSlider.js')}}"></script>
 <script type="text/javascript" src="{{ asset('assests/site/js/scripts/sticky-kit.min.js')}}"></script>
 <script type="text/javascript" src="{{ asset('assests/site/js/scripts/slick.min.js')}}"></script>
 <script type="text/javascript" src="{{ asset('assests/site/js/scripts/mmenu.min.js')}}"></script>
 <script type="text/javascript" src="{{ asset('assests/site/js/scripts/tooltips.min.js')}}"></script>
 <script type="text/javascript" src="{{ asset('assests/site/js/scripts/masonry.min.js')}}"></script>
 <script type="text/javascript" src="{{ asset('assests/site/js/scripts/jquery.counterup.min.js')}}"></script>
 <script type="text/javascript" src="{{ asset('assests/site/js/scripts/custom.js')}}"></script>

 <script type="text/javascript" src="{{ asset('assests/site/js/scripts/infobox.min.js')}}"></script>
 <script type="text/javascript" src="{{ asset('assests/site/js/scripts/markerclusterer.js')}}"></script>
 <script type="text/javascript" src="{{ asset('assests/site/js/scripts/search.js')}}"></script>

    <script src="{{asset('assests/site/js/main.js')}}"></script>

       {{-- Banner js --}}
       <script type="text/javascript" src="{{asset('assests/site/js/minimalist-slider/assets/js/jquery.minimal-plugins.min.js')}}"></script>
       <script type="text/javascript" src="{{asset('assests/site/js/minimalist-slider/assets/js/jquery.minimalist-banner.min.js')}}"></script>
       <script type="text/javascript" src="{{asset('assests/site/js/slider/js/jquery.nivo.slider.js')}}"></script>
       <script type="text/javascript" src="{{asset('assests/site/js/slider/home.js')}}"></script>





		<script src="{{asset('assests/site/js/master/js/jquery.masonry.min.js')}}"></script>
		<script src="{{asset('assests/site/js/master/js/jquery.history.js')}}"></script>
		<script src="{{asset('assests/site/js/master/js/js-url.min.js')}}"></script>
		<script src="{{asset('assests/site/js/master/js/jquerypp.custom.js')}}"></script>
		<script src="{{asset('assests/site/js/master/js/gamma.js')}}"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
		<script src="{{asset('assests/site/js/main.js')}}"></script>
		<script type="text/javascript">

			$(function() {

				var GammaSettings = {
						// order is important!
						viewport : [ {
							width : 1200,
							columns : 5
						}, {
							width : 900,
							columns : 4
						}, {
							width : 500,
							columns : 3
						}, {
							width : 320,
							columns : 2
						}, {
							width : 0,
							columns : 2
						} ]
				};

				Gamma.init( GammaSettings, fncallback );


				// Example how to add more items (just a dummy):

				var page = 0,
					items = ['<li><div data-alt="img03"  data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03"  data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03"  data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03"  data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03"  data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li>']

				function fncallback() {

					$( '#loadmore' ).show().on( 'click', function() {

						++page;
						var newitems = items[page-1]
						if( page <= 1 ) {

							Gamma.add( $( newitems ) );

						}
						if( page === 1 ) {

							$( this ).remove();

						}

					} );

				}

			});

		</script>
