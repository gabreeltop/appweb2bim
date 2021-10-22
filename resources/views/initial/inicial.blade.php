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
    <main>
        <section class="botoes">
            <ul>
                <li><a href="{{url('/infopessoal')}}"><img src="{{asset('img/icons/interroga.svg')}}" alt="Interrogação" />Precisa de Ajuda? Clique Aqui!</a></li>
                <li><a href="{{url('/creators')}}"><img src="{{asset('img/icons/Homem.svg')}}" alt="Homem" />Alguma dúvida? Fale conosco!</a></li>
                <li><a href="{{url('/infopessoal')}}"><img src="{{asset('img/icons/Folhas.svg')}}" alt="Folhas" />Primeira vez? Faça um tutorial!</a></li>
                <li><a href="{{url('/project')}}"><img src="{{asset('img/icons/Exclamacao.svg')}}" alt="Exclamação" />Quer conhecer mais o projeto?</a></li>
            </ul>
        </section>
    </main>
    <footer>
        <h4>Direitos autorais</h4>
    </footer>
</body>



</html>