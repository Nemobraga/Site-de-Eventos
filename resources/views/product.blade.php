@extends('layouts.main')

    @section('title', 'Produtos2')
     @section('content')
        @if ($id != null)
            <p>Exibindo produto id:{{"$id"}}</p>
        @endif
     @endsection