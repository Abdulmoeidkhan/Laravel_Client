<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileUpload;
use App\Models\eventcategories;
use Illuminate\Support\Facades\Cache;

class Approach extends Controller
{
    public function approach()
    {
        $allCategories = Cache::has('allCategories') ? Cache::get('allCategories') : eventcategories::all();
        // Categories Fetching and filtering only for first page
        $categories = FileUpload::distinct()->get(['categories']);
        $categoriesArray = [];
        $categoriesArrayCount = [];
        foreach ($categories as $key => $category) {
            array_push($categoriesArray, str_replace("-", " ", $category['categories']));
        }
        if (Cache::has('categoriesArrayCount')) {
            array_push(
                $categoriesArrayCount,
                Cache::get('categoriesArrayCount')
            );
        } else {
            foreach ($categories as $key => $category) {
                array_push(
                    $categoriesArrayCount,
                    (FileUpload::where("categories", $category['categories'])->count())
                );
            }
        }

        $data = [
            'categoriesArray' => $categoriesArray,
            'categoriesArrayCount' => $categoriesArrayCount,
            'allCategories' => $allCategories
        ];
        return view("approach",[...$data]);
    }
}
