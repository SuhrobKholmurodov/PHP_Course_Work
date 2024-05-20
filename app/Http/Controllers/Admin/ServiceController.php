<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\ServiceCategory;


class ServiceController extends Controller
{
    public function index()
    {
        $services = ServiceCategory::all();
        return view('admin.services.index')->with('services', $services);
    }
    public function create()
    {
        return view('admin.services.create');
    }
    public function store(Request $request)
    {
        $category = new ServiceCategory();
        $category->service_name = $request->input('service_name');
        $category->service_description = $request->input('service_description');
        $category->service_price = $request->input('service_price');
        $category->save();
        return redirect('/service-category')->with('success', 'Category Added Successfully');
    }
    
    public function edit($id)
    {
       $service_category = ServiceCategory::find($id);
       return view('admin.services.edit')->with('service_category', $service_category);
    }


    public function update(Request $request, $id)
    {
        $serv_cate = ServiceCategory::find($id);
        $serv_cate->service_name = $request->input('service_name');
        $serv_cate->service_description = $request->input('service_description');
        $serv_cate->service_price = $request->input('service_price');
        $serv_cate->update();
        return redirect('/service-category')->with('success', 'Category Updated Successfully');
    }
    public function servicedelete($id)
    {
        $serv_cate = ServiceCategory::findOrfail($id);  
        $serv_cate -> delete();
        return redirect('/service-category')->with('success', 'Category Deleted Successfully');
    }
}
