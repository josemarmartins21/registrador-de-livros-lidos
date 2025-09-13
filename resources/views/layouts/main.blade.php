<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <div class="item" id="img">

        </div>
        <div class="item" id="menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Livros</a></li>
                <li><a href="#">Autores</a></li>
                <li><a href="#">Uploads</a></li>
            </ul>
        </div>
    </header>
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