@extends('layouts.default')

@section('title')

@section('content')

    <h1>Um pouco mais sobre o {{$cafes->name}}</h1>

    <p>Name:  {{$cafes->name}} </p>
    <p>Location:  {{$cafes->location}} </p>
    <p>Description:  {{$cafes->description}} </p>
    <a href="edit/{{$cafes->id}}" type="button"> Edit Coffe </a> <br>
    <form action="/cafe/{{$cafes->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Coffe</button>
    </form>

@endsection
