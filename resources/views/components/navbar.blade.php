<ul class="nav justify-content-end p-3 bg-warning text-black">
    <img src="{{ asset('/img/logo.jpg') }}" style="width: 50px; height: 40px; margin-right: 65%;" alt="">
    <li class="nav-item text-black">
      <a class="nav-link active" aria-current="page" href="{{ route('articles.index') }}" style="color:black">Home</a>
    </li>
    @php
        $categories = App\Models\Category::all();
    @endphp
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:black">
          Category
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach ($categories as $item)
            <li><a class="dropdown-item" href="{{ route('articles.byCategory',['id'=>$item->id]) }}">{{ $item->category }}</a></li>
            @endforeach
        </ul>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('articles.writer') }}" style="color:black">Writers</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('articles.aboutus') }}" style="color:black">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('articles.popular') }}" style="color:black">Popular</a>
      </li>
  </ul>
