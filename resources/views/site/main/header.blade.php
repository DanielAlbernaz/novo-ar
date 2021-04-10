<!DOCTYPE html>
<html lang="pt-br">
    <?php $empresa = exibirInfoEmpresa();?>
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
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

        {{-- css banner --}}
        <link rel="stylesheet" href="{{asset('assests/site/js/font-awesome/css/font-awesome.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assests/site/js/slider/css/nivo-slider.css')}}" />
        <link rel="stylesheet" href="{{asset('assests/site/js/slider/css/preview.css')}}" />
        <link rel="stylesheet" href="{{asset('assests/site/js/slider/css/style.css')}}" />

        <link rel="icon" href="{{ asset('images/icon.png') }} ">
    </head>
    <body>

    <!-- CABEÇALHO -->
    <header class="cabecalho container-nav">
            <div class="logo">
                <a href="/" class="logo">
                    <img src="{{ asset('images/logonovoar.png') }}">
                </a>
            </div>
                <button class="btn-menu bg-gradient"><i class="fa fa-bars fa-lg"></i></button>
                <nav class="menu">
                    <a class="btn-close"><i class="fa fa-times"></i></a>
                    <ul>
                        <li><a href="{{ route('institucional') }}">Quem somos</a></li>
                        <li><a  href="{{ route('produtos') }}">Produtos</a></li>
                        <li><a href="#" >Instalações</a></li>
                        <li class="Espacamentoicon"><a href="">Contato</a></li>
                        @if ($empresa->facebook)
                            <li><a href="{{ $empresa->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        @endif
                        @if ($empresa->instagram)
                            <li><a href="{{ $empresa->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        @endif
                    </ul>
                </nav>
    </header>

