@extends('layout')

@section('title')Мои Книги@endsection


@section('main_content')

    <div class="container text-center"><h1>Мои Книги</h1></div>

    @foreach($tirList as $el)


            <div style="display: flex; align-items: center; margin-bottom: 60px; margin-left: 80px">
                <div style="flex: 0 0 auto; margin-right: 30px;">
                    <img src="{{ $el->image }}" alt="Описание изображения" style="width: 200px; height: auto;">
                </div>
                <div style="flex: 1;">
                    <h3>{{ $el->author }}</h3>
                    <h4>{{ $el->book_name }}</h4>
                    <h5>{{ $el->country }}</h5>
                    <h6>{{ $el->year }}</h6>
                    <p>{{ $el->review }}</p>
                    <p>Для получения дополнительной информации посетите <a href="{{$el->link}}" target="_blank">этот сайт</a>.</p>
                </div>
            </div>



    @endforeach



@endsection
