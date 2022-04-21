<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    const BOOKS = [
        [
            'code' => 'book1',
            'title' => 'Book 1',
            'author' => 'Author 1',
            'year_published' => 1990
        ],
        [
            'code' => 'book2',
            'title' => 'Book 2',
            'author' => 'Author 2',
            'year_published' => 1992
        ],
        [
            'code' => 'book3',
            'title' => 'Book 3',
            'author' => 'Author 4',
            'year_published' => 1994
        ],
        [
            'code' => 'book4',
            'title' => 'Book 4',
            'author' => 'Author 4',
            'year_published' => 1995
        ]
    ];

    public function index()
    {
        return view('books.index');
    }

    public function saveCompleteName(Request $request)
    {
        // 1. Save the first name and last name of the user into the session (https://laravel.com/docs/9.x/session)

        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $request->session()->put('first_name', $request->first_name);
        $request->session()->put('last_name', $request->last_name);


        // 2. Read this documentation for redirection (https://laravel.com/docs/9.x/redirects), and redirect to the page or endpoint where the books are listed
        return redirect('/select-books');
    }

    public function listBooks(Request $request)
    {
        $books = static::BOOKS;

        // 1. You would need to retrieve the first name and last name from the session, and save it to these variable names $first_name, $last_name
        $first_name = $request->session()->get('first_name');
        $last_name = $request->session()->get('last_name');

        return view('books.select-books', compact('books', 'first_name', 'last_name'));
    }


    public function reserveBooks(Request $request)
    {
        $request->session()->forget('books');

        // 1. Save all the selected books array that is stored in a session variable https://laravel.com/docs/9.x/session#storing-data
        foreach ($request->books as $book) {
            $request->session()->push('books', $book);
        }

        return redirect('/thank-you');
    }

    public function showThankYouPage(Request $request)
    {
        $books = static::BOOKS;

        $first_name = $request->session()->get('first_name');
        $last_name = $request->session()->get('last_name');

        $book_codes = $request->session()->get('books');
        $reserved_books = [];

        foreach ($books as $book) {
            if (in_array($book['code'], $book_codes)) {
                array_push($reserved_books, $book);
            }
        }

        $request->session()->flush();
        return view('books.thank-you', compact('first_name', 'last_name', 'reserved_books'));
    }
}
