<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('welcome');
    }
    public function home(){
        return view('home');
    }
    // public function go_home($id){
    //     $user2 = User::find($id);
    //     return view('home', compact('id' , 'user2'));
    // }
    public function window($id){
        $user2 = User::find($id);
        $messages_user1 = Message::where('user2_id' , $id)->where('user1_id' , Auth::user()->id)->get();
        $messages_user2 = Message::where('user2_id' , Auth::user()->id)->where('user1_id' , $id)->get();
        return view('livewire.window-comp' , compact('id' , 'user2' , 'messages_user1' , 'messages_user2'));
    }
    public function login_store(Request $request)
    {
        $data = $request->validate([
            'phone' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }
        return back();
    }
}
