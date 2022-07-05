@extends('layouts.layout')
@section('content')
@if ($schools->count())



<a href="{{route('students.create')}}" class="btn btn-success">Create Student</a>
@if ($students->count())
<table class="table">

    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Age</th>
          <th scope="col">Address</th>

          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($students as  $student)
          <tr>
            <td>{{$student->id}}</td>
              <td>{{$student->first_name}}</td>
              <td>{{$student->last_name}}</td>
              <td>{{$student->age}}</td>
              <td>{{$student->address}}</td>

              <td>
                <a href="{{route('students.show',['student'=>$student->id])}}" class="btn btn-primary">View</a>
                <a href="{{route('students.edit',['student'=>$student->id])}}" class="btn btn-info">Edit</a>
                <form method="POST" action="{{route('students.destroy',['student'=>$student->id])}}" style="display: inline-block">
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
    <h6>Chưa có student nào được tạo!</h6>

    @endif

    @else
    <h5 class="text-danger">Chưa có Class nào được tạo! Đi đến trang Class để tạo Class trước</h5>
    @endif
@endsection
