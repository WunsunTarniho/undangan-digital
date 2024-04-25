<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){

        static::middleware();

        return view('users', [
            'title' => 'Semua Pengguna',
            'users' => User::OrderBy('name')->paginate(5),
        ]);
    }

    public function create(){

        static::middleware();

        return view('auth.register', [
            'title' => 'Register',
        ]);
    }

    public function store(Request $request){
        
        static::middleware();

        $validated = $request->validate([
            'name' => 'required',
            'password' => 'required|min:8',
            'level' => 'required',
        ], [
            'password' => 'Kolom ini harus diisi dan minimal 8 karakter',
        ]);

        User::create($validated);

        return redirect('/users')->with('success', 'User Baru berhasil ditambahkan');
    }

    public function edit(String $id){

        static::middleware();

        $user = User::find($id);

        return view('update.user', [
            'title' => $user->name,
            'user' => $user,
        ]);
    }

    public function update(Request $request , String $id){

        static::middleware();

        $user = User::find($id);

        $validated = $request->validate([
            'name' => 'required',
            'password' => 'required|min:8',
        ], [
            'password' => 'Kolom ini harus diisi dan minimal 8 karakter'
        ]);

        if(!Hash::check($user->password, Hash::make($validated['password'])) && !$user->name != $validated['name']){
            $validated['password'] = bcrypt($validated['password']);
            $user->update($validated);
        }

        return redirect('/users');
    }

    public function destroy(String $id){
        static::middleware();

        User::find($id)->delete();

        return back()->with('success', 'Pengguna berhasil dihapus!');
    }

    public function login(){
        return view('auth.login', [
            'title' => 'Login',
        ]);
    }

    public function auth(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'password' => 'required|min:8',
        ], [
            'name' => 'Kolom ini harus diisi',
            'password' => 'Kolom ini harus diisi dan minimal 8 karakter',
        ]);

        if(Auth::attempt($validated)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('fail', 'Username and Password wrong! Please try again!')->withInput();
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->intended('/auth/login');
    }

    protected function middleware(){
        Gate::allows('user') ? abort(403) : false;
    }
}
