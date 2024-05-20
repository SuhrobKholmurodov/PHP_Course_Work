<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Abouts;

class AboutusController extends Controller
{
    public function index()
    {
        $aboutus = Abouts::all();       
        return view('admin.aboutus')->with('aboutus', $aboutus);
    }
    public function store(Request $request)
    {
       $aboutus = new Abouts;
       $aboutus ->title = $request->input('title');
       $aboutus ->subtitle = $request->input('subtitle');
       $aboutus ->description = $request->input('description');

       $aboutus ->save();

       return redirect('/abouts')->with('success', 'Data Added for About Us');
    }
    public function edit($id)
    {
        $aboutus= Abouts::findOrfail($id);
        return view('admin.abouts.edit')
        ->with('aboutus', $aboutus);
    }
    public function update(Request $request, $id)
    {
        $aboutus = Abouts::findOrfail($id);
        $aboutus ->title = $request->input('title');
        $aboutus ->subtitle = $request->input('subtitle');
        $aboutus ->description = $request->input('description');
        $aboutus ->update();
        return redirect('/abouts')->with('success', 'Data Updated for About Us');
    }
    public function delete($id)
    {
        $aboutus = Abouts::findOrfail($id);
        $aboutus ->delete();
        return redirect('/abouts')->with('success', 'Data Deleted for About Us');
    }
}
