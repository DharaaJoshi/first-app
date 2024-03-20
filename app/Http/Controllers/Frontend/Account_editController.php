<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\User;


class Account_editController extends Controller
{
    public function index()
    {
        return view('Frontend.account_edit');
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('user_edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . auth()->id(),
        ]);
    
        $user = auth()->user();
    
        // \DB::table('users')
        //     ->where('id', $user->id)
        //     ->update([
        //         'name' => $request->name,
        //         'email' => $request->email,
        //     ]);
    
        return redirect()->back()->with('success', 'User details updated successfully.');
    
        }
    }