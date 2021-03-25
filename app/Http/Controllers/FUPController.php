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
        $user = Auth::user();

        $request->request->add(['user_id' => $user->id]);
        $request->request->add(['product_id' => $request->produk]);
        $request->request->add(['bidang_id' => $user->Bidang->id]);
        
        
        // dd($request->hasFile('image_uploded'));

        if ($request->hasFile('file')){ 
            $file = $request->file->getClientOriginalName() . '-' . time() . '.' . $request->file->extension();
            $request->file->move(public_path('file'), $file);
            // dd($image);
         }
         $request->request->add(['file' => $request->file->getClientOriginalName()]);
        //  dd($request->all());

        FUP::create($request->all());
        
        return view('/home');
        
    }
}
