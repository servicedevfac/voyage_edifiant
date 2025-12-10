<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return[
            new Middleware('permission:view permissions', ['only' => ['index']]),
            new Middleware('permission:create permissions', ['only' => ['create']]),
            new Middleware('permission:edit permissions', ['only' => ['edit']]),
            new Middleware('permission:delete permissions', ['only' => ['destroy']]),
        ];
    }
    
    public function index()
    {
        $permissions = Permission::get();
        return view('dashboard.permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('dashboard.permissions.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'titre' => [
                'required','string','unique:permissions,name'
            ]
        ]);

        Permission::create([
            'name' => $request->titre,
        ]);


        return redirect()->route('permissions.index')->with('status', 'Permission enregistrée avec succès');
    }

    public function edit(Permission $permission)
    {
        return view('dashboard.permissions.edit', compact('permission'));
    }

    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'titre' => 'required|string|unique:permissions,name,'.$permission->id
        ]);

       $permission->name = $request->titre;
       $permission->save();

        return redirect()->route('permissions.index')->with('status', 'Permission modifiée avec succès');
    }

    public function destroy($permissionId)
    {
        $permission = Permission::find($permissionId);
        $permission->delete();
        return redirect('permissions')->with('status', 'Permission supprimée avec succès');
    }


}
