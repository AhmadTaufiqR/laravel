@extends('layouts.app')

@section('content')

<h1>Edit Artikel</h1>
 

<form action="/artikel/{{$article->id}}" method = "post">
    
    @csrf

    @method('PUT')
    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" class= "form-control" id="name" name = "name" value = "{{old('name') ? old('name') : $article->name}}">

        @error('name')
         <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mt-3">
        <label for="email">Email</label>
        <input type="text" class= "form-control" id="email" name = "email" value = "{{old('email') ? old('name') : $article->email}}">
        @error('email')
         <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-sm btn-info mt-3">EDIT</button>
</form>

@endsection