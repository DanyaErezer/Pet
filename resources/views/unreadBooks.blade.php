@extends('layout')

@section('title')Ваша Книга@endsection

@section('main_content')

    @if($unreadBooks->isEmpty())
        <h1>Книги не найдены.</h1>
    @else
        <h1 style="margin-bottom: 50px; text-align: center">Непрочитанные книги</h1>
        @foreach($unreadBooks as $book)
            <div style="display: flex; align-items: center; margin-bottom: 60px; margin-left: 80px">
                <div style="flex: 0 0 auto; margin-right: 30px;">
                    <img src="{{ $book->image }}" alt="Описание изображения" style="width: 200px; height: auto;">
                </div>
                <div style="flex: 1;">
                    <h3>{{ $book->author }}</h3>
                    <h4>{{ $book->book_name }}</h4>
                    <h5>{{ $book->country }}</h5>
                    <h6>{{ $book->year }}</h6>
                    <p>{{ $book->review }}</p>
                    <p>Для получения дополнительной информации посетите <a href="{{ $book->link }}" target="_blank">этот сайт</a>.</p>

                    <div style="width: 100%;">
                        <form action="{{ route('markBook', $book->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-warning w-30 mt-3 rounded">Отметить как прочитанную</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    @endif


@endsection

