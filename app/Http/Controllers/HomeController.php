<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        return view('user.pages.home');
    }

    public function redirect()
    {
        if(Auth::user()->type === 'user')
        {
            return view('user.pages.home');
        }elseif(Auth::user()->type === 'author' || 'admin'){
            $reservations = Reservation::all();
            return view('admin.pages.home',compact('reservations'));
        }
    }

    public function about()
    {
        return view('user.pages.about');
    }

    public function menu()
    {
        $lunch1 = Menu::where('category_id',1)->where('is_active',1)->get();
        $dinner2 = Menu::where('category_id',2)->where('is_active',1)->get();
        $breakfast3 = Menu::where('category_id',3)->where('is_active',1)->get();


        return view('user.pages.menu',compact('lunch1','dinner2','breakfast3'));
    }

    public function reservation()
    {
        return view('user.pages.reservation');
    }

    public function store_reservation(Request $request)
    {
        $data = $request ->validate([
            'name'=> 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'date' => 'required|date',
            'count' => 'required|numeric',
            'message' => 'string',
        ]);

        Reservation::create($data);




        return redirect()->route('home')->with('success',"your request has been sent successfully");
    }
}
