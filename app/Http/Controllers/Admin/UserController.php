<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\AdminModel;
use App\Models\Admin\RolesModel;

class UserController extends Controller
{
    public function index(){
        $admin = AdminModel::with('roles')->orderBy('id','DESC')->paginate(5);
        return view('admin.users.all_users',compact('admin'));
    }

    public function assign_roles(Request $request){
        $user = AdminModel::where('email',$request->email)->first();
        $user->roles()->detach();
        if($request->author_role){
            $user->roles()->attach(RolesModel::where('name','author')->first());
        }
        if($request->admin_role){
            $user->roles()->attach(RolesModel::where('name','admin')->first());
        }
        if($request->user_role){
            $user->roles()->attach(RolesModel::where('name','user')->first());
        }
        return redirect()->back()->with('message','Cấp quyền thành công');
    }
}
