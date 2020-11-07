@extends('layouts.main')
@section('content')
    <div class="col-8 offset-2">
        <h3>Обратная свзяь</h3>
        <br>
        <form method="post" action="{{ route('store') }}">
            @csrf
            <p>Имя: <br><input class="form-control" name="user_name" value="{{ old('user_name') }}" ></p>
            <p>E-Почта: <br><input class="form-control" name="user_email" value="{{ old('user_email') }}" ></p>
            <p>Сообщение: <br><textarea class="form-control" name="user_message">{!! old('user_message') !!}</textarea></p>
            <button class="btn btn-success" type="submit">Отправить</button>
        </form>
    </div>
@stop
