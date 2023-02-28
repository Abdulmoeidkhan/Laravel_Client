<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileUpload;

class FileUploadController extends Controller
{
    public function fileuploaded()
    {
        $fileUplaods = FileUpload::get();
        return view('newGallery', ['fileUploads' => $fileUplaods]);
    }

    public function multipleUpload(Request $request)
    {
        $this->validate($request, [
            'fileuploads' => 'required',
            'fileuploads.*' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048']
        ]);

        $files = $request->file('fileuploads');
        echo "<pre>";
        print_r($files);
        echo "</pre>";

        foreach ($files as $key => $file) {
            $fileUpload = new FileUpload;
            $fileUpload->filename = $file->storeAs("evnetsCategories/" . $request->eventCategory . "/images", $request->eventCategory . "-" . $key . "." . $file->getClientOriginalExtension());
            $fileUpload->categories=$request->eventCategory;
            $fileUpload->save();
            // echo "<br/>";
            // echo $file;
            // echo "<br/>";
            // return "Submitted";
        }

        return redirect()->route('fileuploaded')->with('success', 'Files uploaded successfully!');
    }
}
