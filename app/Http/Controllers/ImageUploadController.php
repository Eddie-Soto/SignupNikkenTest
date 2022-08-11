<?php

namespace App\Http\Controllers;

use App\ImageUpload;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload()
    {
        return view('tstdropzone');
    }

    public function store(Request $request)
    {
        $image = $request->file('file');

       //$imageName = $request->file('fileone')->getClientOriginalName();

        $imageName = $image->getClientOriginalName();
        echo $imageName;
        exit;
        $image->move(public_path('images'), $imageName);

        $imageUpload = new ImageUpload();
        $imageUpload->filename = $imageName;
        $imageUpload->save();
        return response()->json(['success' => $imageName]);
    }

    public function delete(Request $request)
    {
        $filename = $request->get('filename');
        ImageUpload::where('filename', $filename)->delete();
        $path = public_path() . '/images/' . $filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;
    }
}
