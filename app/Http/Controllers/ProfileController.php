<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;
Use Alert;

class ProfileController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $user = User::where('id', Auth::user()->id)->first();

        return view('profile.index', compact('user'));
    }

    public function update(Request $request) {
        $this->validate($request, [
            'password' => 'confirmed',
        ]);
        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->no_hp = $request->nohp;
        $user->alamat = $request->alamat;
        if(!empty($request->password)){
            $user->name = Hash::make($request->name);
        }
        $user->update();

        alert()->success('Sukses nih','User Sukses di update');
        return redirect('profile');
    }
}
