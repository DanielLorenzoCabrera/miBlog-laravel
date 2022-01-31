<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset=utf-8" />
    <title>Laravel Blog - @yield('title', 'Incio')</title>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    @section('styles')
        <link href='http://fonts.googleapis.com/css?family=Irish+Grover'    rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>

        <link href="{{ asset('resources/css/screen.css') }}" rel="stylesheet" />
        <link href="{{ asset('resources/css/blog.css') }}" rel="stylesheet" />
    @show

    <link rel="shortcut icon" href="favicon.ico" />
</head>
<body>
<section id="wrapper">
    <header id="header">
        <div class="top">
            @section('nav')
            <nav>
                <ul class="navigation">
                    <li><a href="{{ url('/')  }}">Inicio</a></li>
                    <li><a href="{{ url('/sobre')     }}">Sobre</a></li>
                    <li><a href="{{ url('/contacto')   }}">Contacto</a></li>
                    @guest()
                    <li><a href="{{ url('/login')   }}">Login</a></li>
                    @endguest
                    @auth()
                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    @endauth

                </ul>
            </nav>
            @show
        </div>
        <hgroup>
            <h2>@section('blog_title')<a href="#">LaravelBlog</a>@show</h2>
            <h3>@section('blog_tagline')<a href="#">creando un blog en laravel</a></h3>
        </hgroup>
    </header>
    <section class="main-col">
        @yield('body')
    </section>
    <aside class="sidebar">
        @yield('siderbar')
    </aside>
    <div id="footer">
        @section('footer')
        Laravel blog tutorial - creado por <a href="https://github.com/dsyph3r">jjesgar</a>
        @show
    </div>
</section>

@yield('javascript')

</body>
</html>
