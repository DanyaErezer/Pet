@extends('layout')

@section('title')Форма@endsection

@section('main_content')
    <h1 class="text-center">Фильтр поиска книг</h1>

    <div class="d-flex justify-content-center">
        <form action="{{ route('filterResult') }}" method="GET" class="d-flex flex-column align-items-center mb-4">
            <div class="mb-3">
                <select name="author" class="form-control" style="width: 800px;">
                    <option value="">Выберите автора</option>
                    @foreach($authors as $el)
                        <option value="{{ $el }}">{{ $el }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <select name="country" class="form-control" style="width: 800px;">
                    <option value="">Выберите страну</option>
                    @foreach($countries as $el)
                        <option value="{{ $el }}">{{ $el }}</option>
                    @endforeach
                </select>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary" style="width: 400px;">Применить фильтры</button>
            </div>
        </form>
    </div>


@endsection
