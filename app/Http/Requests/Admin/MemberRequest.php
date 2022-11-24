<?php

namespace App\Http\Requests\Admin;

use A17\Twill\Http\Requests\Admin\Request;

use Illuminate\Validation\Rule;

class MemberRequest extends Request
{
    public function rulesForCreate()
    {
        return [];
    }

    public function rulesForUpdate()
    {
        return [
            'title' => 'required|max:255|string',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'website' => 'required|url',
            //'linkedin' => 'required|url',
            'address' => 'required',
            'region' => 'required',

            'type' => 'required',


            //validate browser
            'browsers.gruppiMerceologici' => 'required',

            //logo, with crop and ratio is required
            'medias.logo' => 'required',

        ];
    }
    // TODO: fill it
}
