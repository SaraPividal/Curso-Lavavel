@extends('layouts.app')

@section('content')
@if($errors->any())
<ul>
    @foreach ($errors->all() as $error) 
        <li>{{$error}}</li>
    @endforeach
</ul>
@endif
<a  href="{{route('note.index')}}">Back</a>
    <form method="POST" action="{{route('note.store')}}">
        @csrf
        <label for="title">Title</label>
        <input name="title" type="text"> <br>
        @error('title')
            <p style="color: red">{{$message}}</p>
        @enderror

        <label for="description">Description</label>
        <input name="description" type="text">
        @error('description')
            <p style="color: red">{{$message}}</p>
        @enderror
<br>
        <input type="submit" value="Create">
    </form>
@endsection
