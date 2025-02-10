<?php

namespace App\Http\Controllers;

use App\Models\UnreadBook;
use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function random()
    {
        // Выбор случайной книги из таблицы books
        $randomBook = DB::table('books')->inRandomOrder()->first();

        return view('random', ['random' => $randomBook]);
    }


    public function search(Request $request)
    {
        $query = $request->input('query');

        // Выполните поиск в базе данных
        $books = Book::where('book_name', 'LIKE', "%{$query}%")
            ->orWhere('author', 'LIKE', "%{$query}%")
            ->orWhere('year', 'LIKE', "%{$query}%")
            ->get();

        // Вернуть результаты поиска на страницу
        return view('search_results', compact('books', 'query'));
    }


    public function filter()
    {
        $authors = Book::distinct()->pluck('author');
        $countries = Book::distinct()->pluck('country');


        return view('filter', compact('authors', 'countries'));
    }

    public function filterResult(Request $request)
    {


        $authors = $request->input('author'); // Получаем выбранные авторы
        $countries = $request->input('country');

        $query = Book::query();

        if ($authors) {
            $query->where('author', $authors);
        }

        if ($countries) {
            $query->where('country', $countries);
        }

        $books = $query->get();

        return view('filterResult', compact('books'));
    }


    public function unreadBooks()
    {
        $unreadBooks = UnreadBook::all();
        $readBooks = Book::all();
        return view('unreadBooks', compact('unreadBooks', 'readBooks'));
    }

    // Открытие формы для добавления книги
    public function showForm()
    {
        return view('formUnreadBooks');  // Имя файла Blade-шаблона
    }

    // Добавление новой книги
    public function formUnreadBooks(Request $request)
    {

        $request->validate([
            'book_name' => 'required|string',
            'author' => 'required|string',
            'review' => 'required|string',
            'link' => 'required|string',
            'image' => 'required|string',
            'country' => 'required|string',
            'year' => 'required|string',
        ]);

        UnreadBook::create($request->all());

        return redirect()->route('unreadBooks')->with('success', 'Книга успешно добавлена!');
    }

    // Отметить книгу как прочитанную
    public function markBook($id)
    {
        $book = UnreadBook::findOrFail($id);

        Book::create([
            'book_name' => $book->book_name,
            'author' => $book->author,
            'review' => $book->review,
            'link' => $book->link,
            'image' => $book->image,
            'country' => $book->country,
            'year' => $book->year,
        ]);

        $book->delete();

        return redirect()->route('unreadBooks');
    }
}


