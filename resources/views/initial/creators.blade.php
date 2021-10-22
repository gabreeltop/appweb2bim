<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeworkHelper</title>
    <link rel="stylesheet" href="{{asset('css/initial/inicial.css')}}" />
</head>

<body>
    <header>
        <section>
            <picture>
                <img src="{{asset('img/logo/logo2.svg')}}" alt="Logo" />
                <img src="{{asset('img/logo/logo.svg')}}" alt="Logo" />
            </picture>
        </section>
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/infopessoal') }}" class="text-sm text-gray-700 underline">Área Administrativa</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrar</a>
            @endif
            @endauth
        </div>
        @endif
    </header>
    <main class="creators">
        <h1>Contato com os criadores</h1>
        <div>
            <h3>Gustavo Biaso </p>
                Email:
                gustavobiaso@gmail.com
            </h3>
        </div>
        <div>
            <h3>Gabriel Rossi</p>
                Email:
                gabrielrossi.2908@gmail.com
            </h3>
        </div>
    </main>
    <footer>
        <h4>Direitos autorais</h4>
    </footer>
</body>



</html>