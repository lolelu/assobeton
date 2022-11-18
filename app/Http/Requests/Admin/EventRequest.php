<?php

namespace App\Http\Requests\Admin;

use A17\Twill\Http\Requests\Admin\Request;

class EventRequest extends Request
{
    public function rulesForCreate()
    {
        return [];
    }

    public function rulesForUpdate()
    {
        return [

            'title' => 'required|max:200|string',
            'subtitle' => 'required|max:200|string',
            'description' => 'required|max:500|string',
            'thematic' => 'required|max:200|string',


            'blocks' => 'validBlocks'
        ];
    }
}
