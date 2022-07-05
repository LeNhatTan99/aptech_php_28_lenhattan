@extends('layouts.layout')
@section('content')
@if (session('error'))
<div class="alert alert-danger">
    {{session('error')}}
</div>
@endif
<form action="{{route('students.store')}}" method="POST">
@csrf
    <div class="form-group">
      <label for="exampleInputEmail1">First Name</label>
      <input type="text" class="form-control" name="first_name">
      @if ($errors->has('first_name'))
      <span class="text-danger">
        {{$errors->first('first_name')}}
      </span>
      @endif
    </div>
    <div class="form-group">
        <label >Last Name</label>
        <input type="text" class="form-control" name="last_name">
        @if ($errors->has('last_name'))
        <span class="text-danger">
          {{$errors->first('last_name')}}
        </span>
        @endif
      </div> <div class="form-group">
        <label for="exampleInputEmail1">Age</label>
        <input type="text" class="form-control" name="age">
        @if ($errors->has('age'))
        <span class="text-danger">
          {{$errors->first('age')}}
        </span>
        @endif
      </div> <div class="form-group">
        <label for="exampleInputEmail1">Address</label>
        <input type="text" class="form-control" name="address">
        @if ($errors->has('address'))
        <span class="text-danger">
          {{$errors->first('address')}}
        </span>
        @endif
      </div>
      @foreach ($schools as $school )
      <div class="form-group form-check">
        <input type="radio" class="form-check-input" value="{{$school->id}}" name="schoolId">
        <label class="form-check-label" >{{$school->name}}</label>
      </div>
      @endforeach
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
