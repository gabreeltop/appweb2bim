<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeworkHelper</title>
    <link rel="stylesheet" href="{{ asset('css/adm/adm.css') }}">
</head>

<body>
    <header>
        <section>
            <picture>
                <img src="{{asset('img/logo/logo2.svg')}}" alt="Logo" />
                <img src="{{asset('img/logo/logo.svg')}}" alt="Logo" />
            </picture>
        </section>
    </header>
    <nav>
        <ul>
            <li>
                <a href="{{url('/infopessoal')}}">Informações Pessoais</a>
            </li>
            <li>
                <a href="{{url('/')}}">Em desenvolvimento</a>
            </li>
            <li>
                <a href="{{url('/')}}">Em desenvolvimento</a>
            </li>
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        <h4>Direitos autorais</h4>
    </footer>
</body>

</html>