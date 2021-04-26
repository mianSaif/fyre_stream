<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      // Role::create('name'=>'Administrator');
      // Permission::create(['name'=>'Add User']);
      // $role = Role::findById(1);
      // $role->givePermissionTo(1);
      // auth()->user()->assignRole(1);
        // return view('home');
        return auth()->user()->roles;
    }
}
