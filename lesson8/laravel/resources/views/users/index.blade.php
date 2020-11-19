@extends('layouts.main')
@section('content')
    <div class="col-8 offset-2">
        <h2>Добро пожаловать, {{ \Auth::user()->name }}</h2>
        <form method="POST" action="{{ route('logout') }}">
        <button type="submit" class="btn btn-primary">
            {{ __('Выход') }}
        </button>
        </form>
        <a href="{{ url('/logout')}}">Выход</a>
    </div>
@stop
