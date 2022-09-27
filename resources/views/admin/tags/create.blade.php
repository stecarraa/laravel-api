@extends('layouts.app')
@section('title', 'tag')


@section('content')


<div class="container d-flex p-5 text-center">
  <form action="{{ route('admin.tags.store', $tag->id) }}" method="POST">
    @csrf
    @method('POST')
    <div class="form-group mb-4">
        <label for="name">Name</label>
        <input required name="name" type="text" class="form-control" id="name" placeholder="Enter name">
    </div>
  
    <div class="w-100 text-center">
      <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
@endsection