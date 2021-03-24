<?php

namespace App\Http\Controllers;

use App\Bidang;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    //untuk melihat list bidang
    public function getBidang(){
        $bidang = Bidang::all();
        return view('/listBidang', ['bidang'=>$bidang]);
    }

    //untuk menghapus bidang
    public function deleteData($id){
        $bidang = new Bidang;
        $bidang->deleteBidang($id);

        return redirect('/listBidang');
    }
}
