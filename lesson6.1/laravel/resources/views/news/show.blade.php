@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h2>{{ $news->title }}</h2>
            <br>
            @if($news->image)
                <img src="{{ $news->image }}">
            @endif
            <div>
                {!! $news->description !!}
            </div>
        </div>
    </div>
@stop
