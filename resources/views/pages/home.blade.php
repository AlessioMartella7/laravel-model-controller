@extends('layouts.app')

@section('page-title', 'Homepage')

@section('main-content')

    <h1>Homepage</h1>

@endsection

{{--

5 - Create un model Movie php artisan make:model Movie
6 - Create un controller che gestirà la rotta php artisan make:controller MovieController
7 - All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card. --}}
