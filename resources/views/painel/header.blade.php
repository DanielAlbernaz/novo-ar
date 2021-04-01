<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PAINEL ADM | Dashboard</title>
    <script src="{{asset('assests/painel/js/jquery-3.1.1.min.js')}}"></script>
    <link href="{{asset('assests/painel/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assests/painel/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css">


    <link href="{{asset('assests/painel/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('assests/painel/js/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('assests/painel/css/animate.css')}}" rel="stylesheet" type="text/css">

    {{-- Crop Indiano --}}
    <link href="{{asset('assests/painel/crop/cropper.min.css')}}" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    {{-- Table list Indiano --}}
    <link href="{{asset('assests/painel/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assests/painel/css/plugins/summernote/summernote-bs4.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assests/painel/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.8.1/dropzone.css" rel="stylesheet" type="text/css">

    <script src="https://cdn.tiny.cloud/1/bhivvpzxh2vxllhxysw5xfv6zrzckbi70ium07ecngf8owpo/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.8.1/dropzone.js" referrerpolicy="origin"></script>

    <!-- Inclusão do Plugin jQuery Validation-->
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>

    <script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>

    <script>
        tinymce.init({
          selector: '#text',
         language: 'pt_BR',
         menu: {
    file: { title: 'File', items: 'newdocument restoredraft | preview | print ' },
    edit: { title: 'Edit', items: 'undo redo | cut copy paste | selectall | searchreplace' },
    view: { title: 'View', items: 'code | visualaid visualchars visualblocks | spellchecker | preview fullscreen' },
    insert: { title: 'Insert', items: 'image link media template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor toc | insertdatetime' },
    format: { title: 'Format', items: 'bold italic underline strikethrough superscript subscript codeformat | formats blockformats fontformats fontsizes align lineheight | forecolor backcolor | removeformat' },
    tools: { title: 'Tools', items: 'spellchecker spellcheckerlanguage | code wordcount' },
    table: { title: 'Table', items: 'inserttable | cell row column | tableprops deletetable' },
    help: { title: 'Help', items: 'help' }
  },
plugins: [
  'advlist autolink link image lists charmap print preview hr anchor pagebreak',
  'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
  'table emoticons template paste help',
  'lists'
],
toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright alignjustify | bullist numlist outdent indent'
        });

        tinymce.init({
          selector: '#missao',
         language: 'pt_BR',
        });

        tinymce.init({
          selector: '#valores',
         language: 'pt_BR',
        });

        tinymce.init({
          selector: '#visao',
         language: 'pt_BR',
        });
      </script>

</head>

<body>

    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            @isset(auth()->user()->imagem)
                            <img alt="image" class="rounded-circle" src="{{session('URL_IMG') .  auth()->user()->imagem }}"/>
                            @endisset

                            <a data-toggle="dropdown" class="dropdown-toggle" href="">
                                <span class="block m-t-xs font-bold">
                                    @isset(auth()->user()->name)
                                    {{ 'Olá ' . auth()->user()->name }}
                                    @endisset

                                </span>
                            </a>
                        </div>
                        <div class="logo-element">
                            SA
                        </div>
                    </li>
                    <li class="">
                        <a href="/sistema" ><i class="fa fa-home"></i> <span class="nav-label">Principal</span> <span class="fa arrow"></span></a>
                    </li>

                    <li class="">
                        <a href="#" ><i class="fa fa-users"></i> <span class="nav-label">Usuários</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class=""><a href="{{ route('usuario.cadastrar') }}">Cadastrar</a></li>
                            <li class=""><a href="{{ route('usuario.listar') }}">Listar</a></li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="#" ><i class="fa fa-window-restore"></i> <span class="nav-label">Banner</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class=""><a href="{{ route('banner.cadastrar') }}">Cadastrar</a></li>
                            <li class=""><a href="{{ route('banner.listar') }}">Listar</a></li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="#" ><i class="fa fa-institution"></i></i><span class="nav-label">Quem Somos</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class=""><a href="{{ url('sistema/editar-institucional/1') }}">Alterar</a></li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="#" ><i class="fa fa-cubes"></i><span class="nav-label">Produtos</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class=""><a href="{{ route('produto.cadastrar') }}">Cadastrar</a></li>
                            <li class=""><a href="{{ route('produto.listar') }}">Listar</a></li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="#" ><i class="fa fa-building-o"></i><span class="nav-label">Novo Ar</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class=""><a href="{{ url('sistema/editar-empresa/1') }}">Alterar</a></li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="#" ><i class="fa fa-file-image-o"></i><span class="nav-label">Instalações</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class=""><a href="{{ url('sistema/editar-instalacoes/1') }}">Alterar</a></li>
                        </ul>
                    </li>



            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li style="padding: 20px">
                    <span class="m-r-sm text-muted welcome-message">Bem vindo ao painel administrativo.</span>
                </li>
                <li class="dropdown">

                    <ul class="dropdown-menu dropdown-messages dropdown-menu-right">
                        <li>
                            <div class="dropdown-messages-box">
                                <a class="dropdown-item float-left" href="profile.html">
                                    <img alt="image" class="rounded-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="float-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a class="dropdown-item float-left" href="profile.html">
                                    <img alt="image" class="rounded-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="float-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a class="dropdown-item float-left" href="profile.html">
                                    <img alt="image" class="rounded-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="float-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html" class="dropdown-item">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">

                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="float-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="profile.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="float-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="grid_options.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="float-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html" class="dropdown-item">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a  href="{{ route('usuario.logout') }}">
                        <i class="fa fa-sign-out"></i> Sair
                    </a>
                </li>
            </ul>

        </nav>
        </div>
