<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class images extends Controller
{
    //
    public function displayImage($filename)

{

    $path = storage_public('image/' . $filename);

    if (!File::exists($path)) {

        abort(404);

    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);

    $response->header("Content-Type", $type);

    return $response;

}
}
