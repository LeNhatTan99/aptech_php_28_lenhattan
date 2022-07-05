@extends('layouts.layout')
@section('content')
@if (session('error'))
<div class="alert alert-danger">
    {{session('error')}}
</div>
@endif
<form action="{{route('schools.store')}}" method="POST">
@csrf
    <div class="form-group">
      <label for="exampleInputEmail1"> Name</label>
      <input type="text" class="form-control" name="name">
      @if ($errors->has('name'))
      <span class="text-danger">
        {{$errors->first('name')}}
      </span>
      @endif
    </div>
    <div class="form-group">
        <label >Description</label>
      <textarea name="description" class="form-control" rows="10"></textarea>
        @if ($errors->has('description'))
        <span class="text-danger">
          {{$errors->first('description')}}
        </span>
        @endif
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
