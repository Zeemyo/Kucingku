<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\postingan;
use App\artikel;
use Validator;


class PageController extends Controller
{

    public function index(){
      $total_postingan = postingan::all()->count();
      $total_category = category::all()->count();
      $total_artikel = artikel::all()->count();

      $posts = Postingan::with('user')->paginate(3);
      $article = artikel::with('user')->paginate(3);
      $category = Category::orderBy('updated_at', 'desc')->paginate(2);


      return view('index', compact('posts','article', 'category', 'total_postingan', 'total_category', 'total_artikel'));
    }

  // public function paginate(){
  //
  //
  //
  //   return view('index', compact('posts', 'artikel'));
  // }

    public function readmore(postingan $postingan)
    {
      return view('readmore', compact('postingan'));

    }
    public function readmoreartikel(artikel $artikel)
    {
      return view('readmoreartikel', compact('artikel'));

    }




}
