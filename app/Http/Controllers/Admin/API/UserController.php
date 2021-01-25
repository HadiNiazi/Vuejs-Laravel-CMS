<?php

namespace App\Http\Controllers\Admin\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
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
        $users = User::paginate(10);
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
        // if(Gate::allows('isAdmin')){
        $request->validate([
            'name' => 'bail|required|max:30',
            'email' => ['bail','required', 'string', 'email', 'max:255'],
            'bio' => 'nullable|max:50',
            'type' => 'required',
            'password' => 'nullable|max:20'
        ]);
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'type' => $request->type,
            'password' => Hash::make($request->password),
            'avatar' => $request->avatar,
            'bio' => $request->bio,
        ]);
        return response()->json($user);
    }
    public function profile()
    {
        // return ['name'=> 'Hadayat Niazi'];
    }
    public function updateUser(Request $request, $id)
    {

        $request->validate([
            'name' => 'bail|required|max:20',
            'bio' => 'nullable|max:80',
            'type' => 'required',
            'password' => 'nullable|max:20'
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'type' => $request->type,
            'password' => Hash::make($request->password),
            'avatar' => $request->avatar,
            'bio' => $request->bio,
        ]);
        return response()->json($user);
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id)->delete();
        return response()->json($user);
    }
    public function findUser($user)
    {
            $user = User::where('name', 'LIKE', '%'.$user. '%')
            ->orwhere('email', 'LIKE', '%'.$user. '%')
            ->orwhere('type', 'LIKE', '%'.$user. '%')
            ->orwhere('bio', 'LIKE', '%'.$user. '%')
            ->paginate(10);

        return response()->json($user);
    }
}
