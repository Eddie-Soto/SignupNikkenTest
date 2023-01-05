<?php

namespace App\Http\Controllers;

use App\Models\Control_CI;
use App\Models\Control_states;
use DateTime;
use Illuminate\Http\Request;
use Google\Cloud\Storage\StorageClient;
use Illuminate\Support\Facades\Storage;

class iwebController extends Controller
{
    //

    public function validate_dateborn(Request $request)
    {

        $today = new DateTime();
        $date_born = new DateTime($request->dateborn);
        $age = $today->diff($date_born);
        return $age->y;
    }

    public function upload_constancia(Request $request)
    {
        if ($request->hasFile('myfile')) {
            try {
                $storage = new StorageClient([
                    'keyFilePath' => base_path() . '/public/credentials.json',
                ]);

                // $bucketName = env('GOOGLE_CLOUD_STORAGE_BUCKET');
                $bucketName = 'tv-store';
                $bucket = $storage->bucket($bucketName);

                //get filename with extension
                // $filename = $request->file('myfile')->getClientOriginalName();
                $carpeta = 'datos-fiscales/';

                //get filename with extension
                $filenamewithextension = $request->file('myfile')->getClientOriginalName();

                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                //get file extension
                $extension = $request->file('myfile')->getClientOriginalExtension();

                //filename to store
                $filename = str_replace(' ', '-', $filename);
                $filenametostore = $filename . '_' . uniqid() . '.' . $extension;




                Storage::put('public/uploads/' . $filenametostore, fopen($request->file('myfile'), 'r+'));

                $filepath = storage_path('app/public/uploads/' . $filenametostore);

                $object = $bucket->upload(
                    fopen($filepath, 'r'),
                    [
                        'name' => $carpeta . $filenametostore,
                        'predefinedAcl' => 'publicRead'
                    ]
                );


                // delete file from local disk
                Storage::delete('public/uploads/' . $filenametostore);
                if ($request->type_person_modal == 1) {
                    $link = 'https://cmsnikken.nikkenlatam.com/apiDataFiscalPDF?t=fisica&f=https://storage.googleapis.com/' . $bucketName . '/' . $carpeta . $filenametostore;
                } else {
                    $link = 'https://cmsnikken.nikkenlatam.com/apiDataFiscalPDF?t=moral&f=https://storage.googleapis.com/' . $bucketName . '/' . $carpeta . $filenametostore;
                }
                // $response['status'] = 200;
                // return $response;

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $link);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                if (curl_errno($ch)) echo curl_error($ch);
                else $decoded = json_decode($response);
                // var_dump($decoded);
                // echo $decoded->RFC;



                $res['status'] = 200;
                $res['data'] = $decoded;

                return $response;
                curl_close($ch);
                //  return redirect('upload')->with('success', "File is uploaded successfully. File path is: https://storage.googleapis.com/$bucketName/$filenametostore");

            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }

        // return $request->type_person_modal;
    }

    public function get_colony(Request $request)
    {
        $info = Control_states::where('province_code', '=', $request->province)
            ->where('state_code', '=', $request->state)
            ->where('pais', '=', $request->country)
            ->where('postal_code', '=', $request->postal_code)
            ->select('colony_code', 'colony_name')
            ->orderBy('colony_name', 'asc')
            ->get();
        if (isset($info[0])) {
            $data['status'] = 200;
            $data['info'] = $info;
            return $data;
        } else {
            $info2 = Control_states::where('province_code', '=', $request->province)
                ->where('state_code', '=', $request->state)
                ->where('pais', '=', $request->country)
                ->select('colony_code', 'colony_name')
                ->orderBy('colony_name', 'asc')
                ->get();
            if (isset($info2[0])) {
                $data['status'] = 201;
                $data['info'] = $info2;
                return $data;
            } else {
                $data['status'] = 300;
                return $data;
            }
        }
    }

    public function search_cp(Request $request)
    {
        $info = Control_states::where('postal_code', '=', $request->postal_code)->get();
        if (isset($info[0])) {
            $data['status'] = 200;
            $data['info'] = $info;
            return $data;
        } else {
            $data['status'] = 300;
            return $data;
        }
    }

    public function search_sponsor(Request $request)
    {
        $ci = Control_CI::select('nombre', 'codigo')
            ->where([
                ['codigo', '=', $request->sponsor],
                ['estatus', '=', 1],
                ['b1', '=', 1],
                ['tipo', '=', 'CI']
            ])
            ->orWhere([
                ['nombre', 'LIKE', '%' . $request->sponsor . '%'],
                ['estatus', '=', 1],
                ['b1', '=', 1],
                ['tipo', '=', 'CI']
            ])
            ->limit(3)
            ->get();
        // estatus = 1 and b1 = 1 and tipo='CI'
        if (isset($ci[0])) {
            $data['status'] = 200;
            $data['info'] = $ci;
            return $data;
        } else {
            $data['status'] = 300;
            return $data;
        }
    }

    public function store(Request $request)
    {   
        $data['status']=200;
        $data['info'] = $request;
        return $data;
    }
}
