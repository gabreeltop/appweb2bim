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
    <main class="project">
        <h1>Conheça o Projeto</h1>
        <div>
            O Homework Helper é uma plataforma feita para ajudar alunos a organizarem melhor as suas atividades e horários.</p>
            Esta plataforma está sendo desenvolvida como projeto de dois alunos do terceiro ano do curso de informática do CEFET-MG! Caso você goste da plataforma ou seja o professor Lázaro lendo esse texto muito obrigado por pelo menos ter dado essa conferida no projeto!
        </div>
    </main>
    <footer>
        <h4>Direitos autorais</h4>
    </footer>
</body>



</html>