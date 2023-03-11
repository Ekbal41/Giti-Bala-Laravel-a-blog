<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    //
    public function index()
    {
        $rols = Role::all();
        return view('role.index', compact('rols'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'role' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();
        $user->assignRole($request->role);

        return back()->with('success', 'Role assigned successfully');
    }
}
