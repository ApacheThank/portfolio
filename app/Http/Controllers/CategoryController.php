<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Project;
use App\Models\Tag;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($id=null)
    {    
       if(request()->get('type')=='project'){
            $projects = Project::query()
                            ->where('category_id',$id)
                            ->orderBy('created_at','desc')
                            ->paginate(5);
            return view('project.index', [
                'categories' => Category::withCount('projects')->get(),
                'projects' => $projects
            ]);
        }
   
       if($id==null){
        //obtient les 5 derniers articles
        $recent_posts = Post::query()
            ->where('is_published',true)
            ->orderBy('created_at','desc')
            ->paginate(10);      
       }else{
            $recent_posts = Post::query()
            ->where('category_id',$id)
            ->where('is_published',true)
            ->orderBy('created_at','desc')
            ->paginate(10);
       }
       


       //assigner les variables à la vue correspondante
       return view('category.index', [
           'categories' => $this->getCategories(),
        //    'tags' => $tags,
           'recent_posts' => $recent_posts
       ]);
    }
    
    


    public function getCategories() {
        //obtient toutes les catégories
        return Category::withCount('posts')->get();
    }


}
