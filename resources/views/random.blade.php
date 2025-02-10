@extends('layout')

@section('title')Случайная Книга@endsection

@section('main_content')

    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>


<h1 style="margin-bottom: 50px; text-align: center" >Случайная книга</h1>
<div class="container">
    <img src="{{$random->image}}"style="width: 300px; height: auto; float: left; margin-right: 15px";>
    <div>
        <h3>{{$random->author}}</h3>
        <h4>{{$random->book_name}}</h4>
        <h5>{{$random->country}}</h5>
        <h6>{{$random->year}}</h6>
        <p>{{$random->review}}</p>
        <p>Для получения дополнительной информации посетите <a href="{{$random->link}}" target="_blank">этот сайт</a>.</p>
    </div>
</div>


</body>
</html>

@endsection
