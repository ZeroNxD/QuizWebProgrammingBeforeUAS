<?php

namespace App\Http\Controllers;

use PDO;
use App\Models\User;
use App\Models\Field;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function ShowPage1(){
        return view('Page.Login');
    }

    public function LoginUser(Request $request){
        $currentUser = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($currentUser)){
            $request->session()->regenerate();
            return redirect()->route('home')->with('success', 'Login Successfully!');
        }

        return back()->withErrors([
            'email' => "Invalid Credentials",
        ])->onlyInput('email');
    }

    public function ShowPage2(){
        $allfields = Field::all();

        return view('Page.Register', compact("allfields"));
    }

    public function StoreUser(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'gender' => 'required|in:Male,Female',
            'fields' => 'required|array|min:3',
            'fields.*' => 'exists:fields,id',
            'linkedin_link' => 'required|url',
            'biography' => 'required|string|max:1000',
            'wallet_balance' => 'required|numeric|min:100000',
            'profile_picture' => 'required|file|mimes:jpg,jpeg,png',
            'mobile_number' => 'required|numeric',
        ]);

        if ($request->hasFile('profile_picture') && $request->file('profile_picture')->isValid()) {
            $profile_picture_path = $request->file('profile_picture')->store('assets', 'public');
        }

        $newuser = new User();
        $newuser->profile_picture = $profile_picture_path;
        $newuser->name = $request->input('name');
        $newuser->email = $request->input('email');
        $newuser->password = bcrypt($request->input('password'));
        $newuser->gender = $request->input('gender');
        $newuser->linkedin_link = $request->input('linkedin_link');
        $newuser->biography = $request->input('biography');
        $newuser->wallet = $request->input('wallet_balance') - 100000;
        $newuser->mobile_number = $request->input('mobile_number');

        $newuser->save();
        $newuser->fields()->attach($validatedData['fields']);

        Auth::login($newuser);

        return redirect()->route('home')->with('success', 'Registration successful!');
    }

    public function LogoutUser(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home')->with('success', 'You have been Logout!');
    }
}
