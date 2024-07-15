@extends('layout')

@section('title', 'Cập nhật sách')

@section('content')
{{-- @dd($books) --}}
    <form action="{{ route('book.update', $book) }}" method="post">

        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tên sách</label>
            <input type="text" name="title" value="{{$book->title}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputtext1" class="form-label">Hình ảnh</label>
            <input type="text" name="thumbnail" value="{{$book->thumbnail}}" class="form-control" id="exampleInputtext1">
            <img src="{{$book->thumbnail}}" width="70">
        </div>

        <div class="mb-3">
            <label for="exampleInputtext1" class="form-label">Tác giả</label>
            <input type="text" name="author" value="{{$book->author}}" class="form-control" id="exampleInputtext1">
        </div>

        <div class="mb-3">
            <label for="exampleInputtext1" class="form-label">Nhà xuất bản</label>
            <input type="text" name="publisher" value="{{$book->publisher}}"  class="form-control" id="exampleInputtext1">
        </div>

        <div class="mb-3">
            <label for="exampleInputtext1"  class="form-label">Ngày xuất bản</label>
            <input type="text" name="publication" value="{{$book->publication}}"  class="form-control" id="exampleInputtext1">
        </div>

        <div class="mb-3">
            <label for="exampleInputtext1" class="form-label">Giá tiền</label>
            <input type="text" name="price" value="{{$book->price}}"  class="form-control" id="exampleInputtext1">
        </div>


        <div class="mb-3">
            <label for="exampleInputtext1" class="form-label">Số lượng</label>
            <input type="text" name="quantity" value="{{$book->quantity}}"  class="form-control" id="exampleInputtext1">
        </div>



        <div class="mb-3">
            <label for="exampleInputtext1" class="form-label">Danh mục</label>
            <select class="form-control" name="category_id" aria-label="Default select example">
                {{-- @dd($data) --}}
                @foreach ($data as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary w-100">Cập nhật</button>
    </form>
@endsection
