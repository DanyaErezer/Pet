@extends('layout')

@section('title')Главная Страница@endsection




@section('main_content')

    <div class="container px-4 py-5">
        <h1 class="pb-2 border-bottom text-center">Любимые Книги</h1>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="feature col">
                <div>
                    <img src="{{ asset('images/книга.png') }}" alt="Icon description" style="width: 50px; height: auto; filter: brightness(0) invert(1);">
                </div>
                <h3 class="fs-2 text-white">Джек Лондон</h3>
                <h4 class="text-white">Мартин Иден</h4>
                <p>Был написан Джеком Лондоном во время путешествия на собственной шхуне "Снарк" по Тихому океану в 1907-1908 годах.
                    Во многом автобиографичный, этот роман повествует о непростой судьбе юноши из низших слоёв общества.</p>
                <img src="{{ asset('images/Джек Лондон.jpg') }}" alt="" style="width: 300px; height: auto">
            </div>
            <div class="feature col">
                <div>
                    <img src="{{ asset('images/книга.png') }}" alt="Icon description" style="width: 50px; height: auto; filter: brightness(0) invert(1);">
                </div>
                <h3 class="fs-2 text-white">Герман Гессе</h3>
                <h4 class="text-white">Демиан</h4>
                <p>Философский роман, мрачный и мистический. Можно считать его и автобиографичным - об этом Гессе заявляет в предисловии.
                    Знаковое произведение, оказавшее огромное влияние на дальнейшее творчество писателя, а великий Томас Манн сравнивал эту книгу со "Страданиями юного Вертера".</p>
                <img src="{{ asset('images/Герман Гессе.jpg') }}" alt="" style="width: 300px; height: auto">
            </div>
            <div class="feature col">
                <div>
                    <img src="{{ asset('images/книга.png') }}" alt="Icon description" style="width: 50px; height: auto; filter: brightness(0) invert(1);">
                </div>
                <h3 class="fs-2 text-white">Курт Воннегут</h3>
                <h4 class="text-white">Бойня №5</h4>
                <p>Доброволец в рядах американской армии во время Второй мировой войны, попавший в плен к немцам, свидетель почти полного уничтожения Дрездена,
                    Воннегут перенес этот опыт на страницы своего самого знаменитого романа - "Бойня номер пять, или Крестовый поход детей",
                    в котором стираются грани между настоящим и прошлым, миром и войной, реальностью и фантазией, безумием и трезвостью.</p>
                <img src="{{ asset('images/Курт Воннегут.jpg') }}" alt="" style="width: 300px; height: auto">
            </div>
        </div>
    </div>

    </body>
    </html>

@endsection
