<?php

namespace App\Http\Controllers;
use models\lokasi;
use App\Flight;
use Laravel\Lumen\Routing\Controller as BaseController;
use DB;
use Illuminate\Http\Request;
class GpsController extends BaseController
{
    public function index()
    {
      // $lokasi = lokasi::all();
      // return response()->json($lokasi);

        $data = DB::table('lokasi')->get();
        return $data;
    }

    public function show($id)
    {
       $lokasi = lokasi::find($id);
       return response()->json($lokasi);
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

    public function edit(Request $request, $id)
    {
        $input = $request->all();
      $lokasi =DB::table('lokasi')->update($input);
			$lokasi->namaTempat = $request->input('namaTempat');
      $lokasi->latitude = $request->input('latitude');
      $lokasi->longlitude = $request->input('longlitude');
      $lokasi->save();
      return response()->json($lokasi);

    }

    public function delete($id)
    {
      $lokasi = lokasi::find($id);
      $lokasi->delete();
      return response()->json('lokasi removed successfully');

      // lokasi::destroy($id);
      // return response()->json(['message' => 'Successfully Deleted']);

    }


}
