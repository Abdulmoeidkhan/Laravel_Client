<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageGallery;
use Illuminate\Support\Facades\Auth;
// use App\Models\Eventcategories;

class ImageGalleryController extends Controller
{
    public function renderGalleryUpload()
    {
        if(Auth::check()){
            $fileUplaods = ImageGallery::get();
            return view('galleryUpload', ['fileUploads' => $fileUplaods]);

        }else{
            return redirect('admin');
        }
    }

    public function upload(Request $request)
    {
        $this->validate($request, [
            'fileuploads' => 'required',
            'fileuploads.*' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048']
        ]);

        $files = $request->file('fileuploads');

        foreach ($files as $key => $file) {
            $fileUpload = new ImageGallery;
            $file->storeAs("public/imagGallery/" . $request->eventYear . "/images", $request->eventYear . "-" . $key . "." . $file->getClientOriginalExtension());
            $fileUpload->filename = "imagGallery/" . $request->eventYear . "/images"."/". $request->eventYear . "-" . $key . "." . $file->getClientOriginalExtension();
            $fileUpload->year = $request->eventYear;
            $fileUpload->save();
        }

        return redirect()->route('galleryUpload')->with('success', 'Files uploaded successfully!');
    }
}
