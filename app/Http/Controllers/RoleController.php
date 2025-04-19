<?php
namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function role($id) {
        $role = Role::find($id);
    
        if (!$role) {
            abort(404, 'Role not found');
        }
    
        $data = [
            'role' => $role,
            'users' => $role->users
        ];
    
        return view('role.view', $data);
    }
    
}
