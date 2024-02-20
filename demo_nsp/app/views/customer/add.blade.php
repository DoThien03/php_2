@extends("layout.main")
@section("content")

<form action="{{route('post-customers')}}" method="post">
    <label for="name" class="form-label">Tên</label>
    <input id="name" type="text" class="form-control" name="name">
    <label for="age" class="form-label mt-3">Tuổi</label>
    <input id="age" type="number" class="form-control" name="age">
    <button type="submit" name="btn_add" class="btn btn-success mt-3">Add</button>
</form>

@endsection