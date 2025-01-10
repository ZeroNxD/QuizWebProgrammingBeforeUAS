<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function ShowPage(){
        $user = auth()->user();

        $fields = $user->fields;

        return view('Page.ProfilePage', compact('user', 'fields'));
    }

    public function EditPage(){
        $user = auth()->user();

        $fields = $user->fields;
        $allfields = Field::all();

        return view('page.EditProfilePage', compact('user', 'fields', 'allfields'));
    }

    public function UpdateProfile(Request $request){
        $user = auth()->user();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'gender' => 'required|in:Male,Female',
            'biography' => 'required|string|max:1000',
            'profile_picture' => 'nullable|file|mimes:jpg,jpeg,png',
            'linkedin_link' => 'required|url',
            'fields' => 'required|array|min:3',
            'fields.*' => 'exists:fields,id',
        ]);

        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->gender = $validatedData['gender'];
        $user->biography = $validatedData['biography'];
        $user->linkedin_link = $validatedData['linkedin_link'];

        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('assets', 'public');
            $user->profile_picture = $path;
        }

        $user->save();

        if ($request->has('fields')) {
            $user->fields()->sync($request->fields);
        }

        return redirect()->route('profilepage')->with('success', 'Profile updated successfully!');
    }
}

