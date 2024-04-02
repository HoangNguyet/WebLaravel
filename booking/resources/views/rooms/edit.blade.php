@extends('layout.parent')
@section('title', 'Update Room')

@section('main')
    <div class="container-xl px-4 mt-4 m-2">
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <div class="card">
                    <div class="card-header bg-success text-white text-center">
                        Create Room
                    </div>
                    <div class="card-body">
                        <form action="{{route('rooms.update',$room)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="roomId" class="form-label">Room Number</label>
                                <input type="text" class="form-control" id="customerName" name="roomNumber" value="{{$room->roomNumber}}">
                            </div>
                            <div class="mb-3">
                                <label for="customerName" class="form-label">Room Type</label>
                                <select class="form-select" id="roomId" name="roomType">
                                    <option value="{{$room->roomType}}">{{$room->roomType}}</option>
                                    @foreach($roomType as $r)
                                        <option value="{{$r}}">{{$r}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="identification" class="form-label">Availability</label>
                                <select class="form-select" id="roomId" name="availability">
                                    <option value="{{$room->availability}}">{{$room->availability}}</option>
                                    @foreach($roomAvai as $r)
                                        <option value="{{$r}}">{{$r}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-success">Save</button>
                                <a href="{{route('rooms.index')}}" class="btn btn-success">Trở về</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
