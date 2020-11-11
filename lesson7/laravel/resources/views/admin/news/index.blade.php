@extends('layouts.app')
@section('content')
    <div class="col-12 offset-2">
        <a href="{{ route('news.create') }}" class="btn btn-success">Добавить новость</a>
        <br>
        @forelse($news as $newsItem)
            <p><a href="{{ route('news.edit', ['news' => $newsItem]) }}">{{ $newsItem->title }}</a> - {{ $newsItem->updated_at }}
                &nbsp; <a href="javascript:;" style="color:red;" class="delete" rel="{{ $newsItem->id }}">Удалить</a></p>
        @empty
            <h3>Новостей нет!</h3>
        @endforelse
        <br>
        {{ $news->links() }}
    </div>
@stop

