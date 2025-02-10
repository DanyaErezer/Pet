<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body style="background-color: #2c2c2c; color: #f5f5f5; font-family: Arial, sans-serif;">
<header class="d-flex flex-column align-items-center py-3 shadow-sm" style="background-color: #87ceeb; border-bottom: 2px solid #4682b4;">
    <nav class="d-flex justify-content-center">
        <ul class="nav">
            <li class="nav-item"><a href="/home" class="nav-link text-white px-3">Главная</a></li>
            <li class="nav-item"><a href="/tirList" class="nav-link text-white px-3">Мои Книги</a></li>
            <li class="nav-item"><a href="/filter" class="nav-link text-white px-3">Фильтр</a></li>
            <li class="nav-item"><a href="/random" class="nav-link text-white px-3">Рандом</a></li>
            <li class="nav-item"><a href="/unreadBooks" class="nav-link text-white px-3">Непрочитанное</a></li>
            <li class="nav-item"><a href="/formUnreadBooks" class="nav-link text-white px-3">Форма</a></li>
        </ul>
    </nav>
    <form action="{{route('books.search')}}" method="GET" class="d-flex mt-2" style="max-width: 400px; width: 100%;">
        <input type="text" class="form-control" name="query" placeholder="Поиск..." required>
        <button type="submit" class="btn btn-dark ms-2">Поиск</button>
    </form>
</header>

<div class="container mt-4">
    @yield('main_content')
</div>

</body>
</html>

