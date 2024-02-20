@extends("layout.main")
@section("content")

<form action="{{route('post-products')}}" method="post">
    <label for="name" class="form-label">Tên</label>
    <input id="name" type="text" class="form-control" name="name">
    <label for="price" class="form-label mt-3">Giá</label>
    <input id="price" type="number" class="form-control" name="price">
    <button type="submit" name="btn_add" class="btn btn-success mt-3">Add</button>
</form>

@endsection