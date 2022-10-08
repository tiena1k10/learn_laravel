<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function index($id)
    {
        // $posts = DB::select("select * from posts where id = :id;", [
        //     'id' => $id
        // ]);
        $posts = DB::table("posts")->where('id', $id)->get();
        return response()->json($posts);
    }
}