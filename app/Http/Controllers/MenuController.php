<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Services;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Traits\FileUploader;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    use FileUploader;

    public function index()
    {
        return view('back.pages.menu.index',[
            'menu'=>Menu::orderBy('id','desc')->get()
        ]);
    }


    public function create()
    {

        return view('back.pages.menu.create',[
            'services'=>Services::latest()->get(),

        ]);
    }


    public function store(StoreMenuRequest $request)
    {
        $src = $this->fileSave('files/menu/',$request,'src');
        $src_big = $this->fileSave('files/menu/',$request,'src_big');

        Menu::create([
            'src'=>$src,
            'src_big'=>$src_big,
            'service_id'=>$request->service_id,
            'menu_date_az'=>$request->menu_date_az,
            'menu_date_ru'=>$request->menu_date_ru,
            'menu_date_en'=>$request->menu_date_en,
            'menu_title_az'=>$request->menu_title_az,
            'menu_title_ru'=>$request->menu_title_ru,
            'menu_title_en'=>$request->menu_title_en,
            'menu_text_az'=>$request->menu_text_az,
            'menu_text_ru'=>$request->menu_text_ru,
            'menu_text_en'=>$request->menu_text_en,
            'price'=>$request->price,
            'gram'=>$request->gram,
            'protein'=>$request->protein,
            'oils'=>$request->oils,
            'carbohydrates'=>$request->carbohydrates,
            'kcal'=>$request->kcal,

        ]);

        toastr()->success('Product added successfully');

        return redirect()->route('menu.index');
    }


    public function show(Menu $menu)
    {
        //
    }


    public function edit($id)
    {
        $menu = Menu::findOrfail($id);
//        return view('back.pages.menu.edit', compact('menu'));

        return view('back.pages.menu.edit',[
            'services'=>Services::latest()->get(),
            'menu'=> $menu
        ]);

    }


    public function update(UpdateMenuRequest $request, $id)
    {
        $menu = Menu::findOrfail($id);
        $src   = $this->fileUpdate($menu->src, $request->hasFile('src'), $request->src, 'files/menu/');
        $src_big   = $this->fileUpdate($menu->src_big, $request->hasFile('src_big'), $request->src_big, 'files/menu/');
        $menu->update([
            'src'=>$src,
            'src_big'=>$src_big,
            'service_id'=>$request->service_id,
            'menu_date_az'=>$request->menu_date_az,
            'menu_date_ru'=>$request->menu_date_ru,
            'menu_date_en'=>$request->menu_date_en,
            'menu_title_az'=>$request->menu_title_az,
            'menu_title_ru'=>$request->menu_title_ru,
            'menu_title_en'=>$request->menu_title_en,
            'menu_text_az'=>$request->menu_text_az,
            'menu_text_ru'=>$request->menu_text_ru,
            'menu_text_en'=>$request->menu_text_en,
            'price'=>$request->price,
            'gram'=>$request->gram,
            'protein'=>$request->protein,
            'oils'=>$request->oils,
            'carbohydrates'=>$request->carbohydrates,
            'kcal'=>$request->kcal,
        ]);

        toastr()->success('Product updated successfully');

        return redirect()->route('menu.index');
    }


    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);

        $this->fileDelete('files/menu/'.$menu->src);
        $menu->delete();
        toastr()->success('Product deleted successfully');

        return redirect()->route('menu.index');
    }
}
