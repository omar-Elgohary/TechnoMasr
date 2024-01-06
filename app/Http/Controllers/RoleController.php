<?php
namespace App\Http\Controllers;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function roles()
    {
        $roles = Role::get();
        return view('roles.allRoles', compact('roles'));
    }

    public function create()
    {
        return view('roles.create');
    }

    public function store(Request $request)
    {
        Role::create([
            'name' => $request->name,
        ]);

        return redirect()->route('roles')->with('message', "Role Created Successfully");
    }
}
