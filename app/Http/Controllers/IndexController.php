<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Project;
use App\Models\Tag;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke() { 
        //obtient les messages qui sont publiés, triés par ordre décroissant de "id". 
        $posts = Post::query()->where('is_published',true)
           ->orderBy('id','desc')
           ->get();

       //obtenir les articles vedettes
       $featured_posts = Post::query()
           ->where('is_published',true)
           ->where('is_featured',true)
           ->orderBy('id','desc')
           ->take(5)
           ->get();

       //obtient toutes les catégories
       $categories = Category::has('posts','>','0')->take(6)->get();

       //obtient tous les tags
       $tags = Tag::all();

        //obtient les 5 derniers articles
        $recent_projects = Project::query()
                ->orderBy('id','asc')
                ->take(3)
                ->get();

       //obtient les 5 derniers articles
       $recent_posts = Post::query()
           ->where('is_published',true)
           ->orderBy('created_at','desc')
           ->take(5)
           ->get();

       //assigner les variables à la vue correspondante
       return view('home', [
           'posts' => $posts,
           'featured_posts' => $featured_posts,
           'categories' => $categories,
           'tags' => $tags,
           'recent_posts' => $recent_posts,
           'recent_projects' => $recent_projects
       ]);
   }

    public function propos() { 

        //assigner les variables à la vue correspondante
        return view('contact');
    }
}
