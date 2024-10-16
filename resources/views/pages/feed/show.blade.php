@extends('layouts.main')

@section('title', 'Show List')

@section('content')

<form action="{{ route('feed.update', ['feed' => $feed->id]) }}" method="POST">
    @csrf 
    @method('PUT')

 <div class="container">
  <div class="form-group">
    <label for="title" class="form-label">Feed Title</label>
    <input type="text" name ="title" id="title"class="form-control" value=" {{ old('title', $feed->title)}}">
  </div>

  <div class="form-group">
    <label for="title" class="form-label">Description</label>
    <textarea class="form-control" id="description" name="description" cols="30" row="30">value=" {{ old('title', $feed->description)}}"</textarea>
    
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Update Feed</button>

 </div>
</form>
@endsection
