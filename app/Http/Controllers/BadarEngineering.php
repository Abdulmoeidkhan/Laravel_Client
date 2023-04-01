<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\eventcategories;

class BadarEngineering extends Controller
{
    public function badarEngineering()
    {
        $allCategories = Cache::has('allCategories') ? Cache::get('allCategories') : eventcategories::all();
        $data = [
            'allCategories' => $allCategories
        ];
        return view("badarEng", [...$data]);
    }
}
