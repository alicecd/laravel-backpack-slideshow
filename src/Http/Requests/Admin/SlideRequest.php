<?php

namespace Novius\Backpack\Slideshow\Http\Requests\Admin;

use Backpack\CRUD\app\Http\Requests\CrudRequest;

class SlideRequest extends CrudRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image' => 'required',
            'title' => 'required',
        ];
    }
}
