@extends('layout.main')
@section('content')

<table class="table ">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">AGE</th>
            <th scope="col">ACTION</th>
        </tr>
    </thead>
    @foreach($customers as $value)
    <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->age}}</td>
        <td>
            <a href="detail-customers/{{$value->id}}" class="btn btn-warning">Sửa</a>
            <a onclick="return confirm('Bạn chắc có muốn xóa!')" href="delete-customers/{{$value->id}}" class="btn btn-danger">Xóa</a>


        </td>
    </tr>
    @endforeach
</table>

@endsection