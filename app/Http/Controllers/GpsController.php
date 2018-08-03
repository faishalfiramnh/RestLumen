<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use DB;
use Illuminate\Http\Request;
class GpsController extends BaseController
{
    public function index()
    {
        $data = DB::table('lokasi')->get();
        return $data;
    }

    public function create(Request $request)
    {
      $input = $request->all();
      $data = DB::table('lokasi')->insert($input);

      if($data){
        $res['sucess'] = true;
        $res['message'] = "Data tersimoan";
      }else{
        $res['sucess'] = false;
        $res['message'] = "Data gagal tersimoan";
      }

      return $res;
    }

    // public function update(Request $request)
    // {
    //   $isi = DB:table('lokasi')->update($id);
    //   // $isi = lokasi::find($id); //objes kls  tidak boleh sama dengan nama tabel
    // 	$isi->namaTempat = $request->namaTempat;
    // 	$isi->latitude = $request->latitude;
    // 	$isi ->longlitude = $request ->longlitude;
    // 	$isi->save();
    //
    //   if($isi){
    //     $pp['sucess']= true;
    //     $pp['message']= "data tersimpan";
    //   }
    //   else {
    //     $pp['sucess']= false;
    //     $pp['message']="gagal";
    //   }
    // 	return $pp;
    //
    // }
}
