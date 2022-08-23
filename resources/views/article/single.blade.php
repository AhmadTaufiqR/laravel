@extends('layouts.app')

@section('content')

<div class="mt-5">
<h1>{{ $article->name }}</h1>
<p>
{{ $article->email }}
</p>

<a href="/artikel" class="btn btn-sm btn-info"><<</a>
</div>

@endsection