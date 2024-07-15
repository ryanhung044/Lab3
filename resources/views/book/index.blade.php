@extends('layout')

@section('title', 'danh sách sách')

@section('content')
<a class="btn btn-success" href="{{ route('book.create') }}">Thêm mới</a>
    <table class="table w-100">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên sách</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Tác giả</th>
                <th scope="col">Nhà xuất bản</th>
                <th scope="col">Ngày xuất bản</th>
                <th scope="col">Giá bán</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->title }}</td>
                    <td><img src="{{ $item->thumbnail }}" width="60" /></td>
                    <td>{{ $item->author }}</td>
                    <td>{{ $item->publisher }}</td>
                    <td>{{ $item->publication }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->category_id }}</td>
                    <td style="width: 1%" class="text-nowrap">
                        <a class="btn btn-warning" href="{{ route('book.edit', $item) }}">Sửa</a>
                        <form action="{{ route('book.destroy', $item) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không?')" type="submit"
                                href="{{ route('book.edit', $item) }}">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
