<?php

namespace App\Http\Controllers;

use App\User;
use App\Bidang;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{
    //untuk memvalidasi permintaan registrasi dari user
    public function validateRequest($request){
        $validated = Validator::make($request->all(),[
            'name'=>'required|string',
            'email'=>'required|email|unique:users,Email',
            'password'=>'required|string|required_with:passwordconfirmation|same:passwordconfirmation',
            'passwordconfirmation'=>'required|string',
            'phone'=>'required|digits_between:5,15',
            'bidang'=>'required'
        ]);
        return $validated;
    }

    public function validateLogin($request){
        $validated = Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required|string'
        ]);
        return $validated;
    }
    
    //untuk memasukan form registrasi user kedalam database
    public function Register(Request $request){
        $validated = $this->validateRequest($request);
        if($validated->fails()) return redirect()->back()->withInput($request->all())->withErrors($validated->errors());
        
        try{
            $user = new User;
            $user->username = $request->name;
            $user->email = $request->email;
            $user->role = "Staff";
            $user->phone = $request->phone;
            $user->password = bcrypt($request->password);
            $user->bidang_id = $request->bidang;
            $user->save();
            // dd($user);
            return redirect('/login')->with('status', "Register Behasil!");
        }
        catch(Exception $e){
            dd($e->message);
            return redirect('/registerview')->with('failed', "Terjadi Error saat melakukan Registrasi");
        }
    }
    
    //untuk menampilkan bidang yang ada pada register.blade
    public function getBidang(){
        $bidang = Bidang::all();
        return view('auth.register', compact('bidang'));
    }
    
    //untuk melihat list user
    public function index(){
        $listUser = User::all();
        return view('user.index', compact('listUser'));
    }

    //untuk menyalurkan controller ke blade edit user
    public function edit($id){
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    //untuk mengupdate data user
    public function update(Request $request, $id){
        $user = User::find($id);

        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        return redirect('/user')->with('alert', "Berhasil memperbarui profil user!");
    }
    
    //untuk menghapus user
    public function destroy($id){
        User::find($id)->delete(); 

        return redirect()->back()->with('failed', "User profil berhasil di hapus!");
    }
}
