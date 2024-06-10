<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        if(Auth::id() == 1){
            $users = User::all();
        }else{
            $users = User::where('id','!=',1)->get();
        }
        
        return view('auth/dashboard/index',compact('users'));
    }

    public function add(){
        return view('auth/dashboard/add');
    }
    public function add_action(Request $request)
    {
        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->to('/users')->with('success','Data berhasil ditambahkan');
    }

    public function edit($id){
        $user = User::find($id);
        return view('auth/dashboard/edit',compact('user'));
    }

    public function update(Request $request,$id){
        $data = $request->except(['_token','password']);
        if($request->password){
            $data['password'] = Hash::make($request->password);
        }
        User::where('id',$id)->update($data);
        return redirect()->to('/users')->with('success','Data berhasil diubah');
    }

    public function delete($id){
        User::destroy($id);
        return redirect()->back()->with('success','Data berhasil dihapus');
    }

}
