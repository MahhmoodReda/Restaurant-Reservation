<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function menu()
    {
        $menus=Menu::all();
        return view('admin.pages.menu',compact('menus'));
    }

    public function addMenu()
    {
        $categories= Category::all();

        return view('admin.pages.addMenu',compact('categories'));
    }


    public function insertMenu(Request $request)
    {
        $data = $request ->validate([
            'category'=> 'required|numeric',
            'title' => 'required|string|max:255',
            'desc' => 'required|string|max:1000',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        $data['image'] = Storage::putFile('menu',$data['image']);

        Menu::create([
            "category_id"   =>    $data["category"],
            "title"         =>     $data["title"],
            "desc"          =>      $data["desc"],
            "price"         =>       $data["price"],
            "image"         =>       $data["image"]

        ]);

        return redirect()->route('add-menu')->with('success','item inserted successfly');


    }

    public function active($id)
    {
        $item = Menu::findOrFail($id);
        if($item['is_active'] != 1)
        {
            $item->is_active = 1;
            $item->update();
        }else
        {
            $item->is_active = 0;
            $item->update();
        }
        return redirect()->route('show-menu');
    }

    public function update($id)
    {
        $item = Menu::findOrFail($id);
        return view('admin.pages.editMenu',compact('item'));
    }
    public function edit(Request $request , $id)
    {
        $item = Menu::findOrFail($id);
        $data=$request->validate([
            'title'=>'required|string|max:225',
            'desc'=>'required|string',
            'price'=>'required|numeric',
            'image'=> 'nullable|image|mimes:png,jpg,jpeg',

        ]);

        if($request->has('image'))
        {
            Storage::delete($item->image);
            $data['image']=Storage::putFile('menu',$request->file('image'));
        }

        $item->update($data);
        return redirect()->route('show-menu')->with('success','item updated successfly');
    }
}
