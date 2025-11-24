<?php

namespace App\Http\Controllers\App;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(Request $request): View
    {
        $users = User::orderBy('id', 'desc')->paginate(10);
        return view('app.users.index', ['users' => $users]);
    }

    public function show(User $user): View
    {
        return view('app.users.show', ['user' => $user]);
    }

    public function create(Request $request): View
    {
        return view('app.users.form');
    }

    public function store(Request $request): void
    {
        
    }

    public function edit(User $user): View
    {
        return view('app.users.form', ['user' => $user]);
    }

    public function update(User $user): void
    {
        
    }

    public function destroy(User $user): void
    {
        
    }
}
