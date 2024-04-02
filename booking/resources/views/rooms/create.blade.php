@extends('layout.parent')
@section('title', 'Create Room')

@section('main')
    <div class="container-xl px-4 mt-4 m-2">
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <div class="card">
                    <div class="card-header bg-success text-white text-center">
                        Create Room
                    </div>
                    <div class="card-body">
                        <form action="{{route('rooms.store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="roomId" class="form-label">Room Number</label>
                                <input type="text" class="form-control" id="customerName" name="roomNumber">
                            </div>
                            <div class="mb-3">
                                <label for="customerName" class="form-label">Room Type</label>
                                <select class="form-select" id="roomId" name="roomType">
                                    @foreach($roomType as $room)
                                        <option value="{{$room}}">{{$room}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="identification" class="form-label">Availability</label>
                                <select class="form-select" id="roomId" name="availability">
                                    @foreach($roomAvai as $room)
                                        <option value="{{$room}}">{{$room}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-success">Add New</button>
                                <a href="{{route('rooms.index')}}" class="btn btn-success">Trở về</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
