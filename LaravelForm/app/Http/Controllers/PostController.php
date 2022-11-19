<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {
        return view('add-blog-post-form');
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('add-blog-post-form')->with('status', 'Blog Post Form Data Has Been inserted');
    }

    public function read()
    {
        $model_post = new Post;
        $data=$model_post->all();
        //echo "<pre>":
        return view ('add-blog-post-form',['data'=>$data]);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->update();
        return redirect('/add-blog-post-form')->with('status', 'Blog Post Form Data Has Been updated');
    }

    public function edit($id)
    {   
        $data = Post::findOrFail($id);
        return view('edit', ['data' =>$data]);
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/add-blog-post-form')->with('status', 'Blog Post Form Data Has Been deleted');
    }
}
?>