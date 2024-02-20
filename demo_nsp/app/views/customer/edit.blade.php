@extends("layout.main")
@section("content")

<form method="post" action="{{route('edit-customers', ['id' => $customers->id])}}">
    <input type="hidden" name="id" value="{{$customers->id}}">
    <label for="name" class="form-label">Tên</label>
    <input id="name" type="text" class="form-control" name="name" value="{{$customers->name}}">
    <label for="age" class="form-label mt-3">Giá</label>
    <input id="age" type="text" class="form-control" name="age" value="{{$customers->age}}">
    <button type="submit" name="btn_edit" class="btn btn-warning mt-3">Edit</button>
</form>

</form>

@endsection