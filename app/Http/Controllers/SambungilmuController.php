<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SambungilmuController extends Controller
{
  public function awal()
  {
      return view('welcome');
  }
  public function create()
  {
      return view ('form_buat_mahasiswa');
  }
  public function add(Request $request)
  {
    $nama = $request->input('nama');
    $nim = $request->input('nim');
    $create = DB::table('mahasiswa')->insert(
      ['nama' => $nama, 'nim' => $nim]
    );
    return redirect()->route('create_form');
  }

}
