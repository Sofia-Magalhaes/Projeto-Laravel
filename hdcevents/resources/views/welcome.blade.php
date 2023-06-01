@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')


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

@endsection
