<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index() {
        return view('authors.index', ['authors' => Author::orderBy('name')->get()]);
    }
    public function create() {
        return view('authors.create');
    }
    public function store(Request $request) {
        $author = new Author();
     
        $author->fill($request->all());
        $author->save();
        return redirect()->route('author.index');
    }
    public function edit(author $author){
        return view('authors.edit', ['author' => $author]);
    }
 
    public function update(Request $request, author $author){
        $author->fill($request->all());
        $author->save();
        return redirect()->route('author.index');
    }
 
     public function destroy(author $author){
         $author->delete();
         return redirect()->route('author.index');
     }
}
  