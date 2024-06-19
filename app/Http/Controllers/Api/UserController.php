<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Mendapatkan semua data
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    // Menambah data baru
    public function store(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    // Mendapatkan data berdasarkan ID
    public function show($id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            return response()->json(['error' => 'Data not found'], 404);
        }
        return response()->json($user);
    }

    // Mengupdate data berdasarkan ID
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            return response()->json(['error' => 'Data not found'], 404);
        }
        $user->update($request->all());
        return response()->json($user);
    }

    // Menghapus data berdasarkan ID
    public function destroy($id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            return response()->json(['error' => 'Data not found'], 404);
        }
        $user->delete();
        return response()->json(['message' => 'Data deleted'], 204);
    }
}

