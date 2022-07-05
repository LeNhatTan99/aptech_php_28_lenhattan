@extends('layouts.layout')
@section('content')
<h4>Thông tin Class</h4>
<table class="table">

    <tr>
        <td>Class Name:</td>
        <td>{{$school->name}}</td>
    </tr>
    <tr>
        <td>Description:</td>
        <td>{{$school->description}}</td>
    </tr>
</table>
<a href="{{route('schools.index')}}" class="btn btn-success">Quay lại</a>


@endsection
