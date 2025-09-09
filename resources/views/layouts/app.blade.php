<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=@I@, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
@vite('resources/js/app.js')

    <header class="bg-purple-600 text-white p-3 shadow-md">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Minha App</h1>
            <nav>
                <ul class="flex gap-8">
                    <li><a href="/" class="hover:underline">Início</a></li>
                    <li><a href="/usuarios" class="hover:underline">Usuários</a></li>
                    <li><a href="/contato" class="hover:underline">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>
    @yield('body')
    <footer class="bg-purple-600 text-white text-center p-2">
        <p class="text-sm">&copy; {{ date('Y') }} João Gabriel. Todos os direitos reservados.</p>
    </footer>
</body>
</html>