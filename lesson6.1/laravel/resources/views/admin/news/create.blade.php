@extends('layouts.main')
@section('content')
    <div class="col-8 offset-2">
        @if(session()->has('success'))
            <div class="alert-success">
                Новость успешна добавлена!
            </div>
        @elseif(session()->has('error'))
            <div class="alert-danger">
                Не удалось добавить новость!
            </div>
        @endif
        <h3>Добавление новости</h3>
        <br>
        <form method="post" action="{{ route('news.store') }}">
            @csrf
            <p>Заголовок: <br><input class="form-control" name="title" value="{{ old('title') }}" ></p>
            <p>Автор: <br><input class="form-control" name="author" value="{{ old('author') }}" ></p>
            <p>Описание: <br><textarea class="form-control" name="description">{!! old('description') !!}</textarea></p>
            <button class="btn btn-success" type="submit">Добавить</button>
        </form>
    </div>
@stop
