@extends('layouts.master')

@section('content')
<div class="movies">
    <section class="search-and-user">
        <form>
            <input type="search" placeholder="Search Pages...">
            <button type="submit" aria-label="submit form">
                <svg aria-hidden="true">
                    <use xlink:href="#search"></use>
                </svg>
            </button>
        </form>
        <div class="admin-profile">
            <span class="greeting">Hello admin</span>
            <div class="notifications">
                <span class="badge">1</span>
                <svg>
                    <use xlink:href="#users"></use>
                </svg>
            </div>
        </div>
    </section>
    <section class="movie-list">
       @foreach ($tags as $tag)
            <div class="movie-item">{{$tag->tag_name}}</div>
       @endforeach
    </section>
</div>
@endsection
