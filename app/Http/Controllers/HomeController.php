<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale();
        $posts = Post::all();   
        // foreach ($posts as $value) {
        //     $title = json_decode($value->title_en);
        //     $desc = json_decode($value->full_text_en);
        // }

        // $posts = Post::select(['id', 'title_' . $locale, 'full_text_' . $locale])
        //     ->latest()
        //     ->whereNotNull('title_' . $locale)
        //     ->where('title_' . $locale, '!=', '')
        //     ->take(10)
        //     ->get();
        // var_dump($val->title_en->en);

        return view('home', compact('posts'));
    }

    public function getArticles(Request $request)
    {
        $results = Post::orderBy('id')->paginate(10);
        $artilces = '';
        if ($request->ajax()) {
            foreach ($results as $result) {
                $artilces.='<div class="card mb-2"> <div class="card-body">'.$result->id.' <h5 class="card-title">'.$result->post_name.'</h5> '.$result->post_description.'</div></div>';
            }
            return $artilces;
        }
        return view('home2');
    }    
}
