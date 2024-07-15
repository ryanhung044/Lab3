@extends('layout')

@section('title', 'Thêm mới sách')

@section('content')
    <form action="{{ route('book.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tên sách</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>
        <div class="mb-3">
            <label for="exampleInputtext1" class="form-label">Hình ảnh</label>
            <input type="text" name="thumbnail" class="form-control" id="exampleInputtext1">
        </div>

        <div class="mb-3">
            <label for="exampleInputtext1" class="form-label">Tác giả</label>
            <input type="text" name="author" class="form-control" id="exampleInputtext1">
        </div>

        <div class="mb-3">
            <label for="exampleInputtext1" class="form-label">Nhà xuất bản</label>
            <input type="text" name="publisher" class="form-control" id="exampleInputtext1">
        </div>

        <div class="mb-3">
            <label for="exampleInputtext1" class="form-label">Ngày xuất bản</label>
            <input type="text" name="publication" class="form-control" id="exampleInputtext1">
        </div>

        <div class="mb-3">
            <label for="exampleInputtext1" class="form-label">Giá tiền</label>
            <input type="text" name="price" class="form-control" id="exampleInputtext1">
        </div>


        <div class="mb-3">
            <label for="exampleInputtext1" class="form-label">Số lượng</label>
            <input type="text" name="quantity" class="form-control" id="exampleInputtext1">
        </div>



        <div class="mb-3">
            <label for="exampleInputtext1" class="form-label">Danh mục</label>
            <select class="form-control"  name="category_id" aria-label="Default select example">
                @foreach ($data as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary w-100">Thêm mới</button>
    </form>
@endsection
