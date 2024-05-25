<header class="flex justify-around my-2">
    <div class="flex items-center gap-10">
        <img class="w-auto h-24" src="{{ asset('img/logo.png') }}" alt="Logo">
        <h2><a href="{{ route('home') }}">Home</a></h2>
        <nav>
            <ul class="flex gap-4">
                <a href="{{ route('about') }}">
                    <li>Sobre Nós</li>
                </a>
                <a href="#">
                    <li>Produtos</li>
                </a>
                <a href="#">
                    <li>Catálogo</li>
                </a>
                <a href="{{ route('contact') }}">
                    <li>Contato</li>
                </a>
            </ul>
        </nav>
    </div>

    <div class="flex items-center">
        <button class="ui-btn">
            <span>
                Login
            </span>
        </button>
    </div>
</header>