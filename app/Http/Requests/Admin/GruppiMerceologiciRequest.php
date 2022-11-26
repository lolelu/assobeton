<?php

namespace App\Http\Requests\Admin;

use A17\Twill\Http\Requests\Admin\Request;

class GruppiMerceologiciRequest extends Request
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
            'description' => 'required|max:5000|string',
            'introduction' => 'required|max:5000|string',
            'applications' => 'required|max:5000|string',
            // 'medias.thumbnail' => 'required',
        ];
    }

    // TODO: fill it
}
