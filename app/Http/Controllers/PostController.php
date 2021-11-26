<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Spatie\Translatable\HasTranslations;

class PostController extends Controller
{
    use HasTranslations;
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  StorePostRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $post = new Post();
        $translations = ['ar' =>$request->title_en, 'ur' =>$request->title_en];
        $post->title_en = ['en' => $request->title_en, 'ur' => $request->title_ur];
        $post->full_text_en = ['en' => $request->full_text_en, 'ur' => $request->full_text_ur];        
        $post->save();
        // dd($post);
        return redirect()->route('dashboard');
    }
}
