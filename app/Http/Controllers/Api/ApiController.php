<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Http\Resources\ProjectCollection;
use App\Http\Resources\SimpleCollection;
use App\Http\Resources\BlogCollection;
use App\Http\Resources\QuestionCollection;
use App\Http\Resources\ServicesCollection;
use App\Http\Resources\MenuCollection;
use App\Models\Menu;
use App\Models\Project;
use App\Models\Simple;
use App\Models\Blog;
use App\Models\Question;
use App\Models\Services;
use Illuminate\Http\Request;
use App\Helpers\Options;



class ApiController extends Controller
{
    public function home()
    {
        $slider = ProjectCollection::collection(Project::orderBy('id', 'desc')->get());
        $simple = SimpleCollection::collection(Simple::orderBy('id')->get());
        $blogs = BlogCollection::collection(Blog::orderBy('id', 'desc')->get());
        $questions = QuestionCollection::collection(Question::orderBy('id', 'desc')->get());
        $services = ServicesCollection::collection(Services::orderBy('id', 'desc')->get());
        $menu = MenuCollection::collection(Menu::orderBy('id', 'desc')->get());

        return response()->json([
            'slider' => $slider,
            'menu' => $menu,
            'cards'=>$simple,
            'services'=>$services,
            'blogs'=>$blogs,
            'questions'=>$questions,
            'options' => [
                'tel'=>Options::getOption('tel'),
                'email'=>Options::getOption('email'),
                'facebook'=>Options::getOption('facebook'),
                'vkontakte'=>Options::getOption('vkontakte'),
                'instagram'=>Options::getOption('instagram'),
                'linkedin'=>Options::getOption('linkedin'),
                'github'=>Options::getOption('github'),
                'youtube'=>Options::getOption('youtube'),
                'youtubelink'=>Options::getOption('youtubelink'),
                'maplink'=>Options::getOption('maplink'),
                'haqqimizda_az'=>Options::getOption('haqqimizda_az'),
                'haqqimizda_en'=>Options::getOption('haqqimizda_en'),
                'haqqimizda_ru'=>Options::getOption('haqqimizda_ru'),
                'unvanaz'=>Options::getOption('unvanaz'),
                'unvanru'=>Options::getOption('unvanru'),
                'unvanen'=>Options::getOption('unvanen'),
                'deliverytimer'=>Options::getOption('deliverytimer'),
                'cafetimer'=>Options::getOption('cafetimer'),
                'minimumorderaz'=>Options::getOption('minimumorderaz'),
                'minimumorderu'=>Options::getOption('minimumorderu'),
                'minimumorderen'=>Options::getOption('minimumorderen'),
                'src_about'=>asset('files/about').('/').Options::getOption('src_about') ?  asset('files/about').('/').Options::getOption('src_about') : null,
                'logo'=>asset('files/about').('/').Options::getOption('src_about_2') ?  asset('files/about').('/').Options::getOption('src_about_2') : null,
            ],
        ], 200);
    }
}
