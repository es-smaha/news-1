<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class c_post extends Controller
{
    public function showpost() {
        $posts=Post::orderBy('post_id','desc')->paginate(3);
        return view("posts.posts",compact("posts"));

    } 
    public function addpost() {
    
        $categories=Category::all();
        return view("admin.postts",compact("categories"));
    }
    public function insertpost(Request $request) {
        $request->validate([
            "title" =>"required|min:4" , //max:100 pour maximaliser le nbr de caractere, unique pour que le titre soit unique
            "content" => "required|min:20" ,
            "catid" => "required"
        ] ,
    [
           // "title.required" => "sa7a7lna title al7aj", pour afficher le msg qu'on veut
           // "content.required" => "contenu hadal am3alem wella kad7ek?"
    ]);
        $addpost = new Post;
        
        $addpost->p_title=request("title");
        $addpost->p_content=request("content");
        $addpost->post_user=request("userid");
        $addpost->post_cat=request("catid");
        $addpost->save();
        
        return redirect("/posts");

    }

    public function editpost($id){
        $categories=Category::all();
        $post= Post::find($id);
        return view("admin.editpost",compact("categories" , "post") );
    }

    public function updatepost($id){
        $updatepost= Post::find($id);
        $updatepost->p_title=request("title");
        $updatepost->p_content=request("content");
        $updatepost->post_user=request("userid");
        $updatepost->post_cat=request("catid");
        $updatepost->save();
        return redirect("/posts");
    }
}
?>