<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>

</head>

<body>
    <h1>algum titulo</h1>
    <img src="/img/banner.jpg" alt="banner">
    @if (10 > 5)
        <p>a condicao é true</p>
    @endif
    <p>{{ $nome }}</p>

    @if ($nome == 'Sofia')
        <p>Seu nome é {{ $nome }} e tem {{ $idade }} anos</p>
    @else
        <p>Seu nome não é Sofia</p>
    @endif

    @for ($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }} - {{ $i }}</p>
        @if ($i == 2)
            <p>o i é igual a 2</p>
        @endif
    @endfor

    @php
        $name = 'soso';
        echo $name;
    @endphp
    {{-- teste aqui --}}

    @foreach ($nomes as $nome)
        <p>{{ $loop->index }}</p>
        <p>{{ $nome }}</p>
    @endforeach

</body>

</html>
