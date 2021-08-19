<!DOCTYPE html>
<html lang="pt-br">
    <?php $empresa = exibirInfoEmpresa();?>
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>Novo Ar Climatizadores</title>
    	<meta name="description" content="Agência especializada em Marketing Digital, Criação de Sites e Aplicativos Mobile.">
    	<meta name="keywords" content="Agência digital, Marketing, Sites">
    	<meta name="robots" content="index, follow">
    	<meta name="author" content="NOVOAR">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;700&family=Roboto+Slab:wght@100&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100&display=swap" rel="stylesheet">
    	<link href="{{asset('assests/site/css/style.css')}}" rel="stylesheet" type="text/css">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        {{-- css banner --}}
        <link rel="stylesheet" href="{{asset('assests/site/js/font-awesome/css/font-awesome.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assests/site/js/slider/css/nivo-slider.css')}}" />
        <link rel="stylesheet" href="{{asset('assests/site/js/slider/css/preview.css')}}" />
        <link rel="stylesheet" href="{{asset('assests/site/js/slider/css/style.css')}}" />
        <link href="{{asset('assests/site/css/style2.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assests/site/css/main.css')}}" rel="stylesheet" type="text/css">

        <link rel="icon" href="{{ asset('images/icon.png') }} ">





        <link rel="stylesheet" type="text/css" href="{{asset('assests/site/js/master/css/style.css')}} "/>
		<script src="{{asset('assests/site/js/master/js/modernizr.custom.70736.js')}}  "></script>
        <noscript><link rel="stylesheet" type="text/css" href="{{asset('assests/site/js/master/css/noJS.css')}}"/></noscript>

    </head>
    <body>

    <!-- CABEÇALHO -->
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-bars"></i>
        </label>
        <label class="Logo">
            <img src="/images/logonovoar.png">
        </label>
        <ul>
            <li>
                <a class="active navfor">HOME</a>
            </li>
            <li>
                <a href="#" class="navfor">QUEM SOMOS</a>
            </li>
            <li>
                <a href="#" class="navfor">PRODUTOS</a>
            </li>
            <li>
                <a href="#" class="navfor">INSTALAÇÕES</a>
            </li>
            <li>
                <a href="#" class="navfor">CONTATO</a>
            </li>
            <li>
                <a href="#" class="navfor"><i class="fa fa-facebook"></i></a>
            </li>
              <li>
                <a href="#" class="navfor"><i class="fa fa-instagram"></i></a>
            </li>
        </ul>

