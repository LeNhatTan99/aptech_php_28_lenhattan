@extends('layouts.layout')
@section('content')
@if (session('error'))
<div class="alert alert-danger">
    {{session('error')}}
</div>
@endif
<form action="{{route('students.update',['student'=>$student])}}" method="POST">
@csrf
@method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">First Name</label>
      <input type="text" class="form-control" name="first_name" value="{{old('first_name',$student->first_name)}}">
      @if ($errors->has('first_name'))
      <span class="text-danger">
        {{$errors->first('first_name')}}
      </span>
      @endif
    </div>
    <div class="form-group">
        <label >Last Name</label>
        <input type="text" class="form-control" name="last_name" value="{{old('last_name',$student->last_name)}}">
        @if ($errors->has('last_name'))
        <span class="text-danger">
          {{$errors->first('last_name')}}
        </span>
        @endif
      </div> <div class="form-group">
        <label for="exampleInputEmail1">Age</label>
        <input type="text" class="form-control" name="age" value="{{old('age',$student->age)}}">
        @if ($errors->has('age'))
        <span class="text-danger">
          {{$errors->first('age')}}
        </span>
        @endif
      </div> <div class="form-group">
        <label for="exampleInputEmail1">Address</label>
        <input type="text" class="form-control" name="address" value="{{old('address',$student->address)}}">
        @if ($errors->has('address'))
        <span class="text-danger">
          {{$errors->first('address')}}
        </span>
        @endif
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
