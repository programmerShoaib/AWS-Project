<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller {
    public function index(){ return view('users.index',['users'=>User::all()]); }
    public function create(){ return view('users.create'); }
    public function store(Request $r){ User::create($r->all()); return redirect('/')->with('success','User created'); }
    public function edit(User $user){ return view('users.edit',compact('user')); }
    public function update(Request $r, User $user){ $user->update($r->all()); return redirect('/')->with('success','User updated'); }
    public function destroy(User $user){ $user->delete(); return redirect('/')->with('success','User deleted'); }
}
