<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function add() {
        return view('user.add');
    }
    
    public function create() {
        $user = User::where('phone', request('phone'))->Orwhere('username', request('username'))->get();
        $username = Arr::first(explode(' ', preg_replace('/\s+/', ' ', strtolower(request('name'))))) . request('username');
        
        if($user->isEmpty()) {
            User::insert([
                'name' => request('name'),
                'phone' => request('phone'),
                'username' => $username,
                'password' => Hash::make(request('username')),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
            return ['status' => 'success', 'message' => 'User created successfully.'];
        }

        return ['status' => 'error', 'message' => 'User with given credentails exist.'];
    }

    public function list() {
        $users = User::orderByDesc('id')->get();
        return view('user.list')
            ->withUsers($users);
    }
}
