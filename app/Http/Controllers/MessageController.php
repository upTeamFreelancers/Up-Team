<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

class MessageController extends Controller
{
    //
    public function addmes(Request $request)
    {
        $new = new Message();
        $new->name = $_POST['name'];
        $new->email = $_POST['email'];
        $new->subject = $_POST['subject'];
        $new->message = $_POST['message'];
        $new->read = 0;
        $new->save();
        return redirect('/');
    }
}
