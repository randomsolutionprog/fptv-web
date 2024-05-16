<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Import the Hash facade
use Illuminate\Support\Facades\Auth;

class AuthorizationController extends Controller
{
    //
    public function indexLogin(){
       
        return view('login');
    }
    public function indexRegister(){
        return view('register');
    }
    public function indexDashboard(){
        return view('admin.dashboard');
    }
   
    public function authLogin(Request $request){
        // Validate request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Retrieve credentials from the request
        $credentials = $request->only('email', 'password');
    
        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Authentication successful, redirect to admin dashboard
            return redirect()->intended(route('dashboard')); // Corrected redirection
            //return Auth::user();
        } else {
            // Authentication failed, redirect back with error message
            return redirect()->back()->withErrors(['email' => 'Invalid email or password.']);
        }
    }
    
    public function authRegister(Request $request){
        // Validate request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'name.max' => 'The name may not be greater than :max characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'email.unique' => 'The email has already been taken.',
            'password.required' => 'The password field is required.',
            'password.string' => 'The password must be a string.',
            'password.min' => 'The password must be at least :min characters.',
            'password.confirmed' => 'The password confirmation does not match.',
        ]);
    
        // If validation passes, continue with your logic
    
        // For example, you might want to create a new user with the validated data
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        // Redirect or return a response with success message
        return redirect('login')->with('success', 'Successfully Sent Your Application. Please wait for 3 working days.');
    }
    
    
}

