<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Led;
use Illuminate\Http\Request;

class LedController extends Controller
{
    // Mendapatkan semua data
    public function index()
    {
        $leds = Led::all();
        return response()->json($leds);
    }

    // Menambah data baru
    public function store(Request $request)
    {
        $status = $request->input('status');

        if ($status == 0) {
            $request['status'] = 'off';
        } elseif ($status == 1) {
            $request['status'] = 'nyala';
        }

        $led = Led::create($request->all());
        return response()->json($led, 201);
    }

    // Mendapatkan data berdasarkan ID
    public function show($id)
    {
        $led = Led::find($id);
        if (is_null($led)) {
            return response()->json(['error' => 'Data not found'], 404);
        }
        return response()->json($led);
    }

    // Mengupdate data berdasarkan ID
    public function update(Request $request, $id)
    {
        $led = Led::find($id);
        if (is_null($led)) {
            return response()->json(['error' => 'Data not found'], 404);
        }

        $status = $request->input('status');

        if ($status == 0) {
            $request['status'] = 'off';
        } elseif ($status == 1) {
            $request['status'] = 'nyala';
        }

        $led->update($request->all());
        return response()->json($led);
    }

    // Menghapus data berdasarkan ID
    public function destroy($id)
    {
        $led = Led::find($id);
        if (is_null($led)) {
            return response()->json(['error' => 'Data not found'], 404);
        }
        $led->delete();
        return response()->json(['message' => 'Data deleted'], 204);
    }
}
