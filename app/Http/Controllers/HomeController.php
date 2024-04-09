<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

    public function Login()
    {
        return view('Account.Login');
    }
    public function Slogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $user = User::where('username', $username)->first();

        if ($user && Hash::check($password, $user->password)) {
            Auth::login($user);
            return redirect()->route('Register');
        } else {
            return redirect()->route('Login')->with('error', 'Invalid username or password.');
        }
    }


    public function Register()
    {
        return view('Account.Register');
    }
    public function store(StoreRequest $request)
    {
        $student = new User;
        $student->name = $request->input('name');
        $student->number = $request->input('number');
        $student->address = $request->input('address');
        $student->email = $request->input('email');
        $student->pan = $request->input('pan');
        $student->username = $request->input('username');
        $student->password = Hash::make($request->input('password'));
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/students/', $filename);
            $student->image = $filename;
        }
    
        $student->save();
    
        return redirect()->route('Login')->with('success', 'Form submitted successfully!');
    }
}
