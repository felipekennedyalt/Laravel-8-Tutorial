<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(){

        //Non fluent
        //DB::select(['table' => 'posts], 'where' => ['id' => 1]) 

        //fluent
        //DB::table('posts')->where('id', 1)->get()
        //return view('posts/index');

        //$posts = DB::select('SELECT * FROM posts WHERE id = id', ['id' => 3]);
        //$posts = DB::select('SELECT * FROM posts WHERE id = ?', [3]);

        $id = 1;

        //$posts = DB::table('posts')->where('id', $id)->get();
        //$posts = DB::table('posts')->select('body')->get();
        //$posts = DB::table('posts')->where('created_at', '<', now()->subDay())->get();
        //$posts = DB::table('posts')->where('created_at', '>', now()->subDay())->orWhere('title', 'Prof.')->get();
        //$posts = DB::table('posts')->whereBetween('id', [2,4])->get();
        //$posts = DB::table('posts')->whereNotNull('title')->get();

        //esse é bom pra os hacker invadir (WhereRaw)
        //$posts = DB::table('posts')->whereRaw('title')->get();
        //$posts = DB::table('posts')->select('title')->distinct()->get();
        //$posts = DB::table('posts')->orderBy('id','desc')->get();
        //$posts = DB::table('posts')->latest()->get();
        //$posts = DB::table('posts')->oldest()->get();
        //$posts = DB::table('posts')->inRandomOrder()->get();
        // $posts = DB::table('posts')->orderByDesc('created_at')->first();
        //$posts = DB::table('posts')->find($id);
        //$posts = DB::table('posts')->orWhere('id', $id)->count();
        //$posts = DB::table('posts')->min('id');
        //$posts = DB::table('posts')->max('id');
        //$posts = DB::table('posts')->avg('id');
        
        
        //$posts = DB::table('posts')->insert([
        //    'title' => 'New post',
        //    'body' => 'New body'
        //]);

        //$posts = DB::table('posts')->where('id', '=', 1)->update([
        //    'title' => 'Updated title',
        //    'body' => 'Updated body'
        //]);

        //$posts = DB::table('posts')->where('id', '=', 3)->delete();
        $posts = DB::table('posts')->get();


       //
        dd($posts);
    }
}
