<?php

namespace App\Http\Controllers\Admin;

use App\Models\Circolari;
use Illuminate\Support\Facades\Http;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class CircolariController extends BaseModuleController
{
    protected $moduleName = 'circolaris';

    protected $indexOptions = [];
}
