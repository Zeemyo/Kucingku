<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\postingan;
use App\category;
use App\User;

class FrontendController extends Controller
{
  public function index()
  {
    $total_post = postingan::all()->count();
    $total_cat = category::all()->count();
    $total_user = user::all()->count();

    return view('index', compact('total_post', 'total_cat', 'total_user'));
  }
}
