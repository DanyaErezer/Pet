@extends('layout')

@section('title')Форма непрочитанные книги@endsection




@section('main_content')




    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>



<h1 class="container d-flex flex-column align-items-center">Добавить книгу</h1>
<form action="{{ route('formUnreadBooks') }}" method="POST">
    @csrf
    <div class="container w-50">
        <div class="mb-3">
            <label class="form-label fw-bold fs-5">Название Книги</label>
             <input type="text" class="form-control" name="book_name" required>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold fs-5">Автор</label>
            <input type="text" class="form-control" name="author">
        </div>
        <div class="mb-3">
             <label class="form-label fw-bold fs-5">URL</label>
            <input type="text" class="form-control" name="link">
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold fs-5">Изображение:</label>
             <input type="text" class="form-control" name="image">
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold fs-5">Страна</label>
            <input type="text" class="form-control" name="country">
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold fs-5">Год</label>
            <input type="text" class="form-control" name="year">
        </div>
        <div
            class="mb-3">
            <label class="form-label fw-bold fs-5">Описание</label>
            <textarea name="review" class="form-control"></textarea>
        </div>

    <button type="submit" class="form-control btn btn-primary">Добавить книгу</button>
    </div>
</form>

</body>
</html>


@endsection
