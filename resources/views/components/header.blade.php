<header class="flex justify-around my-2">
    <div class="flex items-center gap-10">
        <img class="w-auto h-24" src="{{ asset('img/logo.png') }}" alt="Logo">
        <h2><a class="text-xl hover:text-bold" href="{{ route('home') }}">Home</a></h2>
        <nav>
            <ul class="flex gap-4">
                <a class="hover:font-bold hover:underline" href="{{ route('about') }}">
                    <li>Sobre Nós</li>
                </a>
                <a class="hover:font-bold hover:underline" href="#">
                    <li>Produtos</li>
                </a>
                <a class="hover:font-bold hover:underline" href="#">
                    <li>Catálogo</li>
                </a>
                <a class="hover:font-bold hover:underline" href="{{ route('contact') }}">
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