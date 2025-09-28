<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="item" id="img">
            <a href="/"><img src="/img/qos-logo-sem-fundo.png" alt="logo da qos" width="160px" title="QoS Tel"></a>
        </div>

        <div class="item" id="menu">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="{{route('livros.dashboard')}}">Dashboard</a></li>
                <li><a href="/livros">Livros</a></li>
                <li><a href="{{ route('create')}}">Uploads</a></li>
            </ul>
        </div>
    </header>
    <hr>
    <main>
        @yield('content')
    </main>
    <footer>
        <P>
            Copyright &copy; 2024 Meus Livros. Todos os direitos reservados.
        </P>
    </footer>
    <script src="/js/script.js"></script>
</body>
</html>