<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOptionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
//        dd(request()->post());
        return [
            'tel'=>'required|max:255',
            'src_about'=>'nullable|image',
            'unvanaz'=>'required|max:255',
            'unvanen'=>'required|max:255',
            'youtubelink'=>'required|max:255',
            'deliverytimer'=>'required|max:255',
            'cafetimer'=>'required|max:255',
            'minimumorderaz'=>'required|max:30000',
            'minimumorderu'=>'required|max:30000',
            'minimumorderen'=>'required|max:30000',
            'unvanru'=>'required|max:255',
            'email'=>'required|max:255',
            'facebook'=>'required|max:255',
            'instagram'=>'required|max:255',
            'linkedin'=>'required|max:255',
            'github'=>'required|max:255',
            'youtube'=>'required|max:255',
        ];
    }

    public function attributes()
    {
        return [
            'tel'=>'Telefon',
            'src_about'=>'Cover',
            'unvanaz'=>'Unvan Az',
            'unvanen'=>'Unvan En',
            'unvanru'=>'Unvan Ru',
            'minimumorderen'=>'Minimum Sifaris en',
            'minimumorderu'=>'Minimum Sifaris ru',
            'minimumorderaz'=>'Minimum Sifaris az',
            'youtubelink'=>'Youtube linki',
            'deliverytimer'=>'Çatdırılma saatları',
            'cafetimer'=>'Kafenin iş saatları',
            'email'=>'E-Poçt',
            'facebook'=>'Facebook',
            'instagram'=>'Instagram',
            'linkedin'=>'Linkedin',
            'github'=>'Github',
            'youtube'=>'Youtube',
        ];
    }
}


