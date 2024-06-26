@extends('layouts.app')

@section('title')
WriterArticle
@endsection

@section('content')
<div class="container-fluid">
    <div class="row mt-2 mb-2">
        <img src="{{ asset( $writer->logo) }}" style="width: 100px; height:75px; border-radius:50%;"alt="">
        <div class="col">
            <p style="color:black; font-weight:bold; margin-left:0.5%;">{{ $writer->name }}</p>
            <p>{{ $writer->description }}</p>
        </div>
    </div>
    @foreach ($articles as $article)
    <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset($article->image) }}" class="img-fluid" style="border-radius:30px;" alt="...">
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
