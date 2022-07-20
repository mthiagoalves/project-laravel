@extends('layouts.default')

@section('title')

@section('content')


<div class="col-md-12" id="search-container">

    <h1>Search your coffe</h1>

    <form action="" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Search...">
    </form>

</div>


<div class="card-container">
    <div class="container">
        <div class="cards">
            @foreach ($cafes as $cafe)
                <p>Name:  {{$cafe->name}} </p>
                <p>Location:  {{$cafe->location}} </p>
                <p>Description:  {{$cafe->description}} </p>
                <a href="cafe/{{$cafe->id}}"> About Coffe </a>
            @endforeach
        </div>
    </div>
</div>

@endsection
