@extends('layouts.app')


@section('content')

<h1>Hallo Ini Koding</h1>
<a href='/artikel/create' class="btn btn-primary mb-2" >Buat Artikel+</a>

@foreach($articles as $article)
   <div class="card mb-3">
    <div class="card-body text-dark">
        <p> <strong>{{ ucfirst ($article->name)}} </strong></p>
        <p>Email : {{ ucfirst ($article->email) }}</p>
        <a href="/artikel/{{$article->name}}" class = "btn btn-info btn-sm">Baca</a>
        <a href="/artikel/{{$article->id}}/edit" class = "btn btn-info btn-sm">Edit</a>

        <form action="/artikel/{{$article->id}}" method = "post">
            @csrf
            @method('DELETE')

            <button class= "btn btn-sm btn-info btn-danger mt-2">DELETE</button>

        </form>

    </div>
    </div>
@endforeach

<div>
    {{$articles->links()}}
</div>



@endsection