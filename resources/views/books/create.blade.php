@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">New book:</div>
               <div class="card-body">
                   <form action="{{ route('book.store') }}" method="POST">
                       @csrf
                       <div class="form-group">
                        <label for="">Title: </label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Book pages: </label>
                        <input type="number" name="pages" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">ISBN NR: </label>
                        <input type="number" name="isbn" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea  id=mce type="text" name="short_description" rows=10 cols=100 class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Author: </label>
                        <select name="author_id" id="" class="form-control">
                                <option value="" selected disabled>Author</option>
                                @foreach ($authors as $author)
                                <option value="{{ $author->id }}">{{ $author->name.' '. $author->surname }}</option>
                                @endforeach
                           </select>
                       </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
 
