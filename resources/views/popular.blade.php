@extends('layouts.app')

@section('title')
Popular
@endsection

@section('content')
<div class="container-fluid">
    <h2 class='mt-4 mb-5'>Popular</h2>
</div>
<div class="container">
    @foreach($articles as $article)
    <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset($article->image) }}" class="img-fluid" style="border-radius:30px;" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{ $article->title }}</h5>
              <p class="card-text"><small class="text-muted">{{ $article->date_published }}| {{ $article->writer->name }}</small></p>
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
      <nav aria-label="...">
        <ul class="pagination pagination-sm justify-content-center">
          {{$articles->links()}}
        </ul>
      </nav>
    </div>

@endsection
