<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Traits\FileUploader;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    use FileUploader;

    public function index()
    {
        return view('back.pages.blog.index',[
            'blog'=>Blog::orderBy('id','desc')->get()
        ]);
    }


    public function create()
    {
        return view('back.pages.blog.create');
    }


    public function store(StoreBlogRequest $request)
    {
        $src = $this->fileSave('files/blog/',$request,'src');
        $src_big = $this->fileSave('files/blog/',$request,'src_big');

        Blog::create([
            'src'=>$src,
            'src_big'=>$src_big,

            'blog_date_az'=>$request->blog_date_az,
            'blog_date_ru'=>$request->blog_date_ru,
            'blog_date_en'=>$request->blog_date_en,
            'blog_title_az'=>$request->blog_title_az,
            'blog_title_ru'=>$request->blog_title_ru,
            'blog_title_en'=>$request->blog_title_en,
            'blog_text_az'=>$request->blog_text_az,
            'blog_text_ru'=>$request->blog_text_ru,
            'blog_text_en'=>$request->blog_text_en,

        ]);

        toastr()->success('Product added successfully');

        return redirect()->route('blog.index');
    }


    public function show(Blog $blog)
    {
        //
    }


    public function edit($id)
    {
        $blog = Blog::findOrfail($id);
        return view('back.pages.blog.edit', compact('blog'));
    }


    public function update(UpdateBlogRequest $request, $id)
    {
        $blog = Blog::findOrfail($id);
        $src   = $this->fileUpdate($blog->src, $request->hasFile('src'), $request->src, 'files/blog/');
        $src_big   = $this->fileUpdate($blog->src_big, $request->hasFile('src_big'), $request->src_big, 'files/blog/');
        $blog->update([
            'src'=>$src,
            'src_big'=>$src_big,

            'blog_date_az'=>$request->blog_date_az,
            'blog_date_ru'=>$request->blog_date_ru,
            'blog_date_en'=>$request->blog_date_en,
            'blog_title_az'=>$request->blog_title_az,
            'blog_title_ru'=>$request->blog_title_ru,
            'blog_title_en'=>$request->blog_title_en,
            'blog_text_az'=>$request->blog_text_az,
            'blog_text_ru'=>$request->blog_text_ru,
            'blog_text_en'=>$request->blog_text_en,
        ]);

        toastr()->success('Product updated successfully');

        return redirect()->route('blog.index');
    }


    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        $this->fileDelete('files/blog/'.$blog->src);
        $blog->delete();
        toastr()->success('Product deleted successfully');

        return redirect()->route('blog.index');
    }
}
