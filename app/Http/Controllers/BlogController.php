<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contacts;
use App\Models\Posts;
use App\Models\Tags;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(Posts $posts)
    {
        $category_widget = Category::all();
        $tag = Tags::all();
        $data = $posts->latest()->take(6)->get();
        return view('blog', compact('data','category_widget','tag'));
    }

    public function isi_blog($slug)
    {
        $category_widget = Category::all();
        $tag = Tags::all();
        $data = Posts::where('slug', $slug)->get();
        return view('blog.isi_post', compact('data','category_widget','tag'));
    }

    public function list_post()
    {
        $category_widget = Category::all();
        $tag = Tags::all();
        $data = Posts::latest()->paginate(5);
        return view('blog.list_post', compact('data','category_widget','tag'));
    }

    public function about()
    {
        $category_widget = Category::all();
        $tag = Tags::all();
        return view('about.index',compact('category_widget','tag'));
    }

    public function contact()
    {
        $category_widget = Category::all();
        $tag = Tags::all();
        return view('contact.index',compact('category_widget','tag'));
    }

    public function contact_proses(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required|email|unique:contacts',
            'subject'   => 'required|min:3',
            'notelp'    => 'required',
            'message'   => 'required'
        ]);
        $data = Contacts::create([
            'email'     => $request->email,
            'subject'   => $request->subject,
            'notelp'    => $request->notelp,
            'message'   => $request->message,
        ]);
        return redirect()->route('contacts.index')->with('success','Pesan berhasil di kirim, mohon tunggu balasan dari admin');
    }

    public function list_category(Category $category)
    {
        $category_widget = Category::all();
        $tag = Tags::all();
        $data = $category->posts()->paginate();
        return view('blog.list_post', compact('data','category_widget','tag'));
    }

    public function cari(Request $request)
    {
        $category_widget = Category::all();
        $tag = Tags::all();
        $data = Posts::where('judul', $request->cari)->orWhere('judul','like','%'.$request->cari. '%')->paginate(5);
        return view('blog.list_post', compact('data','category_widget','tag'));
    }
}