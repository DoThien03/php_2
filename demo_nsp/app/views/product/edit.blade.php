@extends("layout.main")
@section("content")

<form method="post" action="{{route('edit-products', ['id' => $product->id])}}">
    <input type="hidden" name="id" value="{{$product->id}}">
    <label for="name" class="form-label">Tên</label>
    <input id="name" type="text" class="form-control" name="name" value="{{$product->name}}">
    <label for="price" class="form-label mt-3">Giá</label>
    <input id="price" type="text" class="form-control" name="price" value="{{$product->price}}">
    <button type="submit" name="btn_edit" class="btn btn-warning mt-3">Edit</button>
</form>

</form>

@endsection