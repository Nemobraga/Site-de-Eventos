@extends('layouts.main')

    @section('title', 'HDC Events')
     @section('content')

        <h1>Vamos começar</h1>
        <img src="/img/banner2.jpg" alt ="Banner">
        @if (10>5)
            <p>A condição é true</p>
        @endif

        <p>{{$nome}}</p>
         @if ($nome == 'Pedro')
            <p>o nome é Pedro</p>
    
        @elseif ($nome =='Mateus')   
            <p>O nome é {{$nome}}, possui {{$idade}} anos  e trabalha como {{$trabalho}}  </p>
        @else
            <p>O nome não confere</p>
        @endif

        @foreach ($nomes as $nome )
            <p>{{$nome}}</p>        
        @endforeach
    
        @for ($i=0; $i < count($arr);$i++)
            <p>{{ $arr[$i]}} - {{$i}}</p>
        @if($i==2)
            <p>O i é 2</p>        
        @endif
        @endfor
        @php
            $name ="João";
            echo $name;   
        @endphp
    
    @endsection