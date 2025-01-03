@extends('layout.main')

@section('container')
    <h1 style="text-align: center">Informasi Tempe</h1> <br>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/blogs?category={{ $category->slug }}">
                        <div class="card bg-dark text-white">
                            <img src="https://picsum.photos/500/400" class="card-img" alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                              <h5 class="card-title flex-fill text-center p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection