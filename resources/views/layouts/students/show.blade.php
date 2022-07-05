@extends('layouts.layout')
@section('content')
<h4>Thông tin student</h4>
<table class="table">
    <tr>
        <td>Full Name:</td>
        <td>{{$student->first_name.' '.$student->last_name}}</td>
    </tr>
    <tr>
        <td>Age:</td>
        <td>{{$student->age}}</td>
    </tr>
    <tr>
        <td>Address:</td>
        <td>{{$student->address}}</td>
    </tr>
</table>
<a href="{{route('students.index')}}" class="btn btn-success">Quay lại</a>


@endsection
