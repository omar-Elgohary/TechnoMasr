<?php
namespace App\Http\Controllers;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PermissionController extends Controller
{
    public function permissions()
    {
        $permissions = Permission::get();
        return view('permission.allPermissions', compact('permissions'));
    }

    public function create()
    {
        $roles = Role::get();
        return view('permission.create', compact('roles'));
    }

    public function store(Request $request)
    {
        Permission::create([
            'name' => $request->name,
        ]);

        DB::table('role_permission')->insert([
            'role_id' => $request->role_id,
            'permission_id' => Permission::latest()->first()->id,
        ]);

        return redirect()->route('permissions')->with('message', "Permission Created Successfully");
    }
}
