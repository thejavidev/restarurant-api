<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Traits\FileUploader;
use Illuminate\Http\Response;

class ProjectController extends Controller
{
    use FileUploader;
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('back.pages.products.index',[
            'products'=>Project::orderBy('id','desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('back.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     * @return Response
     */
    public function store(StoreProjectRequest $request)
    {
        $src = $this->fileSave('files/products/',$request,'src');
        Project::create([
            'src'=>$src,
            'title_az'=>$request->name_az,
            'big_text_az'=>$request->big_text_az,
            'big_text_ru'=>$request->big_text_ru,
            'big_text_en'=>$request->big_text_en,
            'title_en'=>$request->name_en,
            'title_ru'=>$request->name_ru,
            'alt'=>$request->alt,
            'link'=>$request->link
        ]);

        toastr()->success('Product added successfully');

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return Response
     */
    public function edit($id)
    {
        $project = Project::findOrfail($id);
        return view('back.pages.products.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\Project  $project
     * @return Response
     */
    public function update(UpdateProjectRequest $request, $id)
    {
        $project = Project::findOrfail($id);
        $src   = $this->fileUpdate($project->src, $request->hasFile('src'), $request->src, 'files/products/');
        $project->update([
            'src'=>$src,
            'title_az'=>$request->name_az,
            'title_en'=>$request->name_en,
            'title_ru'=>$request->name_ru,
            'big_text_az'=>$request->big_text_az,
            'big_text_ru'=>$request->big_text_ru,
            'big_text_en'=>$request->big_text_en,
            'alt'=>$request->alt,
            'link'=>$request->link
        ]);

        toastr()->success('Product updated successfully');

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        $this->fileDelete('files/products/'.$project->src);
        $project->delete();
        toastr()->success('Product deleted successfully');

        return redirect()->route('product.index');
    }
}
