<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileUpload;
use App\Models\Eventcategories;

class FileUploadController extends Controller
{
    public function categoryUpload()
    {
        $fileUplaods = FileUpload::get();
        $categories = Eventcategories::all();
        return view('newGallery', ['fileUploads' => $fileUplaods, 'categories' => $categories]);
    }

    public function multipleUpload(Request $request)
    {
        $this->validate($request, [
            'fileuploads' => 'required',
            'fileuploads.*' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048']
        ]);

        $files = $request->file('fileuploads');

        foreach ($files as $key => $file) {
            $fileUpload = new FileUpload;
            $file->storeAs("public/eventsCategories/" . $request->eventCategory . "/images", $request->eventCategory . "-" . $key . "." . $file->getClientOriginalExtension());
            $fileUpload->filename = "eventsCategories/" . $request->eventCategory . "/images"."/". $request->eventCategory . "-" . $key . "." . $file->getClientOriginalExtension();
            $fileUpload->categories = $request->eventCategory;
            $fileUpload->save();
        }

        return redirect()->route('galleryUpload')->with('success', 'Files uploaded successfully!');
    }
}
