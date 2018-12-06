<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Banner;

class BannerRequest extends FormRequest
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
        $banner = Banner::find($this->banner);


         switch ($this->method()) {
        case 'POST':
        {
            return [
             'title' => 'required|unique:banners|max:255',
             'banner_path' => 'required|max:1024|mimes:jpeg,png'
            //
        ];

        }
        case 'PUT':
        case 'PATCH':
        {
             return [
             'title' => 'required|unique:banners,title,'.$banner->id,
             'banner_path' => 'max:1024|mimes:jpeg,png'
            //
        ];

        }
        default: break;
    }
    }
}
