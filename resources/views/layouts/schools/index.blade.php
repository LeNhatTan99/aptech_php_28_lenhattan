@extends('layouts.layout')
@section('content')
<a href="{{route('schools.create')}}" class="btn btn-success">Create Class</a>
@if ($schools->count())
<table class="table">

    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col"> Name</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($schools as  $school)
          <tr>
            <td>{{$school->id}}</td>
              <td>{{$school->name}}</td>
              <td>{{$school->description}}</td>
              <td>
                <a href="{{route('schools.show',['school'=>$school->id])}}" class="btn btn-primary">View</a>
                <a href="{{route('schools.edit',['school'=>$school->id])}}" class="btn btn-info">Edit</a>
                <form action="{{route('schools.destroy',['school'=>$school->id])}}" style="display: inline-block" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </td>

            </tr>
          @endforeach


      </tbody>
    </table>
    @else
    <h6>Chưa có Class nào được tạo!</h6>

    @endif

@endsection
