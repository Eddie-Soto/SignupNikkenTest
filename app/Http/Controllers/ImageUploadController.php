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
        $completecode=1234;
        $image = $request->file('file');

        $nombre = $image->getClientOriginalName();



       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('local')->put('SignupPan/' .$nombre,  \File::get($image));
        $full_pathone = \Storage::disk('local')->url('SignupPan/' .$nombre);

        $image->move(public_path('images'), $nombre);

echo $full_pathone;
exit;
       

        return response()->json(['success' => $full_pathone]);

       //$imageName = $request->file('fileone')->getClientOriginalName();

       /*$imageName = $image->getClientOriginalName();
        
        $image->move(public_path('images'), $imageName);

        $imageUpload = new ImageUpload();
        $imageUpload->filename = $imageName;
        $imageUpload->save();
        return response()->json(['success' => $imageName]);*/
    }

    public function delete(Request $request)
    {
        $filename = $request->get('filename');
       // ImageUpload::where('filename', $filename)->delete();
        //$path = \Storage::disk('local')->url('Images/' .$filename);
        $path = public_path('images/'.$nombre);
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;
    }
}
