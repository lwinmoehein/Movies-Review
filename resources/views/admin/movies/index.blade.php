@extends('layouts.master')

@section('content')
<div class="movies">
    @include('admin.reusables.logged-user')
    <form class="search-form" id="search-form" action="{{route('movie.index')}}" method="GET">
        @csrf
    <section class="add-section">
        <div class="search-box-wrapper">
            <input type="text" name="queryString" value="{{old('queryString')??''}}" placeholder="Search by Code or Title">
            <button type="submit" aria-label="submit form">
                <i class="fa fa-search"></i>
            </button>
        </div>
        <button class="btn add-btn"><a href="{{route('movie.create')}}">Create New Movie<i class="ml-2 fa fa-plus"></i></a></button>
    </section>
    <section>
       @include('admin.reusables.filters',['years'=>$years,'countries'=>$countries,'categories'=>$categories])
    </section>
    </form>
    <section class="serie-list">
       @foreach ($movies as $movie)
           @include('admin.movies.movie-item',$movie)
       @endforeach
    </section>
    <div class="pagination-wrapper"><div>{{$movies->links()}}</div></div>
</div>
@endsection
@push('scripts')
    <script>
        function onFiltersChanged(){
            document.getElementById('search-form').submit();
        }

    </script>
@endpush
