@extends('layouts.app')

@section('content')

<h1>Bikin Artikel Baru</h1>
 

<form action="/artikel" method = "post">
    
    @csrf
    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" class= "form-control" id="name" name = "name" value = "{{old('name')}}">

        @error('name')
         <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mt-3">
        <label for="email">Email</label>
        <input type="text" class= "form-control" id="email" name = "email" value = "{{old('email')}}">
        @error('email')
         <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>

@endsection