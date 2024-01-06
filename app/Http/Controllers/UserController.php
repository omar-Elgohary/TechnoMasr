<?php
namespace App\Http\Controllers;
use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users()
    {
        $users = User::where('is_admin', 0)->get();
        return view('users.allUsers', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => encrypt('12345678'),
            'is_admin' => 0,
            'role_id' => $request->role_id,
        ]);

        return redirect()->route('users')->with('message', "User Created Successfully");
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }


    public function edit(Request $request, $id)
    {
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => encrypt('12345678'),
            'is_admin' => 0,
            'role_id' => $request->role_id,
        ]);

        return redirect()->route('users')->with('message', "User Updated Successfully");
    }

    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->route('users')->with('message', "User Deleted Successfully");
    }
}
