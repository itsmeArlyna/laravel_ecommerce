<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Accounts;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(){
        return view('users.login');
    }
    public function create(){
        return view('users.signup');
    }
    public function store(Request $request)
{
    // Validate unique username
    $request->validate([
        'password' => 'required',
        'username' => [
            'required',
            'string',
            'max:255',
            Rule::unique('accounts', 'username'),
            
        ],
    ]);
    Accounts::create($request->all());

    return redirect(route('users.login'))->with('success', 'Account Created Successfully!');
}
    
}
