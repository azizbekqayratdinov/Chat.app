<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function message_store(Request $request , $user2_id){
        Message::create([
            'user1_id'=>Auth::user()->id,
            'user2_id'=>$user2_id,
            'message'=>$request->message
        ]);
        // History::create([
        //     'user1_id'=>Auth::user()->id,
        //     'user2_id'=>$user2_id,
        //     'message_id'=>
        // ]);
        $id = $user2_id;
        $user2 = User::find($id);
        $messages_user1 = Message::where('user2_id' , $id)->where('user1_id' , Auth::user()->id)->get();
        $messages_user2 = Message::where('user2_id' , Auth::user()->id)->where('user1_id' , $id)->get();
        return view('livewire.window-comp' , compact('id' , 'user2' , 'messages_user1' , 'messages_user2'));
    }
}
