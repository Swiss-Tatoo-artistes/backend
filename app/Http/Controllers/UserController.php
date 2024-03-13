<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private function validateUser(Request $request)
    {
        // Validations of the datas
        $request->validate([
            'name' => 'string|required',
            'lastname' => 'string|required',
            'pseudo' => '',
            'is_tattoo_artist' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
    }

    //Display all the users
    public function index()
    {
        $users = User::get();

        return response()->json(['users' => $users], 200);
    }

    // Display a specific user
    public function show($id)
    {
        $user = User::find($id);

        if ($user) {
            return response()->json(['user' => $user], 200);
        } else {
            return response()->json(['message' => 'User not found'], 404);
        }
    }

    // Create a new user
    public function create(Request $request)
    {
        $this->validateUser($request);

        $newUser = new User();
        $newUser->fill($request->all());
        $newUser->save();

        if ($newUser) {
            return response()->json(['message' => 'User created successfully'], 201);
        } else {
            return response()->json(['message' => 'Failed to create user'], 500);
        }
    }

    // Update a specific user
    public function update(Request $request, $id)
    {
        $this->validateUser($request);

        $updateUser = User::find($id);
        if (!$updateUser) {
            return response()->json(['message' => 'User not found'], 400);
        }

        $updateUser->fill($request->all());
        $updateUser->save();

        return response()->json(['mesasge' => 'User updated successfully'], 200);
    }

    //delete a specific user
    public function delete($id)
    {
        $deleted = User::destroy($id);

        if ($deleted) {
            return response()->json(['message' => 'User deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Failed to delete user'], 404);
        }
    }
}
