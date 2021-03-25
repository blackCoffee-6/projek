<?php

namespace App\Http\Controllers;

use App\Bidang;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    //untuk melihat list bidang
    public function getBidang(){
        $bidang = Bidang::all();
        return view('/listBidang', compact('bidang'));
    }

    //untuk menghapus bidang
    public function destroy($id){
        $bidang = Bidang::where('id',$id)->firstOrFail();
        $bidang->delete();
        if($bidang != null){
            $bidang->delete();
        }
        return redirect()->back();
    }
}
