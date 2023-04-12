<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\postingan;
use App\comment;
use Auth;

class CommentController extends Controller
{
    public function addComment(Request $request, postingan $postingan)
    {
      $request->validate([
        'content'=> 'required|min:4'
      ]);

      $comment = New comment;
      $comment->user_id = Auth::user()->id;
      $comment->content = $request->content;

      $postingan->comments()->save($comment);

      return back()->withInfo('Komentar Terkirim');
    }


    public function replyComment(Request $request, comment $comment)

    {
      $request->validate([
        'content' => 'required|min:5'
      ]);
      $reply = New comment;
      $reply->user_id = Auth::user()->id;
      $reply->content = $request->content;

      $comment->comments()->save($reply);

      return back()->withInfo('Komentar balasan terkirim');


    }
}
