@extends('layouts.app')

@section('content')
<a  href="{{route('note.index')}}">Back</a>
    <form method="POST" action="{{route('note.update', $note->id)}}">
        @csrf
        @method('PUT')
        <label for="title">Title</label>
        <input name="title" type="text" value="{{$note->title}}">
        <br>
        @error('title')
            <p style="color: red">{{$message}}</p>
        @enderror
        <label for="description">Description</label>
        <input name="description" type="text" value="{{$note->description}}">
        <br>
        @error('title')
            <p style="color: red">{{$message}}</p>
        @enderror
        <input type="submit" value="Edit">
    </form>
@endsection