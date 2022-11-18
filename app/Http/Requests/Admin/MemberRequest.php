<?php

namespace App\Http\Requests\Admin;

use A17\Twill\Http\Requests\Admin\Request;

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
            'phone' => 'required|numeric',
            'website' => 'required|url',
            //'linkedin' => 'required|url',
            'address' => 'required',
            'region' => 'required',
            'group' => 'required',
            'type' => 'required',

            //logo, with crop and ratio is required
            'medias.logo' => 'required',

        ];
    }
}
