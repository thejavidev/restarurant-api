<?php

namespace App\Http\Controllers;

use App\Helpers\Options;
use App\Models\Option;
use App\Http\Requests\StoreOptionRequest;
use App\Http\Requests\UpdateOptionRequest;
use App\Traits\FileUploader;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    use FileUploader;
    public function index()
    {
        //
    }
    public function create()
    {
        //
    }

    public function store(StoreOptionRequest $request)
    {
        $src_about   = $this->fileUpdate(\App\Helpers\Options::getOption('src_about'), $request->hasFile('src_about'), $request->src_about, 'files/about/');
        $src_about_2   = $this->fileUpdate(\App\Helpers\Options::getOption('src_about_2'), $request->hasFile('src_about_2'), $request->src_about_2 , 'files/about/');

        Option::updateOrCreate(
            ['key'   => 'src_about'],
            [
                'value' => $src_about
            ]
        );
        Option::updateOrCreate(
            ['key'   => 'src_about_2'],
            [
                'value' => $src_about_2
            ]
        );
        foreach ($request->keys() as $key)
        {
            if ($key != '_token' && $key != 'src_about' && $key != 'src_about_2')
            {
                Option::updateOrCreate(
                    ['key'   => $key],
                    [
                        'value' => $request->post($key)
                    ]
                );

            }
        }

        toastr()->success('Data uğurla əlavə edildi','Əla');

        return redirect()->route('home');
    }

    public function show(Option $option)
    {
        //
    }

    public function edit(Option $option)
    {
        //
    }

    public function update(UpdateOptionRequest $request, Option $option)
    {
        //
    }


    public function aboutBannerPost(Request $request)
    {
        $this->validate($request,[
            'src'=>'nullable|max:2048'
        ],[],[
            'src'=>'Photo'
        ]);

        $src   = $this->fileUpdate(\App\Helpers\Options::getOption('about_banner'), $request->hasFile('src'), $request->src, 'files/about_banner/');
        Option::updateOrCreate(
            ['key'   => 'about_banner'],
            [
                'value' => $src
            ]
        );

        Option::updateOrCreate(
            ['key'   => 'about_banner_alt'],
            [
                'value' => $request->about_banner_alt
            ]
        );

        toastSuccess('Data əlavə edildi');
        return redirect()->back();
    }




}
