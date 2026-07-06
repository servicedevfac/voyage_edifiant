<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class RoleController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return[
            new Middleware('permission:view roles', ['only' => ['index']]),
            new Middleware('permission:create roles', ['only' => ['create']]),
            new Middleware('permission:edit roles', ['only' => ['edit']]),
            new Middleware('permission:delete roles', ['only' => ['destroy']]),
        ];
    }

    public function index()
    {
        $roles = Role::all();
        return view('dashboard.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('dashboard.roles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
<<<<<<< HEAD
            'name' => 'required|max:255',
        ]);

        $role = $request->name;

        Role::create([
            'name' => $role
=======
            'name' => 'required|max:255|unique:roles,name',
        ]);

        Role::create([
            'name' => $request->name
>>>>>>> djuedev
        ]);

        return redirect()->route('roles.index')->with('status', 'Role enregistré avec succès');

    }

    public function edit(Role $role)
    {
        return view('dashboard.roles.edit', compact("role"));
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|string|unique:roles,name,'.$role->id
        ]);

        $role->update([
            'name' => $request->name
        ]);

        return redirect('roles')->with('status','Role Modifié avec succès');
    }

    public function destroy($roleId)
    {
        $role = Role::find($roleId);
        $role->delete();
        return redirect('roles')->with('status','Role supprimé avec succès');
    }

    public function addPermissionToRole($roleId)
    {
        $permissions = Permission::get();
        $role = Role::findOrFail($roleId);
<<<<<<< HEAD
        $rolePermissions = DB::table('role_has_permissions')
                                ->where('role_has_permissions.role_id', $role->id)
                                ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
                                ->all();
=======
        
        // Utilisation de la relation Eloquent de Spatie au lieu du Query Builder
        $rolePermissions = $role->permissions->pluck('id', 'id')->all();
>>>>>>> djuedev

        return view('dashboard.roles.add-permissions', [
            'role' => $role,
            'permissions' => $permissions,
            'rolePermissions' => $rolePermissions
        ]);
    }

    public function givePermissionToRole(Request $request, $roleId)
    {
        $request->validate([
            'permission' => 'required'
        ]);

        $role = Role::findOrFail($roleId);
        $role->syncPermissions($request->permission);

        return redirect()->back()->with('status','Permissions added to role');
    }
}
