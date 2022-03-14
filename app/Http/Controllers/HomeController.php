<?php

namespace App\Http\Controllers;
use App\Models\Reg_districts;
use App\Models\Reg_provinces;
use App\Models\Reg_regencies;
use App\Models\Reg_villages;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $provinces = Reg_provinces::all();
        return view('home',['page_title'=>'Provinsi','provinsi'=>$provinces]);
    }
    public function getReg_regencies(Request $request){
        $regencies = Reg_regencies::where("province_id",$request->province_id)->pluck('id','name');
        return response()->json($regencies);
    }
    public function getReg_districts(Request $request){
        $regencies = Reg_districts::where("regency_id",$request->regency_id)->pluck('id','name');
        return response()->json($regencies);
    }
    public function getReg_villages(Request $request){
        $regencies = Reg_villages::where("district",$request->regency_id)->pluck('id','name');
        return response()->json($regencies);
    }
}
