<?php

namespace App\Http\Controllers;

use App\FUP;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FUPController extends Controller
{
    public function show()
    {
        $user = User::all();
        $product = Product::all();
        return view('/halup', compact('user','product'));
    }

    public function store(Request $request)
    {
        FUP::create([
            'ket_ketentuan' => $request->ket_ketentuan,
            // 'no_usulan' => $request-> nousulan,
            // 'date' => $request-> nousulan,
            // 'ket_usulan' => $request-> nousulan,
            // 'ket_alasan' => $request-> nousulan,
            // 'ch_sifat' => $request-> nousulan,
            // 'pic_asman' => $request-> nousulan,
            // 'pic_nama' => $request-> nousulan,
            // 'pic_date' => $request-> nousulan,
            // 'cip_manager' => $request-> nousulan,
            // 'cip_nama' => $request-> nousulan,
            // 'cip_date' => $request-> nousulan,
            // 'qa_asman' => $request-> nousulan,
            // 'qa_nama' => $request-> nousulan,
            // 'qa_date' => $request-> nousulan,
            // 'tanggapan' => $request-> nousulan,
            // 'bidang' => $request-> nousulan,
            // 'file' => $request-> nousulan
        ]);
        dd($request);
        //atau

        // FUP::create($request->all());
        
        return view('/home');
        
    }
}
