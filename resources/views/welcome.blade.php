@extends('layouts.main')

@section('title','HDC Events' )

@section('content')

<h1>oiiiii! </h1>
<a href="/contact" class="relative flex items-top justify-center">ir para contato </a>
@if (10 > 5)
<p>A condição é true </p>
@endif
<p>Meu nome é {{$name}}</p>
<p>Tenho {{$age}} anos</p>

@if ($name == 'Pedro')
<p>Meu nome é Pedro</p>
@elseif($name == 'Gustavo')
<p>Meu nome é <strong>{{$name}}</strong></p>
@else
<p>O nome não é Pedro</p>
@endif

@for($i = 0; $i < count($arr); $i++) <p>{{$arr[$i]}} - {{$i}}</p>

    @endfor

    @foreach ($names as $name )
    <p>{{$loop->index}}</p>
    <p>{{$name}}</p>

    @endforeach

    @php
    $name = "Lucas";
    echo $name;
    @endphp

    {{-- comentando aqui para testar --}}

    @endsection