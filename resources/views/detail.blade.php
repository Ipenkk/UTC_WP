@extends('layouts.app')

@section('title')
Detail
@endsection

@section('content')
<div class="container-fluid">
    <h2 class='mt-4 mb-2'>{{ $category->category }}</h2>
    <div class="card mb-3">
        <img src="{{ $article->image }}" class="card-img-top w-70" style="height: 450px; border-radius:20px;" alt="...">
        <div class="card-body">
            <p class="card-text"><small class="text-muted">{{ $article->date_published }}|by: {{ $article->writer->name }}</small></p>
          <p class="card-text">{{ $article->content }}</p>
        </div>
      </div>
</div>


@endsection
