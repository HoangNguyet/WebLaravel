@extends('layout.parent')
@section('title', 'Trường Đại Học Thủy Lợi')

@section('main')
    <div class="container mt-5">
        <h3 class="text-center text-success mb-4">DANH SÁCH SINH VIÊN</h3>
        <a class="btn btn-success mb-3" href="{{ route('rentals.create') }}"><i class="bi bi-plus-circle"></i> Thêm Sinh Viên Mới</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered table-success table-striped">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên khách Hàng</th>
                    <th scope="col">Số chứng minh</th>
                    <th scope="col">Ngày vào</th>
                    <th scope="col">Ngày ra</th>
                    <th scope="col">Số giờ</th>
                    <th scope="col">Đơn giá</th>
                    <th scope="col">Thành tiền</th>
                    <th scope="col" colspan="3" class="text-center">Thao Tác</th>
                </tr>
                </thead>
                <tbody>
                @php($i = 1)
                @foreach($rentals as $item)
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $item->customerName }}</td>
                        <td>{{ $item->identification}}</td>
                        <td>{{ $item->checkin}}</td>
                        <td>{{ $item->checkout}}</td>
                        <td>{{ $item->numberofhour}}</td>
                        <td>{{ $item->getPrice()}}</td>
                        <td>{{ $item->totalmoney}}</td>
                        {{--                        <td>{{ $item->getCoursename()}}</td>--}}
                        <td class="text-center">
                            <a class="btn btn-primary" href="{{ route('rentals.show', $item->id) }}"><i class="bi bi-eye"></i></a>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-warning" href="{{ route('rentals.edit', $item->id) }}"><i class="bi bi-pencil-square"></i></a>
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}">
                                <i class="bi bi-trash3"></i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Xác Nhận Xóa</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Bạn có chắc muốn xóa không?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                            <form action="{{ route('rentals.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Xóa</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $rentals->links() }}
        </div>
    </div>
@endsection
@section('thuvien')
    <script>
        $(document).ready(function() {
            $('#successModal').modal('show');
        });
    </script>
@endsection
