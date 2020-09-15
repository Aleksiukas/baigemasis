@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        <tr>
            <th>Title</th>
            <th>Book pages</th>
            <th>Isbn nr.</th>
            <th>Description</th>
            <th>Author</th>
            <th>Actions</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->pages }}</td>
            <td>{{ $book->isbn }}</td>
            <td>{!! $book->short_description !!}</td>
            <td>{{ $book->author->name.' '. $book->author->surname }}</td>
            <td>
                <form action={{ route('book.destroy', $book->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('book.edit', $book->id) }}>Edit</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('book.create') }}" class="btn btn-success">Add new</a>
    </div>
</div>
@endsection