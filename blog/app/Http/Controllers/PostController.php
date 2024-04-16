<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        $posts = [
            [
                'id' => 1,
                'title' => 'Post 1',
                'body' => 'Post 1 body',
                'posted_by' => 'admin'
            ],
            [
                'id' => 2,
                'title' => 'Post 2',
                'body' => 'Post 2 body',
                'posted_by' => 'admin 2'
            ],
            [
                'id' => 3,
                'title' => 'Post 3',
                'body' => 'Post 3 body',
                'posted_by' => 'admin 3'
            ],
            [
                'id' => 4,
                'title' => 'Post 4',
                'body' => 'Post 4 body',
                'posted_by' => 'admin 4'
            ]
        ];
        
        return view('posts.index', ['posts' => $posts]);

    }
    function create (){
        return view('posts.create');
    }
    function store(Request $request){
        return redirect('/posts');


    }
    function show($id){
        $post = [
            'id' => $id,
            'title' => 'Post ' . $id,
            'body' => 'Post ' . $id . ' body',
            'posted_by' => 'admin ' . $id
        ];
    
        return view('posts.show', ['post' => $post]);
    }
    function edit($id){
        $post = [
            'id' => $id,
            'title' => 'Post ' . $id,
            'body' => 'Post ' . $id . ' body',
            'posted_by' => 'admin ' . $id
        ];
    
        return view('posts.edit', ['post' => $post]);
    }
    function update($id , Request $request ){
        // return 'updated';   
        return redirect('/posts');
    }
    
    function destroy($id){
        return redirect('/posts');
    }
    
}
