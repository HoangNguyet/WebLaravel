@extends('layout.parent')
@section('title', 'Trường Đại Học Thủy Lợi')

@section('main')
    <div class="container mt-5">
        <h3 class="text-center text-success mb-4">LIST ROOM</h3>
        <a class="btn btn-success mb-3" href="{{ route('rooms.create') }}"><i class="fa-solid fa-circle-plus"></i>Add New Room</a>

        <div class="table-responsive">
            <table class="table table-bordered table-success table-striped">
                <thead>
                <tr>
                    <th scope="col">Room Number</th>
                    <th scope="col">Room Type</th>
                    <th scope="col">Availability</th>
                    <th scope="col" colspan="3" class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                @php($i = 1)
                @foreach($rooms as $item)
                    <tr>
                        <td>{{ $item->roomNumber}}</td>
                        <td>{{ $item->roomType}}</td>
                        <td>{{ $item->availability}}</td>
                        <td class="text-center">
                            <a class="btn btn-primary" href="{{ route('rooms.show', $item->id) }}"><i class="fa-regular fa-eye"></i></a>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-warning" href="{{ route('rooms.edit', $item->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this room?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <form action="{{ route('rooms.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
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
            {{ $rooms->links() }}
        </div>
    </div>

    {{--    infor--}}
    <div id="myDialog" style="display: none;" class="px-5 py-3 rounded-3">
        <h4 class="text-primary fw-bold fs-4">Notification</h4>
        <p class="text-success">{{ session('mes') }}</p>
        <button id="confirmButton" class="float-end rounded-2">OK</button>
    </div>
    <style>
        #myDialog {
            position: fixed;
            width: 500px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #ffffff;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        #confirmButton {
            padding: 10px 20px;
            background: #007bff;
            color: #ffffff;
            border: none;
            cursor: pointer;
        }
    </style>
    @if(session('mes'))
        <script>
            var dialog = document.getElementById("myDialog");
            var confirmButton = document.getElementById("confirmButton");

            dialog.style.display = "block";
            confirmButton.addEventListener("click", function() {
                dialog.style.display = "none";
            });
            // alert("{{ session('Success') }}")
        </script>
    @endif

@endsection
