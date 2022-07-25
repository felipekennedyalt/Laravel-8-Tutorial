<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\POST;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([

            'status' => true,
            'posts' => []
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $post = Post::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Post created sucessfully.",
            'post' => $post
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\POST  $pOST
     * @return \Illuminate\Http\Response
     */
    public function show(POST $pOST)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\POST  $pOST
     * @return \Illuminate\Http\Response
     */
    public function edit(POST $pOST)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\POST  $pOST
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, POST $pOST)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\POST  $pOST
     * @return \Illuminate\Http\Response
     */
    public function destroy(POST $pOST)
    {
        //
    }
}
