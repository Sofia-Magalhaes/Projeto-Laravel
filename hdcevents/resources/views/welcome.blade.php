<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
    </style>
</head>

<body>
    <h1>algum titulo</h1>
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
