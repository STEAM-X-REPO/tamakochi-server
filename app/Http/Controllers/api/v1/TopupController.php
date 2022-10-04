<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\TopupDiamon;
use App\Models\TopupPangan;
use Illuminate\Http\Request;

class TopupController extends Controller
{
    public function TopupDiamon(){
        $diamon = TopupDiamon::where("status",true)->get(["id","diamon","price"]);
        return response()->json(['status' => '200', 'data'=>$diamon,'msg'=>'Topup Diamon by Rupiah'],200);
    }
    public function TopupPangan(){
        $pangan = TopupPangan::where("status",true)->get(["id","pangan","diamon"]);
        return response()->json(['status' => '200', 'data'=>$pangan,'msg'=>'Topup Pangan by Diamon'],200);
    }
}
