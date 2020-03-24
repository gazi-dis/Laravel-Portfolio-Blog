<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use App\Post;
use App\Tag;
use App\User;
use App\Category;
use Cache;

class FrontendController extends Controller
{
    public function index()
    {
        $contents = Cache::get('bilgiler', function () {
            return Content::where('slug', 'services-content')->get();
        });
        $projects = Cache::get('bilgiler-projects', function () {
            return Content::where('slug', 'projects-content')->get();
        });
        $posts = Cache::get('bilgiler-posts', function () {
            return Post::all();
        });
        return view('homepage')
        ->with('contents', $contents)
        ->with('categories', Category::all())
        ->with('posts', $posts)
        ->with('projects', $projects);
    }

    public function blogIndex()
    {
        $posts = Cache::get('bilgiler-posts', function () {
            return Post::all();
        });
        $contents = Cache::get('bilgiler', function () {
            return Content::where('slug', 'services-content')->get();
        });
        return view('blog')
        ->with('contents', $contents)
        ->with('categories', Category::all())
        ->with('posts', $posts);
    }

    public function singlePost($slug)
      {
        $contents = Cache::get('bilgiler', function () {
            return Content::where('slug', 'services-content')->get();
        });

          $post = Post::where('slug', $slug)->first();
          
          $next_id = Post::where('id', '>', $post->id)->min('id');
          $prev_id = Post::where('id', '<', $post->id)->max('id');

          $user = User::where('id',$post->user_id)->first();
          return view('single')->with('post', $post)
                               ->with('title',$post->title)
                               ->with('categories',Category::all())
                               ->with('next',Post::find($next_id))
                               ->with('prev',Post::find($prev_id))
                               ->with('contents', $contents)
                               ->with('user', $user);
      }

    public function tag($id)
    {
        $contents = Cache::get('bilgiler', function () {
            return Content::where('slug', 'services-content')->get();
        });
        $tag = Tag::find($id);
        return view('tag')->with('tag',$tag)
                            ->with('title', $tag->tag)
                            ->with('contents', $contents)
                            ->with('categories', Category::take(5)->get());
    }

    public function category($id)
    {
        $contents = Cache::get('bilgiler', function () {
            return Content::where('slug', 'services-content')->get();
        });
        $category = Category::find($id);
        return view('category')->with('category', $category)
                                ->with('title',$category->name)
                                ->with('contents', $contents)
                                ->with('categories', Category::take(5)->get());
    }


}
