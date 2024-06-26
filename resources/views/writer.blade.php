@extends('layouts.app')

@section('title')
Writer
@endsection

@section('content')
<div class="container-fluid">
    <h2 class='mb-5 mt-5 p-2'>Our Writers:</h2>

    <div class="row me-auto mb-5">
        @foreach ($writer as $item)
        <div class="col text-center" style="margin-bottom: 7%; margin-top: 5.8%;">
            <a href="{{ route('articles.writerArticle',['id'=>$item->id]) }}">
            <img src="{{ $item->logo }}" style="width: 120px; height:120px; border-radius:50%;" alt="...">
            </a>
            <div class="text-center mt-2">
                <a class='text-decoration-none' href="{{ route('articles.writerArticle',['id'=>$item->id]) }}" style="color:black; font-weight:bold;"><p>{{ $item->name }}</p></a>
                <a class='text-decoration-none' href="{{ route('articles.writerArticle',['id'=>$item->id]) }}" style="color:black"><p>{{ $item->description }}</p></a>
            </div>
          </div>
        @endforeach
    </div>
</div>


@endsection
