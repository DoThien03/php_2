@extends('layout.main')
@section('content')

<table class="table ">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">PRICE</th>
            <th scope="col">ACTION</th>
        </tr>
    </thead>
    @foreach($products as $value)
    <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->price}}</td>
        <td>
            <a href="detail-products/{{$value->id}}" class="btn btn-warning">Sửa</a>
            <a onclick="return confirm('Bạn chắc có muốn xóa!')" href="delete-products/{{$value->id}}" class="btn btn-danger">Xóa</a>


        </td>
    </tr>
    @endforeach
</table>

@endsection