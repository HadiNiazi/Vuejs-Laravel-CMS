<?php

namespace App\Http\Controllers\Admin\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:api');
    }
    public function index()
    {
        $users = User::latest()->get();
        return response()->json($users);
    }
    public function store(Request $request)
    {
       $request->validate([
            'name' => 'bail|required|max:20',
            'email' => ['bail','required', 'string', 'email', 'max:255',
            Rule::unique('users')],
            'bio' => 'nullable|max:50',
            'type' => 'required',
            'password' => 'required|max:20'

        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'bio' => $request->bio,
            'type' => $request->type,
            'password' => Hash::make($request->password),
        ]);
        return response()->json($user);
    }
    public function update(Request $request ,$id)
    {
        $request->validate([
            'name' => 'bail|required|max:20',
            'email' => ['bail','required', 'string', 'email', 'max:255'],
            'bio' => 'nullable|max:50',
            'type' => 'required',
            'password' => 'nullable|max:20'
        ]);
        $user = User::findOrFail($id)->update($request->all());

        return response()->json($user);
    }
    public function profile()
    {
        return auth()->user();
    }
}
