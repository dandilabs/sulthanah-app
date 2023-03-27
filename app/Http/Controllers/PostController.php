<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use App\Models\Posts;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Posts::paginate(10);
        return view('admin.post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $tag = Tags::all();
        return view('admin.post.create', compact('category','tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul'         => 'required',
            'category_id'   => 'required',
            'content'       => 'required',
            'image'         => 'required'
        ]);

        $gambar= $request->image;
        $new_gambar= time().$gambar->getClientOriginalName();

        $post = Posts::create([
            'judul'         => $request->judul,
            'category_id'   => $request->category_id,
            'content'       => $request->content,
            'image'         => 'public/uploads/posts/'. $new_gambar,
            'slug'          => Str::slug($request->judul),
            'users_id'      => Auth::id()
        ]);
        $post->tags()->attach($request->tags);
        $gambar->move('public/uploads/posts/', $new_gambar);
        return redirect()->route('post.index')->with('toast_success', 'Post success created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::all();
        $tag = Tags::all();
        $post = Posts::find($id);
        return view('admin.post.edit', compact('post','category','tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'judul'         => 'required',
            'category_id'   => 'required',
            'content'       => 'required'
        ]);

        $post = Posts::findOrfail($id);
        if($request->has('image')) {
            $image= $request->image;
            $new_image= time().$image->getClientOriginalName();
            $image->move('public/uploads/posts/', $new_image);
            $post_data =[
                'judul'         => $request->judul,
                'category_id'   => $request->category_id,
                'content'       => $request->content,
                'image'         => 'public/uploads/posts/'. $new_image,
                'slug'          => Str::slug($request->judul)
            ];
        } else {
            $post_data =[
                'judul'         => $request->judul,
                'category_id'   => $request->category_id,
                'content'       => $request->content,
                'slug'          => Str::slug($request->judul)
            ];
        }
        $post->tags()->sync($request->tags);
        $post->update($post_data);
        return redirect()->route('post.index')->with('toast_success', 'Post success updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Posts::find($id);
        $post->delete();

        return redirect()->back()->with('toast_success', 'Post success deleted');
    }

    public function tampil_hapus()
    {
        $post = Posts::onlyTrashed()->paginate(10);
        return view('admin.post.hapus', compact('post'));
    }

    public function restore($id)
    {
        $post = Posts::withTrashed()->where('id', $id)->first();
        $post->restore();
        return redirect()->back()->with('toast_success', 'Post success restore (silahkan kembali cek list post)');
    }

    public function kill($id)
    {
        $post = Posts::withTrashed()->where('id', $id)->first();
        $post->forceDelete();
        return redirect()->back()->with('toast_success', 'Post success delete');
    }
}