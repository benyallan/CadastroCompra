<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function attach(User $user, Permission $permission)
    {
        $user->permissions()->atach($permission->id);
        return response()->json([
            'message' => 'Permissão ' . $permission->permission .
            ' atrelada ao usuário ' . $user->name . ' com sucesso'
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detach(User $user, Permission $permission)
    {
        $user->permissions()->detach($permission->id);
        return response()->json([
            'message' => 'Permissão ' . $permission->permission .
            ' desatrelada do usuário ' . $user->name . ' com sucesso'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sync(User $user, array $permissions)
    {
        $user->permissions()->sync($permissions);
        return response()->json([
            'message' => 'Permissões ' .
            ' atreladas ao usuário ' . $user->name . ' com sucesso'
        ]);
    }
}
