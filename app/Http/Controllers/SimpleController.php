<?php

namespace App\Http\Controllers;

use App\Models\Simple;
use App\Http\Requests\StoreSimpleRequest;
use App\Http\Requests\UpdateSimpleRequest;
use App\Traits\FileUploader;
use Illuminate\Http\Response;

class SimpleController extends Controller
{
    use FileUploader;

    public function index()
    {
        return view('back.pages.simple.index',[
            'simple'=>Simple::orderBy('id','desc')->get()
        ]);
    }


    public function create()
    {
        return view('back.pages.simple.create');
    }


    public function store(StoreSimpleRequest $request)
    {
        $src = $this->fileSave('files/simple/',$request,'src');
        Simple::create([
            'src'=>$src,
            'text_1_az'=>$request->text_1_az,
            'text_1_ru'=>$request->text_1_ru,
            'text_1_en'=>$request->text_1_en,
            'text_2_az'=>$request->text_2_az,
            'text_2_ru'=>$request->text_2_ru,
            'text_2_en'=>$request->text_2_en,

        ]);

        toastr()->success('Product added successfully');

        return redirect()->route('simple.index');
    }


    public function show(Simple $project)
    {
        //
    }


    public function edit($id)
    {
        $simple = Simple::findOrfail($id);
        return view('back.pages.simple.edit', compact('simple'));
    }


    public function update(UpdateSimpleRequest $request, $id)
    {
        $simple = Simple::findOrfail($id);
        $src   = $this->fileUpdate($simple->src, $request->hasFile('src'), $request->src, 'files/simple/');
        $simple->update([
            'src'=>$src,
            'text_1_az'=>$request->text_1_az,
            'text_1_ru'=>$request->text_1_ru,
            'text_1_en'=>$request->text_1_en,
            'text_2_az'=>$request->text_2_az,
            'text_2_ru'=>$request->text_2_ru,
            'text_2_en'=>$request->text_2_en,
        ]);

        toastr()->success('Product updated successfully');

        return redirect()->route('simple.index');
    }


    public function destroy($id)
    {
        $simple = Simple::findOrFail($id);

        $this->fileDelete('files/simple/'.$simple->src);
        $simple->delete();
        toastr()->success('Product deleted successfully');

        return redirect()->route('simple.index');
    }
}
