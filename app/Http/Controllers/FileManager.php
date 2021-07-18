<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileManager extends Controller
{
  /**
   * Display the specified resource.
   *
   * @param  int  $id, $types
   * @return \Illuminate\Http\Response
   */
  public function DownloadFile($types, $id)
  {
    return Storage::download($types . '/' . $id);
  }
}
