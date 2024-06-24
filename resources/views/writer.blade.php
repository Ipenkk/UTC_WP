@extends('layouts.app')

@section('title')
Writer
@endsection

@section('content')
<div class="container-fluid">
    <h2 class='mb-5 mt-5 p-2'>Our Writers:</h2>

    <div class="row me-auto mb-5">
        @foreach ($writer as $item)
        <div class="col text-center" style="margin-bottom: 8.8%; margin-top: 6%;">
            <a href="{{ route('articles.writerArticle',['id'=>$item->id]) }}">
            <img src="{{ $item->logo }}" style="width: 100px; height:100px;" alt="...">
            </a>
            <div class="text-center">
                <a class='text-decoration-none' href="{{ route('articles.writerArticle',['id'=>$item->id]) }}" style="color:black"><p>{{ $item->name }}</p></a>
                <a class='text-decoration-none' href="{{ route('articles.writerArticle',['id'=>$item->id]) }}" style="color:black"><p>{{ $item->description }}</p></a>
            </div>
          </div>
        @endforeach
    </div>
</div>


@endsection
