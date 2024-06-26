@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')
<img class="w-100" style=" width: 100%; height: 300px" src="{{ asset('img/15.jpg') }}" alt="">
<div class="container">
    @foreach($articles as $article)
    <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset($article->image) }}" class="img-fluid" style="border-radius:30px;" alt="">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{ $article->title }}</h5>
              <p class="card-text"><small class="text-muted">{{ $article->date_published }}| by: {{ $article->writer->name }}</small></p>
              <p class="card-text">{{ $article->slug }}..</p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('articles.detail',['id'=>$article->id]) }}">
                <button class="btn btn-primary" type="button">read more..</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

@endsection
