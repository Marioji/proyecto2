<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade principal</title>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
            border-right: 1px solid #bbb;
        }

        li:last-child {
            border-right: none;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #CDCDCD;
        }
    </style>
</head>
<body>
<nav>
    <ul>
        <div class="flex flex-row justify-between p-1 ">
            <div>
                @guest()
                    <li><a> </a></li>
                @endguest
                @auth()
                    <li><a class="active" href="#home" style="color: #000000">Inicio</a></li>
                    <li><a href="#news">Clientes</a></li>
                    <li><a href="#news">Facturas</a></li>
                    <li><a href="#contact">Empleados</a></li>
                @endauth
            </div>
            <div>
                <h1 class="text-4xl text-white @auth mr-40 @endauth " >Empresa</h1>
            </div>
            <div>

                @guest()
                    <li><a href="{{route("register")}}">Registrar</a></li>
                    <li><a href="{{route("login")}}">Login</a></li>
                @endguest
                @auth()
                    <li>
                        <form id="logout" method="post" action="{{route("logout")}}">
                            @csrf
                            <a href="javascript:{}" onclick="document.getElementById('logout').submit();">Log Out</a>
                        </form>
                    </li>
                @endauth
            </div>
        </div>
    </ul>
</nav>
<div style="padding: 20px">
    @guest()
        <h3>Bienvenido, inicia sesión para acceder</h3>
    @endguest
    @auth()
        <h3>Hola de nuevo, {{auth()->user()->name}}</h3>
    @endauth
</div>
</body>
</html>
