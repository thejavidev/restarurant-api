<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Http\Requests\StoreServicesRequest;
use App\Http\Requests\UpdateServicesRequest;
use App\Traits\FileUploader;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class ServicesController extends Controller
{
    use FileUploader;

    public function index()
    {
        return view('back.pages.services.index',[
            'services'=>Services::orderBy('id','desc')->get()
        ]);
    }


    public function create()
    {

        return view('back.pages.services.create',[
            'services'=>Services::latest()->get(),
        ]);
    }


    public function store(StoreServicesRequest $request)
    {

        Services::create([
            'slug'=>Str::slug($request->name_en),
            'name_az'=>$request->name_az,
            'name_ru'=>$request->name_ru,
            'name_en'=>$request->name_en,
        ]);

        toastr()->success('Product added successfully');

        return redirect()->route('services.index');
    }


    public function show(Services $services)
    {
        //
    }


    public function edit($id)
    {
        $services = Services::findOrfail($id);
        return view('back.pages.services.edit', compact('services'));

    }


    public function update(UpdateServicesRequest $request, $id)
    {

        $services = Services::findOrfail($id);
        $services->update([
            'slug'=>Str::slug($request->name_en),
            'name_az'=>$request->name_az,
            'name_ru'=>$request->name_ru,
            'name_en'=>$request->name_en,
        ]);

        toastr()->success('Product updated successfully');

        return redirect()->route('services.index');
    }


    public function destroy($id)
    {
        $services = Services::findOrFail($id);

        $services->delete();
        toastr()->success('Product deleted successfully');

        return redirect()->route('services.index');
    }
}
