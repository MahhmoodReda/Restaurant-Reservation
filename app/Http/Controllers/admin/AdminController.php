<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function showAuthors()
    {
        $authors = User::where('type','author')->get();
        return view('admin.pages.admins',compact('authors'));
    }

    public function deleteAuthors($id)
    {
        $author = User::findOrFail($id);
        $author->delete();
        return redirect()->back()->with('success', 'Author Deleted successfuly');
    }

    public function createAuthor()
    {
        return view('admin.pages.addAdmin');
    }

    public function storeAuthor(Request $request)
    {

        $author = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'numeric','unique:users'],
            'password' => ['required','string','confirmed'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ]);


        User::create([
            'name' => $author['name'],
            'email' => $author['email'],
            'phone' => $author['phone'],
            'password' => Hash::make($author['password']),
            'type' => 'author',
        ]);
        return redirect()->back()->with('success','account created successfly');

    }
}
