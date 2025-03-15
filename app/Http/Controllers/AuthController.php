<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Faker\Provider\bg_BG\PhoneNumber;

class AuthController extends Controller
{
    public function create(){
        return view('save');
    }

    public function register(Request $request){

        $fields = $request->validate([
            'username'=> ['required','max:255'],
            'email' => ['required','max:255','email','unique:users'],
            'password' => ['required','min:3'],
            'phone_number' => ['required','numeric']
        ]);



        $user  = User::create($fields);

        // if($user){

        // }

        return redirect()->route('login');
    }

    public function login(Request $request){
        $fields = $request->validate([
            'username' => ['required'],
            'password' => ['required', 'min:3'],
        ]);

         $session = session([
                'username' => $request->username,
            ]);

        //  dd(session($session));
        $login = Auth::attempt($fields);
        if($login){

            $user = User::where('username', $request->username)->first();

            // $request->session()->put('username',$request->username);
            $request->session()->put('username', $user->username);
            return redirect()->route('dashboard');
        }else{
            return back()->withErrors([
                'failed'=> 'The credential you submited do not match our records',
            ]);
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->forget('username');
        $request->session()->flush();
        return redirect()->route('login');
    }
}
