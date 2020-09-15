<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
  
        public function index(){
            $authors = \App\Author::orderBy('name')->get();
            return view('books.index', ['books' => Book::orderBy('title')->get(), 'authors' => $authors]);
        }
        public function create(){
            $authors = \App\Author::orderBy('name')->get();
            return view('books.create', ['authors' => $authors]);
        }
        public function store(Request $request){
            $book = new Book();
          
            $book->fill($request->all());
            $book->save();
            return redirect()->route('book.index');
        }
        public function show(Book $book){
            //
        }
        public function edit(Book $book){
            $authors = \App\Author::orderBy('name')->get();
            return view('books.edit', ['book' => $book, 'authors' => $authors]);
        }
        public function update(Request $request, Book $book){
            $book->fill($request->all());
            $book->save();
            return redirect()->route('book.index');
        }
        public function destroy(Book $book){
            $book->delete();
            return redirect()->route('book.index');
        }
    
}
