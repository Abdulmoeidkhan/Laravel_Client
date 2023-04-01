<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\FileUpload;
use App\Models\eventcategories;

class CategoryPageController extends Controller
{
    public function categoryPage(Request $req)
    {
        $categoriesHavingData = FileUpload::distinct()->get(['categories']);
        $categoriesArray = [];
        $name=$req->name;
        foreach ($categoriesHavingData as $key => $category) {
            array_push($categoriesArray, $category['categories']);
        };
        return in_array($name, $categoriesArray, TRUE) ?
        call_user_func(function ()use($name) {
                $allCategories = Cache::has('allCategories') ? Cache::get('allCategories') : eventcategories::all();
                $categoriesImages = FileUpload::where('categories', $name)->get();
                $data = [
                    'allCategories' => $allCategories,
                    'categoriesImages'=>$categoriesImages
                ];
                return view("categories", [...$data]);
            })
            : abort(404);
    }
}
