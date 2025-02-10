@extends('layout')

@section('title')Результат фильтра@endsection

@section('main_content')

    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>


@if($books->isEmpty())
    <h1>Книги не найдены.</h1>
@else
    <h1 style="margin-bottom: 50px; text-align: center" >Ваш Запрос</h1>
    <ul>
        @foreach($books as $book)
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
                    <p>Для получения дополнительной информации посетите <a href="{{$book->link}}" target="_blank">этот сайт</a>.</p>
                </div>
            </div>

        @endforeach
    </ul>
@endif


</body>
</html>

@endsection
