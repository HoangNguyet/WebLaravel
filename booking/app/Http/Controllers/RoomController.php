<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::orderBy('updated_at', 'desc')->paginate(10);
        return view('rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roomType = ['standard', 'deluxe', 'suite'];
        $roomAvai = ['available', 'occupied', 'under maintenance'];
        return view('rooms.create', compact('roomType', 'roomAvai'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            Room::create($request->all());
            return redirect()->route('rooms.index')->with('mes', 'Add new room successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        return view('rooms.show', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        $roomType = ['standard', 'deluxe', 'suite'];
        $roomAvai = ['available', 'occupied', 'under maintenance'];
        return view('rooms.edit', compact('roomType','roomAvai', 'room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        $room->update($request->all());
        return redirect()->route('rooms.index')->with('mes', 'Update room successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        try {
            $room->delete();
            return redirect()->route('rooms.index')->with('mes', 'Delete room successfully');
        }
        catch (\PDOException $e) {
            return redirect()->route('rooms.index')->with('mes', 'Delete room failed');
        }
    }
}
