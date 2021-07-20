<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('welcome');
    }  
      

    public function customLogin(Request $request)
    {

        return redirect()->route('posts.index');

        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);
   
        // $credentials = $request->only('email', 'password');
        // if (User::attempt($credentials)) {
        //     return redirect()->route('posts.index');
        // }
  
        
        // return redirect()
        //         ->route('/')
        //         ->with('message', 'Usuario ou senha incorretos');
    }

    public function registration()
    {
        return view('auth.registration');
    }
      

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
